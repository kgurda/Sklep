<?php

class ProductActiveRecord extends Product {
    
    public function save(Connection $connection){
        if($this->id){
            die('Nie zapisujemy dwa razy');
        }
        $sql = sprintf("INSERT INTO product VALUES(null, '%s', '%s' , %s, %s)",
                $this->name,
                null,
                $this->price->getPrice(),
                $this->quantity->getValue()
                );
    
        $connection->query($sql);
        $this->id = $connection->getLastId();
    }
    
    public function update(Connection $connection){
        
        if(!$this->id) {
            die('Najpierw zapisz obiekt');
        }
        
        $sql = sprintf("UPDATE product SET name='%s', price='%s', quantity=%s WHERE id='%s'",
                $this->name,
                $this->price->getPrice(),
                $this->quantity->getValue(),
                $this->id
                );
        
        $connection->query($sql);
    }
    
    static public function load(Connection $connection, $id) {
        
        $sql = sprintf("SELECT * FROM product WHERE id= '%s'", $id);
        $connection->query($sql);
        //getLastResult zwraca obiekt mysql_result
        //fetch_assoc() zwraca tablicę asocjacyjną
        
        $productArray = $connection->getLastResult()->fetch_assoc(); //wyciągamy tablicę asocjacyjną z kolumnami z tego wiersza
        $product = new ProductActiveRecord(
                    new ProductPrice($productArray['price']),
                    $productArray['name'],
                    new Quantity((int)$productArray['quantity']));
        
        $product->id = $productArray['id']; //jesteśmy w klasie statycznej ale należy ona do klasy ProductActiveRecord, tworzymy obiekt tej samej klasy więc mamy prawo bezpośrednio się odwołać do atrybutów private i chronione odwłać
        
        return $product;
    }
    
    static public function delete(Connection $connection, $id) {
        
        $sql = sprintf("DELETE FROM product WHERE id= '%s'", $id);
        $connection->query($sql);
        
    }
    
      static public function loadAll(Connection $connection){
          
        $sql = sprintf("SELECT * FROM product");
        $connection->query($sql);
        // getLastResult() zwraca obiekt mysql_result
        // mysqli_result->fetch_assoc() zwraca tablicę assocjacyjna

        $list = [];
        foreach ($connection->getLastResult() as $productArray){

             $product = new ProductActiveRecord(
                    new ProductPrice($productArray['price']),
                    $productArray['name'],
                    new Quantity((int)$productArray['quantity']));

            $product->id = $productArray['id'];

            $list[] =  $product;
        }
        return $list;
    }

}