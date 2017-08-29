<?php

class hello {

    public $data;
    
    function __construct() {
        $data = 'hello';
    }

    function read(){
        return $this->data;
    }
    
}
