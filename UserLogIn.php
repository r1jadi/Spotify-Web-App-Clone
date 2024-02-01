<?php

class UserLogIn{
    private $id;
    private $email;
    private $password;

    function __construct($id, $email, $password){
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
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

}

?>