<?php
include_once 'PlaylistRepository.php';
include_once 'Playlist.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $songs = $_POST['songs'];
    $photo = $_POST['photo'];

    $playlistRepo = new PlaylistRepository();
    $playlistRepo->updatePlaylist($id, $name, $songs, $photo);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Update Playlist</title>
</head>
<body>
    <div class="container">
        <h2>Update Playlist</h2>
        <p>Playlist updated successfully!</p>
        <a href="UpdatePlaylist.php">Go back</a>
    </div>
</body>
</html>
