<?php

class Connection {
    private $mysqli;
    private $lastResult;
    
    public function __construct(mysqli $mysqli) {
        if($mysqli->connect_error) {
            die('NIEUDANE POŁAĆZENIE: BŁĄD: '. $mysqli->connect_error);
        }
        $this->mysqli=$mysqli;
    }
    
    public function query($sql){
        $result = $this->mysqli->query($sql);
        if($result == false) {
            die(sprintf("SQL: %s, bląd: %s ", $sql, $this->mysqli->error));
        }
        $this->lastResult = $result;
    }
    public function getLastResult() {
        return $this->lastResult;
    }
    
    public function getLastId(){
        return $this->mysqli->insert_id;
    }
    
}