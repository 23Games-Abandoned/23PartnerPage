<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

header('Content-Type: text/html; charset=UTF-8');

define('tag',1);

include ('config.php');

switch (ENVIRONMENT)
{
    case 'dev':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;
    case 'test':
    case 'prod':
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.4', '>='))
        {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        }
        else
        {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
        break;
    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'Ktoś źle ustawił skrypt. Sorry ziom!';
        exit(1);
}

define('BASEPATH', $system_path.'/');

if ( ! is_dir($system_path))
{
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'Ziomek. Źle zdefiniowałeś ścieżkę systemową. Ogarnij się! '.pathinfo(__FILE__, PATHINFO_BASENAME);
    exit(3);
}

/** @var string $theme */
$theme  =   'content/theme/'.$style.'/';

require_once BASEPATH.'core.php';
    $core   =   new core(BASEPATH);
    $layout =   new template($theme);

/** @var array $fbfeed */
$fbfeed =   $core->fbfeed($fb,$token);

foreach($fbfeed->data as $post){
    $posts .= '<p><a href="' . $post->link . '">' . $post->message . '</a></p><br />
    ';
}

$config['fbfeeds']  =   $posts;

if (!isset($_GET['p']) || empty($_GET['p']) || !file_exists($theme.$_GET['p'])){
    $layout->render($theme, 'index',$config);
} else {
    switch($_GET['p']){
        case "mail":
            $mail=$_POST['mail'];
            $layout->render($theme, 'index',$config);
            $core->poczta($mail['mail'],$mail['mess'],$mail['nick'],$config['mail']);
            break;
        default:
            $layout->render($theme, $_GET['p'],$config);
    }
}