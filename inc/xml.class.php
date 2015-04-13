<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

class xml {

    public static function getRSS($rss_url){
        $xml = simplexml_load_file($rss_url);
        echo "<ul>";
        foreach ($xml->channel->item as $entry) {
            echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
        }
        echo "</ul>";
    }
}