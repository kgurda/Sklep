<?php

include_once 'library.php';

$customer = new Customer(1, "Jan", "Kowalski");
$cart = new Cart($customer);

// Product
$product1 = new Product(1, new ProductPrice(200), 'szampan', new Quantity(10));
$product2 = new Product(2, new ProductPrice(500), 'kawior' , new Quantity(2));
$product3 = new Product(3, new ProductPrice(10), 'wykałaczki', new Quantity(100));

// Dodawanie do koszyka produktów w odpoiwedniej ilości
$cart->addCartItem(new CartItem($product1, new Quantity(2)));
$cart->addCartItem(new CartItem($product3, new Quantity(43)));
$cart->addCartItem(new CartItem($product2, new Quantity(3)));


//Podsumowanie
echo 'Podsumowanie koszyka: '. $cart->getTotalSum() . '<br>';
echo sprintf('Klient %s %s, kupił %d sztuk %s po %d zł, %d sztuk %s po %d zł.',
            $customer->getFirstName(),
            $customer->getLastName(),
            $product1->getQuantity()->getValue(),
            $product1->getName(),
            $product1->getPrice()->getPrice(),
            $product3->getQuantity()->getValue(),
            $product3->getName(),
            $product3->getPrice()->getPrice()
        );
