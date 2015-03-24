<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

if(!defined("tag"))
{
    die("Nie ma tak fajnie ziomek!");
}

//Konfiguracja zaawansowana
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'production');
$system_path = 'inc';

//Konfiguracja podstawowa
$style  =   'kagaminium';
$config =   [
    'owner'         =>  'Kagaminium',
    'description'   =>  'Tutaj jakiś opis',
];

