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
    <?php foreach($movies as $movie): ?>
    <div>
        <h2>FILM</h2>
        <p><h3>Title:</h3><?php echo $movie->getName() ?></p>
        <p><h3>Genre:</h3><?php echo $movie->getGenre() ?></p>
        <p><h3>Rating:</h3><?php echo $movie->getRating() ?></p>
    </div>
    <?php endforeach?>
</body>
</html>