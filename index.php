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
        <p><h3>Title:</h3><?php echo $batmanMovie->name ?></p>
        <p><h3>Genre:</h3><?php echo $batmanMovie->genre ?></p>
        <p><h3>Rating:</h3><?php echo $batmanMovie->rating ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $spidermanMovie->name ?></p>
        <p><h3>Genre:</h3><?php echo $spidermanMovie->genre ?></p>
        <p><h3>Rating:</h3><?php echo $spidermanMovie->rating ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $titanicMovie->name ?></p>
        <p><h3>Genre:</h3><?php echo $titanicMovie->genre ?></p>
        <p><h3>Rating:</h3><?php echo $titanicMovie->rating ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $lotrMovie->name ?></p>
        <p><h3>Genre:</h3><?php echo $lotrMovie->genre ?></p>
        <p><h3>Rating:</h3><?php echo $lotrMovie->rating ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $starwarsMovie->name ?></p>
        <p><h3>Genre:</h3><?php echo $starwarsMovie->genre ?></p>
        <p><h3>Rating:</h3><?php echo $starwarsMovie->rating ?></p>
    </div>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $supermanMovie->name ?></p>
        <p><h3>Genre:</h3><?php echo $supermanMovie->genre ?></p>
        <p><h3>Rating:</h3><?php echo $supermanMovie->rating ?></p>
    </div>
    
</body>
</html>