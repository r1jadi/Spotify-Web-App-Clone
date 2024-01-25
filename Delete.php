<?php

$userId = $_GET['id'];
include_once '../Spotify-Web-App-Clone/UserRepository.php';

$userRepository = new UserRepository();

$userRepository->deleteUser($userId);

header("location:dashboard.php");

?>