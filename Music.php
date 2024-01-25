<?php

class Music{
    private $idmusic;
    private $title;
    private $artist;
    private $type;

    function __construct($idmusic, $title, $artist, $type){
            $this->idmusic = $idmusic;
            $this->title = $title;
            $this->artist = $artist;
            $this->type = $type;
    }
    function getIDMusic(){
        return $this->idmusic;
    }

    function getTitle(){
        return $this->title;
    }
    
    function getArtist(){
        return $this->artist;
    }

    function getType(){
        return $this->type;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setArtist($artist){
        $this->artist = $artist;
    }

    public function setType($type){
        $this->type = $type;
    }
}

?>