<?php

class DatabaseConenction{
    private $server="localhost:3311";
    private $username="user1";
    private $password="";
    private $database = "newdatabase";


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

$db = new DatabaseConenction();
$db->startConnection();

?>