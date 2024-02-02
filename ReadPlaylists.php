<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Playlists</title>

    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.playlist {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.playlist img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
}

h1 {
    text-align: center;
    color: #333;
}

h2 {
    color: #555;
}

p {
    margin: 10px 0;
    color: #777;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Playlist Information</h1>

        <?php
            include_once 'PlaylistRepository.php';

            $playlistRepository = new PlaylistRepository();
            $playlists = $playlistRepository->getAllPlaylists();

            foreach ($playlists as $playlist) {
                echo "<p>Image Path: {$playlist['photo']}</p>";
                echo "<div class='playlist'>
                        <img src='{$playlist['photo']}' alt='Playlist Photo'>
                        <h2>{$playlist['name']}</h2>
                        <p>Number of Songs: {$playlist['songs']}</p>
                      </div>";
            }
        ?>
    </div>
</body>
</html>
