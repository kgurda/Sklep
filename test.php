<?php

include_once 'library.php';

$customer = new Customer(1, "Jan", "Kowalski");
$cart = new Cart($customer);
// Product
$product1 = new Product(1, new ProductPrice(200), 'Szampan', new Quantity(10));
$product2 = new Product(2, new ProductPrice(500), 'Kawior' , new Quantity(2));
$product3 = new Product(3, new ProductPrice(10), 'Wykałaczki', new Quantity(100));

$cart->addCartItem(new CartItem($product1, new Quantity(2)));
$cart->addCartItem(new CartItem($product3, new Quantity(43)));

//Podsumowanie

echo 'Podsumowanie koszyka: '. $cart->getTotalSum();
