<?php

require_once __DIR__ . "/classes/Movie.php";


$genres = [
    "Fantasy",
    "Action",
    "Thriller",
];

$Hp1 = new Movie("Harry Potter and the Sorcerer's Stone", "eng", 2001, 1, "./img/harry-potter-and-the-philosophers-stone.jpg", false, new Genre($genres[0] . ", " . $genres[1], true, 1));
$Hp2 = new Movie("Harry Potter and the Chamber of Secrets", "eng", 2002, 2, "./img/harry-potter-and-the-chamber-of-secrets.jpg", false, new Genre($genres[0], true, 2));
$Hp3 = new Movie("Harry Potter and the Prisoner of Azkaban", "eng", 2004, 3, "./img/harry-potter-and-the-prisoner-of-azkaban.jpg", false, new Genre($genres[0], true, 3));
$Hp4 = new Movie("Harry Potter and the Goblet of Fire", "eng", 2005, 4, "./img/harry-potter-and-the-goblet-of-fire.jpg", false, new Genre($genres[0], true, 4));
$Hp5 = new Movie("Harry Potter and the Order of the Phoenix", "eng", 2007, 5, "./img/harry-potter-and-the-order-of-the-phoenix.jpg", false, new Genre($genres[0], true, 5));
$Hp6 = new Movie("Harry Potter and the Half-Blood Prince", "eng", 2009, 6, "./img/harry-potter-and-the-half-blood-prince.jpg", false, new Genre($genres[0], true, 6));
$Hp7 = new Movie("Harry Potter and the Deathly Hallows: Part 1", "eng", 2010, 7, "./img/harry-potter-and-the-deathly-hallows-part-1.jpg", false, new Genre($genres[0], true, 7));
$Hp8 = new Movie("Harry Potter and the Deathly Hallows: Part 2", "eng", 2011, 8, "./img/harry-potter-and-the-deathly-hallows-part-2.jpg", false, new Genre($genres[0], true, 8));

$movies = [
    $Hp1,
    $Hp2,
    $Hp3,
    $Hp4,
    $Hp5,
    $Hp6,
    $Hp7,
    $Hp8,
];



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <main>
        <div class="container">

            <h1 class="text-center py-4 text-light">The Harry Potter Marathon</h1>

            <div class="row row-cols-4 row-gap-4">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col">
                        <div class="card">
                            <img src=" <?= $movie->poster ?> " alt=" <?= $movie->title . " poster" ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $movie->title ?></h5>
                                <p class="card-text">Year: <?= $movie->year ?></p>
                                <p class="card-text">Language: <?= $movie->language ?></p>
                                <p class="card-text">Status: <?= $movie->isBeenWatched($movie->watched) ?></p>
                                <p class="card-text">Genre: <?= $movie->genre->name ?> </p>


                                <a href="#" class="btn btn-warning">Watch now</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </main>

</body>

</html>