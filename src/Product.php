<?php

class Product{
    private $id;
    private $price;
    private $name;
    private $quantity;
    
    public function __construct($id, ProductPrice $price, $name, Quantity $quantity) { //price najpierw sprawdzi w klasie ProductPrice
        $this->price = $price;
        $this->name = $name;
        $this->quantity = $quantity;
    }
    public function getId(){
        return $this->id;
    }
    /**
     * 
     * @return ProductPrice
     */
    public function getPrice(){
        return $this->price;
    }
    public function getName(){
        return $this->name;
    }
    /**
     * 
     * @return Quantity
     */
    public function getQuantity(){
        return $this->quantity;
    }
}
