<?php

class CartItem { //który produkt kupujemy w jakiej ilości, robione dla Cart
    private $product;
    private $quantity;
    
    public function __construct(Product $product, Quantity $quantity) {
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