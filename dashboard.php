<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboardstyle.css">
</head>
<body>

    <header>
        <h1>Welcome, Admin!</h1>
    </header>

    <nav>
        <ul>
            <li><a href="Edit.php">Edit</a></li>
            <li><a href="User.php">User</a></li>
            <li><a href="UserRepository.php">Manage Users</a></li>
            <li><a href="Delete.php">Delete</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <section>
        <h2>Recent Activities</h2>
        <table border="1">
             <tr>
                 <th>ID</th>
                 <th>EMAIL</th>
                 <th>PASSWORD</th>
                 <th>NAME</th>
                 <th>Edit</th>
                 <th>Delete</th>
             </tr>
    <?php 
             include_once 'UserRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[Id]</td>
                     <td>$user[Email] </td>
                     <td>$user[Password] </td>
                     <td>$user[Name]</td>
                     <td><a href='Edit.php?id=$user[Id]'>Edit</a> </td>
                     <td><a href='Delete.php?id=$user[Id]'>Delete</a></td>
                     
                </tr>
                ";
             }
             ?>
            </table>
    </section>
    
    <footer>
        <p>&copy; 2024 Admin Dashboard</p>
    </footer>

</body>
</html>
