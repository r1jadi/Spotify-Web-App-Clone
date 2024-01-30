<?php
include_once 'PlaylistRepository.php';
include_once 'Playlist.php';

if(isset($_POST['submitbutton'])){
    if(empty($_POST['name']) || empty($_POST['songs']) || empty($_POST['photo'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $songs = $_POST['songs'];
        $photo = $_POST['photo'];
        $id = $name.rand(100,999);

        $playlist  = new Playlist($id, $name, $songs, $photo);
        $playlistRepository = new PlaylistRepository();

        $playlistRepository->insertPlaylist($playlist);
    }
}
?>


