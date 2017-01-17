<?php

class ProductPrice{ //tworzymy tę klasę żeby sprawdzić warunki ceny. nie przepuści do budowania obiektu niepoprawnej ceny - przechowywanie poprawnej ceny
    private $price;
    
    public function __construct($price) {
        if(!(is_numeric($price) && $price > 0)){
            die('ZŁA CENA PRODUKTU');
        }
        $this->price = $price;
    }
    
    public function getPrice(){
        return $this->price;
    }
}