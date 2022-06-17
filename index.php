<?php

require_once __DIR__ . "/class/movie.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-oop-1</title>
</head>
<body>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $batmanMovie->getName() ?></p>
        <p><h3>Genre:</h3><?php echo $batmanMovie->getGenre() ?></p>
        <p><h3>Rating:</h3><?php echo $batmanMovie->getRating() ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $spidermanMovie->getName() ?></p>
        <p><h3>Genre:</h3><?php echo $spidermanMovie->getGenre() ?></p>
        <p><h3>Rating:</h3><?php echo $spidermanMovie->getRating() ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $titanicMovie->getName() ?></p>
        <p><h3>Genre:</h3><?php echo $titanicMovie->getGenre() ?></p>
        <p><h3>Rating:</h3><?php echo $titanicMovie->getRating() ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $lotrMovie->getName() ?></p>
        <p><h3>Genre:</h3><?php echo $lotrMovie->getGenre() ?></p>
        <p><h3>Rating:</h3><?php echo $lotrMovie->getRating() ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $starwarsMovie->getName() ?></p>
        <p><h3>Genre:</h3><?php echo $starwarsMovie->getGenre() ?></p>
        <p><h3>Rating:</h3><?php echo $starwarsMovie->getRating() ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $supermanMovie->getName() ?></p>
        <p><h3>Genre:</h3><?php echo $supermanMovie->getGenre() ?></p>
        <p><h3>Rating:</h3><?php echo $supermanMovie->getRating() ?></p>
    </div>
    
</body>
</html>