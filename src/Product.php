<?php

class Product{
    protected $id;
    protected $price;
    protected $name;
    protected $quantity;
    
    public function __construct(ProductPrice $price, $name, Quantity $quantity) { //price najpierw sprawdzi w klasie ProductPrice
        $this->id = null;
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
    public function setPrice(ProductPrice $price){
        $this->price = $price;
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
