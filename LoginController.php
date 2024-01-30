<?php
include_once 'UserRepositoryLogIn.php';
include_once 'UserLogIn.php';

if(isset($_POST['submitlogin'])){
    if(empty($_POST['usremail']) || empty($_POST['psw']) || empty($_POST['role'])){
        echo "Fill all fields!";
    }else{
        $email = $_POST['usremail'];
        $password = $_POST['psw'];
        $role = $_POST['role'];
        $id = $email.rand(100,999);

        $userLogIn  = new UserLogIn($id, $email, $password, $role);
        $userRepositoryLogIn = new UserRepositoryLogIn();

        $userRepositoryLogIn->insertUser($user);
    }
}
?>