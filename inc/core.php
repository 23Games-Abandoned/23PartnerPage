<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

if(!defined("tag"))
{
    die("Nie ma tak fajnie ziomek!");
}

include_once(BASEPATH.'template.php');
include_once(BASEPATH.'json.php');

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

    public function twitch($channel_name){
        return '
          <div class="f0 center w1000 pad">
            <div class="f0 center w700 pad">
                <object bgcolor="#000000" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" height="100%" type="application/x-shockwave-flash" width="100%">
                    <param name="allowFullScreen" value="true" />
                    <param name="allowNetworking" value="all" />
                    <param name="allowScriptAccess" value="always" />
                    <param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />
                    <param name="flashvars" value="channel='.$channel_name.'&auto_play=true&start_volume=25" />
                </object>
              </div>
            <div class="f0 center w200 pad">
                <iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/'.$channel_name.'/chat" height="100%"  width="100%"></iframe>
            </div>
          </div>
';

    }
}
