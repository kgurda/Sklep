<?php

include_once 'library.php';

$mysql = new mysqli(
        'localhost',
        'root',
        'coderslab',
        'exercises_db');

$connection = new Connection($mysql);  // sprawdzenie czy nawiązane zostanie połączenie
//$connection->query("SELECT * FROM product");

//foreach ( ($connection->getLastResult()) as $row) {
//    var_dump($row);
//}

//tworzenie nowego produktu

//$product = new ProductActiveRecord(
//        new ProductPrice(20), 
//        "Kostka brukowa", 
//        new Quantity(25));
//
//$product->save($connection);
//var_dump($product);
//
//Zmiana produktu
//
//$product->setPrice(new ProductPrice(999));
//$product->update($connection);
//var_dump($product);
//echo "ID" . $product->getId();
//
//Wybiera/.zwraca rekord z danym id
//
//$product = ProductActiveRecord::load($connection, 40);
//var_dump($product);


// usuwa rekord z danym id

//$product = ProductActiveRecord::delete($connection, 40);
//
//var_dump($product);


$product = ProductActiveRecord::loadAll($connection);

var_dump($product);


