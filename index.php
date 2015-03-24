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
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;
    case 'testing':
    case 'production':
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
$theme = 'content/theme/'.$style.'/';
require_once BASEPATH.'core.php';
    $core   =   new core(BASEPATH);
    $layout =   new template($theme);

if (!isset($_GET['p']) || !file_exists($theme.$_GET['p'])){
    $layout->render($theme, 'index',$config);
} else {
    $layout->render($theme, $_GET['p'],$config);
}