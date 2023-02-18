<?php

class Koneksi {

protected  $host     = 'localhost',
           $dbname   = 'php_todo',
           $user     = 'root',
           $password = '';

public function __construct()
{

        $dsn = "mysql:host=$this->host;dbname=$this->$dbname";

        try {
        $this->pdo = new PDO($dsn, $this->$user, $this->$password);

        if ($this->pdo) {
            echo "Connected to the $db database successfully!";
        }
        } catch (PDOException $e) {
        echo $e->getMessage();
        }
    }
}

$db = new Koneksi();

?>