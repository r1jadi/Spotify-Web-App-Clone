<?php
$userId = $_GET['id'];
include_once '../Spotify-Web-App-Clone/UserRepository.php';

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    
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
    <form action="edit_music.php" method="post">

        <label for="idmusic">ID Music:</label>
        <input type="text" id="idmusic" name="idmusic" required value="<?=$user['Id']?>" readonly >

        <label for="title">E-mail:</label>
        <input type="text" id="title" name="email" required>

        <label for="artist">Password:</label>
        <input type="text" id="artist" name="password" required>

        <label for="type">Name:</label>
        <input type="text" id="type" name="name" required>

        <button type="submit" name="editbtn">Edit User</button>
    </form>
</body>
</html>

<?php 

if(isset($_POST['edibtn'])){
    $id = $user['Id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $musicRepository->updateMusic($id,$email,$password,$name);
    header("location:dashboard.php");
}


?>
