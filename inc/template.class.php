<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

namespace Siewo;

class template {

    protected $render;
    protected $style;

    public function __contruct($theme){
        $style=$theme;
    }

    public function render($style, $plik, $tablica, $jezyk){
        $this->render=file_get_contents($style.$plik.".php");
        foreach($tablica as $t => $content){
            $this->render=str_replace("{".$t."}", $content, $this->render);
        }
        $this->render=preg_replace('({(.*?)})', "", $this->render);

        foreach($jezyk as $t => $content){
            $this->render=str_replace("^".$t."^", $content, $this->render);
        }
        $this->render=preg_replace('({(.*?)})', "", $this->render);

        echo $this->render;
    }

    public function __desctruct(){
        unset($this->render);
    }
}