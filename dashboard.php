<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--link rel="stylesheet" href="dashboardstyle.css"-->

    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

nav {
    background-color: #555;
    color: #fff;
    padding: 10px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
}

section {
    padding: 20px;
}

table{
    display: flex;
    justify-content: center ;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}


@media screen and (max-width: 768px) {
    nav ul {
        flex-direction: column;
        align-items: center;
    }

    nav ul li {
        margin: 10px 0;
    }
}

@media screen and (max-width: 600px) {
    header h1 {
        font-size: 1.5em;
    }

    nav a {
        font-size: 14px;
    }
}
    </style>
</head>
<body>

    <header>
        <h1>Welcome, Admin!</h1>
    </header>

    <nav>
        <ul>
            <li><a href="InsertMusic.php">Insert Music</a></li>
            <li><a href="Read.php">Read User</a></li>
            <li><a href="ReadMusic.php">Read Music</a></li>
            <li><a href="EditMusic.php">Edit Music</a></li>
            <li><a href="Edit.php">Edit User</a></li>
            <li><a href="DeleteMusic.php">Delete Music</a></li>
            <li><a href="Delete.php">Delete User</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    
    <footer>
        <p>&copy; 2024 Admin Dashboard</p>
    </footer>

</body>
</html>
