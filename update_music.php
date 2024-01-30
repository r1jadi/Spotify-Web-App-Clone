<?php
include_once 'MusicRepository.php';
include_once 'Music.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $type = $_POST['type'];

    $musicRepository = new MusicRepository();
    $musicRepository->updateMusic($id, $title, $artist, $type);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Update Music</title>
</head>
<body>
    <div class="container">
        <h2>Update Music</h2>
        <p>Music updated successfully!</p>
        <a href="EditMusic.php">Go back</a>
    </div>
</body>
</html>