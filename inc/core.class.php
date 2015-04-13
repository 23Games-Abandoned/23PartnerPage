<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

namespace Siewo;

class core {
    protected $url;

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
          <div class="pad" style="text-align: center">
                <object bgcolor="#000000" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" type="application/x-shockwave-flash" right height="60%" width="50%">
                    <param name="allowFullScreen" value="true" />
                    <param name="allowNetworking" value="all" />
                    <param name="allowScriptAccess" value="always" />
                    <param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />
                    <param name="flashvars" value="channel='.$channel_name.'&auto_play=true&start_volume=25" />
                </object>
                <iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/'.$channel_name.'/chat" left height="60%" width="30%"></iframe>
          </div>
';

    }
}
