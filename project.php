<?php

include_once 'library.php';

//Przykład 1
$price = new ProductPrice(20);
$quantity = new Quantity(2);
new Product(1, $price, 'salatka', $quantity);

//Przykład 2
$product = new Product(2, new ProductPrice(24), 'kieliszki', new Quantity(20));

//region Przykład 1
echo $product->getPrice()->getPrice(). '<br>';

echo $product->getQuantity()->getQuantity(). '<br>';
//endregion

//region Przykład 2
$productPrice=$product->getPrice();
echo $productPrice->getPrice(). '<br>';

$productQuantity=$product->getQuantity();
echo $productQuantity->getQuantity(). '<br>';

//endregion

$customer1=new Customer(2,'Kasia','Gurda');

//WYŚWIETLENIE KLIENTA
echo 'Klient: ';
echo $customer1->getFirstName() . $customer1->getLastName();
echo '<br>';

//UTWORZENIE KOSZYKA
$cart = new Cart($customer1);

//Pobranie klienta z koszyka i wyświetlenie jego imienia
echo $cart->getCustomer()->getFirstName() . '<br>';