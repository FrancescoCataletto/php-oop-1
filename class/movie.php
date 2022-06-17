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

    // SETTER
    public function setName($_name){
        $this->name = $_name;
    }
    public function setGenre($_genre){
        $this->genre = $_genre;
    }
    public function setRating($_rating){
        $this->rating = $_rating;
    }

    // GETTER
    public function getMovie(){
        return $this->name . ' ' . $this->genre . ' ' . $this->rating;
    }
}


$batmanMovie = new Movie("Batman", "Action", "4");
$spidermanMovie = new Movie("Spider-Man", "Action", "4.5");
$titanicMovie = new Movie("Titanic", "Dramatic", "4.5");
$lotrMovie = new Movie("Lord Of The Rings: first chapter", "Fantasy", "4.5");
$starwarsMovie = new Movie("Star Wars", "Fantasy", "4");
$supermanMovie = new Movie("Superman", "Action", "3.5");
?>