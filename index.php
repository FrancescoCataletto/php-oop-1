<?php

require_once __DIR__ . "/class/movie.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <p><?php echo $batmanMovie->getMovie() ?></p>
    <p><?php echo $spidermanMovie->getMovie() ?></p>
    <p><?php echo $titanicMovie->getMovie() ?></p>
    <p><?php echo $lotrMovie->getMovie() ?></p>
    <p><?php echo $starwarsMovie->getMovie() ?></p>
    <p><?php echo $supermanMovie->getMovie() ?></p>
</body>
</html>