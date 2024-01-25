<?php
include_once '../Spotify-Web-App-Clone/UserRepository.php';
include_once '../Spotify-Web-App-Clone/User.php';

if(isset($_POST['signupbutton'])){
    if(empty($_POST['signupemail']) || empty($_POST['signuppassword']) || empty($_POST['signupname'])){
        echo "Fill all fields!";
    }else{
        $email = $_POST['signupemail'];
        $password = $_POST['signuppassword'];
        $name = $_POST['signupname'];
        $id = $name.rand(100,999);

        $user  = new User($id, $email, $password, $name);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}
?>