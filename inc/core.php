<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

include_once(BASEPATH.'template.php');
include_once(BASEPATH.'json.php');
include_once('content/language/loader.php');

class core {
    protected $url;

    public static function fbfeed($page_id,$token){
        $url    =   "https://graph.facebook.com/".$page_id."/posts?locale=pl_PL&access_token=".$token;
        $request=   file_get_contents($url);
        $result =   JsonHandler::decode($request);
        return $result;
    }

    public function poczta($mail,$mess,$nick,$ownmail){

        $naglowki = "Reply-to: ".$nick." <".$mail.">".PHP_EOL;
        $naglowki .= "From: 23Games <biuro@23games.me>".PHP_EOL;
        $naglowki .= "MIME-Version: 1.0".PHP_EOL;
        $naglowki .= "Content-type: text/html; charset=utf-8".PHP_EOL;

        $wiadomosc = '<html>
           <head>
              <title>Wiadomość ze strony 23Games</title>
           </head>
           <body>
              <p>'.$mess.'</p>
              <p>Autor wiadomości: '.$nick.' <'.$mail.'></p>
           </body>
           </html>';

        if(mail($ownmail, 'Wiadomość ze strony partnerskiej 23Games', $wiadomosc, $naglowki))
        {echo "<script>alert('Wiadomość wysłana poprawnie')</script>";}
        else {echo "<script>alert('Wystąpił nieoczekiwany błąd')</script>";}
    }
}