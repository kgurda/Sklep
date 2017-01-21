<?php

class CartItem { //który produkt kupujemy w jakiej ilości, robione dla Cart
    private $product;
    private $quantity;
    
    public function __construct(Product $product, Quantity $quantity) {
        
        $productQuantity = $product->getQuantity()->getValue(); //ile mamy produktów na magazynie
        $cartItemQuantity = $quantity->getValue(); // ile produktów chcemy kupić
        
        if($cartItemQuantity> $productQuantity) {
//            die('NIE MOŻNA ZAMÓWIĆ WIĘCEJ NIŻ MAMY');
            $quantity = new Quantity($productQuantity); //jeśli chcemy zamóiwć więcej niż jest na magazynie to zamawiamy tylko tyle ile jest
            // nie poinformowaine klienta!!!!!
        } 
        
        $this->product = $product;
        $this->quantity = $quantity;
    }
    public function getProduct(){
        return $this->product;
    }
    public function getQuantity(){
        return $this->quantity;
    }
}