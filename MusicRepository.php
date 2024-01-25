<?php 
include_once '../Spotify-Web-App-Clone/DatabaseConnection.php';

class MusicRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertMusic($music){

        $conn = $this->connection;

        $idmusic = $music->getIDMusic();
        $title = $music->getTitle();
        $artist = $music->getArtist();
        $type = $music->getType();

        $sql = "INSERT INTO music (id,title, artist, type) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$idmusic, $title, $artist, $type]);

        echo "<script> alert('Music has been inserted successfuly!'); </script>";

    }

    function getAllSongs(){
        $conn = $this->connection;

        $sql = "SELECT * FROM music";

        $statement = $conn->query($sql);
        $songs = $statement->fetchAll();

        return $songs;
    }

    function getMusicById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $songs = $statement->fetch();

        return $songs;
    }

    function updateMusic($id,$title, $artist, $type){
         $conn = $this->connection;

         $sql = "UPDATE music SET title=?, artist=?, type=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$title, $artist, $type,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteMusic($id){
        $conn = $this->connection;

        $sql = "DELETE FROM music WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   }

}
?>