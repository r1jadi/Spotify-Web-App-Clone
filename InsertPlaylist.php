<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Insert</title>

    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
}

input {
    margin-bottom: 16px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    </style>
</head>
<body>

    <div class="container">
        <h2>Insert Playlist</h2>
        <form action="insert_playlist.php" method="post" enctype="multipart/form-data">
            <label for="name">Playlist Name:</label>
            <input type="text" name="name" required>

            <label for="songs">Number of Songs:</label>
            <input type="number" name="songs" required>

            <label for="photo">Playlist Photo:</label>
            <input type="file" name="photo" accept="image/*" required>

            <button type="submit" name="submitbutton">Insert Playlist</button>
        </form>
    </div>

</body>
</html>
