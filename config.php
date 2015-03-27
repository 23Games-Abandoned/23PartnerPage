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
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'dev');
$system_path    = 'inc';

//Konfiguracja podstawowa
$style  =   'kagaminium';
$fb     =   "Kagaminium";
$token  =   "CAANtbEzcjRUBAOk4G6vwi5ZCZCqTjsF5XZCrZAWKuvSf1enmINRhKKs6hNoXw22fyh1Jv7h7qkk4E1BUtYiHyO36Ou1Y7jxcK5ZAnsZCG8Wm7Be5a0vIKC2ZB3hHm7dVHGLIPScPs6CLjZAEYTEPwfljHewmR1eeDqpksFChL4tZAKavIWksdZCMvrE0dpDBHolicZBCZAGltyZCBOTZBxv2wf3Q4KewsKoE6y1CIZD";
$config =   [
    'owner'         =>  'Kagaminium',
    'mail'          =>  'otlet@jest.guru',
    'description'   =>  'Tutaj jakiś opis',
];

