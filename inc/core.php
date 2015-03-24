<?php
/**
 * Copyright 2015 potlewski
 * 23PartnerPage
 */

include_once(BASEPATH.'template.php');

class core {

    public function __constructor($path){
        include ($path.'template.php');
        echo "DUPA";
    }
}