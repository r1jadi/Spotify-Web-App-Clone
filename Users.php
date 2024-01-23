<?php

class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login($email, $password) {
        $stmt = $this->db->prepare('SELECT * FROM login WHERE email = ? AND password = ?');
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "spotifyclone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = new User($conn);

if ($user->login('rijadhalili@hotmail.com', 'Rijad123!222')) {
    echo "User logged in successfully!";
} else {
    echo "Error logging in user!";
}

$conn->close();
?>