<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

//Ładowanie pliku konfiguracyjnego
include_once 'config.php';

//Definiowanie ścieżki do aplikacji, sprawdzanie jej poprawności i ładowanie klasy Siewo
define('BASEPATH', $system_path.'/');
if ( !is_dir($system_path))
{
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'Ziomek. Źle zdefiniowałeś ścieżkę systemową. Ogarnij się! '.pathinfo(__FILE__, PATHINFO_BASENAME);
    exit(3);
}

//Ustawianie języka dla aplikacji
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "pl":
        include("content/language/pl.lang.php");
        break;
    default:
        include("content/language/en.lang.php");
        break;
}

//Sprawdzanie statusu aplikacji (deweloperska, testowa lub produkcyjna)
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
