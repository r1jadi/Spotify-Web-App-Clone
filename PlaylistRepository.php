<?php 

include_once 'DatabaseConnection.php';

class PlaylistRepository{

    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertPlaylist($playlist){

        $conn = $this->connection;

        $id = $playlist->getId();
        $name = $playlist->getName();
        $songs = $playlist->getSongs();
        $foto = $playlist->getFoto();

        $sql = "INSERT INTO playlist (id,name,songs,foto) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$songs,$foto]);

        echo "<script> alert('Playlist has been inserted successfuly!'); </script>";

    }

    function getAllPlaylists(){
        $conn = $this->connection;

        $sql = "SELECT * FROM playlist";

        $statement = $conn->query($sql);
        $playlists = $statement->fetchAll();

        return $playlists;
    }

    function getPlaylistById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM playlist WHERE id='$id'";

        $statement = $conn->query($sql);
        $playlist = $statement->fetch();

        return $playlist;
    }

    function updatePlaylist($id,$name,$songs,$foto){
        $conn = $this->connection;

        $sql = "UPDATE playlist SET name=?, songs=?, foto=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$songs,$foto,$id]);

        echo "<script>alert('update was successful'); </script>";
   }

   function deletePlaylist($id){
    $conn = $this->connection;

    $sql = "DELETE FROM playlist WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
    }
}
?>