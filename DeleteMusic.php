<?php

$musicID = $_GET['id'];
include_once '../Spotify-Web-App-Clone/MusicRepository.php';

$musicRepository = new MusicRepository();

$musicRepository->deleteMusic($musicID);

header("location:dashboard.php");

?>