<?php

class Cart {
    
    private $customer;
    
    public function __construct(Customer $customer) { //robimy to dlatego żeby zapisać customera i musimy zawsze podsać atrybut klasy Customer
        $this->customer=$customer;
    }
    
    public function getCustomer() { //dzięki geterowi dostaniemy napewno customera klasy Customer
        return $this->customer;
    }
}