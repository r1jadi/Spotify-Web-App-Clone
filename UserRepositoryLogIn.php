<?php 
include_once 'DatabaseConnection.php';

class UserRepositoryLogIn{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO login (id,email,password) VALUES (?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$email,$password]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM login";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM login WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$email,$password){
         $conn = $this->connection;

         $sql = "UPDATE login SET email=?, password=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$email,$password,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM login WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}
?>