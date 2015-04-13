<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

class Siewo{
    public static function Autoloader($path){
        Siewo::loader($path,'core');
        Siewo::loader($path,'json');
        Siewo::loader($path,'template');
        Siewo::loader($path,'xml');
    }

    static function loader($path,$class){
        include $path.$class.'.class.php';
    }
}