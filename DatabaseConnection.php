<?php

class DatabaseConnection{
    private $server="localhost:3311";
    private $username="root";
    private $password="";
    private $database = "spotifyclone";


    function startConnection(){

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database successful";
            return $conn;
        }catch(PDOException $e){
            echo "Database Connection Failed".$e->getMessage();
            return null;
        }
    }
}

$db = new DatabaseConnection();
$db->startConnection();

?>