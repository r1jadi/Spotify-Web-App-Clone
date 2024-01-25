<?php
include_once 'UserRepository.php';

$userRepository = new UserRepository();

$users = $userRepository->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    
    
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

    <h1>User List</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Name</th>
        </tr>

        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['name']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
