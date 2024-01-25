<?php
include_once '../Spotify-Web-App-Clone/MusicRepository.php';
include_once '../Spotify-Web-App-Clone/Music.php';

if(isset($_POST['submitbutton'])){
    if(empty($_POST['title']) || empty($_POST['artist']) || empty($_POST['type'])){
        echo "Fill all fields!";
    }else{
        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $type = $_POST['type'];
        $id = $title.rand(100,999);

        $music  = new Music($id, $title, $artist, $type);
        $musicRepository = new MusicRepository();

        $musicRepository->insertMusic($music);
    }
}
?>