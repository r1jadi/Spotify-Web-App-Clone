<?php 

class Playlist{

    private $id;
    private $name;
    private $songs;
    private $photo;

    function __construct($id, $name, $songs, $photo){
        $this->id = $id;
        $this->name = $name;
        $this->songs = $songs;
        $this->photo = $photo;
    }

    function getId(){
        return $this->id;
    }

    function getName(){
        return $this->name;
    }

    function getSongs(){
        return $this->songs;
    }

    function getPhoto(){
        return $this->photo;
    }


}





?>