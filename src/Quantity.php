<?php

class Quantity{
    private $value;
    
    public function __construct($value) {
        if(!(is_int($value) && $value >= 0)){
            die('ZŁA ILOSC PRODUKTOW');
        }
        $this->value = $value;
    }
    
    public function getQuantity(){
        return $this->value;
    }
}