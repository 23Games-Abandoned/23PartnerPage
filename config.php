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
$style  =   'parallaxjs';
$fb     =   "Kagaminium";
$token  =   "CAANtbEzcjRUBAOk4G6vwi5ZCZCqTjsF5XZCrZAWKuvSf1enmINRhKKs6hNoXw22fyh1Jv7h7qkk4E1BUtYiHyO36Ou1Y7jxcK5ZAnsZCG8Wm7Be5a0vIKC2ZB3hHm7dVHGLIPScPs6CLjZAEYTEPwfljHewmR1eeDqpksFChL4tZAKavIWksdZCMvrE0dpDBHolicZBCZAGltyZCBOTZBxv2wf3Q4KewsKoE6y1CIZD";
$config =   [
    'owner'         =>  'Kagaminium',
    'mail'          =>  'otlet@jest.guru',
    'description'   =>  'Tutaj jakiś opis',
    'aboutme'       =>  'Hej, jestem Kagamonium, lubię małych chłopców.',
    'aboutme_content' =>  "Skoro już nolife'uje no czemu nie streamować. Mam w życiu 26 level, gram od czasów Snesa,<br>
                          poprzez takie konsole jak PSX, PS2, PS3, Xbox, xboxa360, Dreamcasta (nawet 2 razy) Obecnie nie posiadam konsoli,<br>
                          podejrzewam że zmieni się to gdy zostanie zapowiedziane Gran Turismo 7<br>
                          Oglądam sporo anime, a i dobry film/serial obejrzę.<br>
                          Jak stream odpali to pierwszymi rzeczami na jakie uzbieram to 2 monitor,<br>
                          konkretna kamerka oraz w przyszłości drugi komputer do enkodowania streama.<br>",
];
