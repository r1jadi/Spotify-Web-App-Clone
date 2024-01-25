<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>

    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
}

input {
    padding: 10px;
    margin-bottom: 20px;
}

button {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #007bff;
    text-decoration: none;
}

    </style>

</head>
<body>

    <div class="container">
        <h2>Delete User</h2>

        <?php

        include_once 'UserRepository.php';

        $userRepository = new UserRepository();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idToDelete = $_POST['id'];

            $userRepository->deleteUser($idToDelete);
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="idToDelete">Enter User ID to Delete:</label>
            <input type="text" name="idToDelete" required>
            <button type="submit">Delete</button>
        </form>

        <a href="Read.php">View All Users</a>
    </div>

</body>
</html>