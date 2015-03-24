<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

class template {

    public $render;
    public $style;

    public function __contruct($theme){
        $style=$theme;
    }

    public function render($style, $plik, $tablica){
        $this->render=file_get_contents($style.$plik.".tpl");
        foreach($tablica as $t => $content){
            $this->render=str_replace("{".$t."}", $content, $this->render);
        }
        $this->render=preg_replace('({(.*?)})', "", $this->render);
        echo $this->render;
    }

    public function __desctruct(){
        unset($this->render);
    }
}