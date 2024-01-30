<?php 

class Playlist{

    private $id;
    private $name;
    private $songs;
    private $foto;

    function __construct($id, $name, $songs, $foto){
        $this->id = $id;
        $this->name = $name;
        $this->songs = $songs;
        $this->foto = $foto;
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

    function getFoto(){
        return $this->foto;
    }


}





?>