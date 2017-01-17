<?php

class Cart {
    
    private $customer;
    private $items;


    public function __construct(Customer $customer) { //robimy to dlatego żeby zapisać customera i musimy zawsze podsać atrybut klasy Customer
        $this->customer=$customer;
        $this->items=[];
    }
    
    public function getCustomer() { //dzięki geterowi dostaniemy napewno customera klasy Customer
        return $this->customer;
    }
    
    public function addCartItem(CartItem $cartItem){
        $this->items[]=$cartItem;
    }
    public function getTotalSum(){
        
        $sum = 0;
        foreach ($this->items as $item){
            $sum+=$item->getQuantity()->getValue()* $item->getProduct()->getPrice()->getPrice();
        }
        return $sum;
    }
}