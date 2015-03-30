<?php
/**
 * 23PartnerPage
 *
 * @author      Paweł Otlewski <otlet@jest.guru>
 * @copyright   2015 PanOtlet
 * @link        http://panotlet.tk/23PartnerPage
 * @license     http://panotlet.tk/23PartnerPage/LICENSE
 */

header('Content-Type: text/html; charset=UTF-8');

define('tag',1);

include ('config.php');

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "pl":
        include("content/language/pl.lang.php");
        break;
    default:
        include("content/language/en.lang.php");
        break;
}

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
$config['tpl']   =   $theme  =   'content/theme/'.$style.'/';

require_once BASEPATH.'core.php';
    $core   =   new core(BASEPATH);
    $layout =   new template($theme);

/** @var array $fbfeed
$fbfeed =   $core->fbfeed($fb,$token);

foreach($fbfeed->data as $post){
    $posts .= '<p><a href="' . $post->link . '">' . $post->message . '</a></p><br />
    ';
}

$config['fbfeeds']  =   $posts;*/

if (!isset($_GET['p']) || empty($_GET['p'])){
        $layout->render($theme, 'index',$config, $lang);
} else {
    switch($_GET['p']){
        case "mail":
            $mail=$_POST['mail'];
            $layout->render($theme, 'index',$config, $lang);
            $core->poczta($mail['mail'],$mail['mess'],$mail['nick'],$config['mail']);
            break;
        default:
            if (file_exists($theme.$_GET['p'].'.tpl')){
                $layout->render($theme, $_GET['p'], $config, $lang);
            } else {
                $layout->render($theme, '404',$config, $lang);
            }
    }
}