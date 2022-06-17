<?php

class Movie {
    public $name;
    public $genre;
    public $rating;

    public function __construct($_name, $_genre, $_rating){
        $this->name = $_name;
        $this->genre = $_genre;
        $this->rating = $_rating;
    }
}

?>