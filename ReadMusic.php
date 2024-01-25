<?php
include_once 'MusicRepository.php';

$musicRepository = new MusicRepository();

$songs = $musicRepository->getAllSongs();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music List</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>

</head>
<body>

    <h1>Music List</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Type</th>
        </tr>

        <?php foreach ($songs as $music) { ?>
            <tr>
                <td><?php echo $music['id']; ?></td>
                <td><?php echo $music['title']; ?></td>
                <td><?php echo $music['artist']; ?></td>
                <td><?php echo $music['type']; ?></td>
            </tr>
        <?php } ?>
    </table>


</body>
</html>
