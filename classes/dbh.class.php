<?php

class DBH {
    private $host = "localhost";
    private $user = "cyberhawk";
    private $pwd = "abcd1234";
    private $dbName = "cyberhawk";

    public function connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}