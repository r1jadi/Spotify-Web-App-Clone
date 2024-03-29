<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Music</title>

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
    padding: 8px;
    margin-bottom: 16px;
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

button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>

<div class="container">
    <h2>Insert Song</h2>
    <form action="insert_music.php" method="post">

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" required>

        <label for="artist">Artist: </label>
        <input type="text" id="artist" name="artist" required>

        <label for="type">Type: </label>
        <input type="text" id="type" name="type" required>

        <button type="submit" name="submitbutton">Insert Song</button>
    </form>
</div>

</body>
</html>
