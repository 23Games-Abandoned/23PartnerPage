<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

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
}