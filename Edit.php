<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>

    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: grid;
    grid-template-columns: 1fr;
    gap: 10px;
}

label {
    font-weight: bold;
}

input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

    </style>
</head>
<body>

<?php
include_once 'UserRepository.php';

$userRepo = new UserRepository();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $userRepo->updateUser($id, $email, $password, $name);
}
?>

<div class="container">
    <h2>Update User</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">User ID:</label>
        <input type="text" name="id" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <input type="submit" value="Update User">
    </form>
</div>

</body>
</html>

