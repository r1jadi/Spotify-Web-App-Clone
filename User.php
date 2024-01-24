<?php

class User{
    private $id;
    private $email;
    private $password;
    private $name;

    function __construct($id, $email, $password, $name){
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
            $this->name = $name;
    }


    function getId(){
        return $this->id;
    }

    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    function getName(){
        return $this->name;
    }
    
}

?>