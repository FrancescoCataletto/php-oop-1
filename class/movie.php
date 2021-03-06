<?php

class Movie {
    private $name;
    private $genre;
    private $rating;

    public function __construct($_name, $_genre, $_rating){
        $this->name = $_name;
        $this->genre = $_genre;
        $this->rating = $_rating;

        $this->setRating();
    }

    // SETTER
    public function setRating(){
        if ($this->rating >= 4.5){
            $this->rating = "Top 100 best film";
        }
    }

    // GETTER
    public function getName(){
        return $this->name;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getRating(){
        return $this->rating;
    }
}


$batmanMovie = new Movie("Batman", "Action", 4);
$spidermanMovie = new Movie("Spider-Man", "Action", 4.5);
$titanicMovie = new Movie("Titanic", "Dramatic", 4.5);
$lotrMovie = new Movie("Lord Of The Rings: first chapter", "Fantasy", 4.5);
$starwarsMovie = new Movie("Star Wars", "Fantasy", 4);
$supermanMovie = new Movie("Superman", "Action", 3.5);

$movies = array($batmanMovie, $spidermanMovie, $titanicMovie, $lotrMovie, $starwarsMovie, $supermanMovie);
?>