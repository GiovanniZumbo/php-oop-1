<?php

require_once __DIR__ . "/classes/Movie.php";

$Hp1 = new Movie("Harry Potter and the Sorcerer's Stone", "eng", 2001, 1);
$Hp2 = new Movie("Harry Potter and the Chamber of Secrets", "eng", 2002, 2);
$Hp3 = new Movie("Harry Potter and the Prisoner of Azkaban", "eng", 2004, 3);
$Hp4 = new Movie("Harry Potter and the Goblet of Fire", "eng", 2005, 4);
$Hp5 = new Movie("Harry Potter and the Order of the Phoenix", "eng", 2007, 5);
$Hp6 = new Movie("Harry Potter and the Half-Blood Prince", "eng", 2009, 6);
$Hp7 = new Movie("Harry Potter and the Deathly Hallows: Part 1", "eng", 2010, 7);
$Hp8 = new Movie("Harry Potter and the Deathly Hallows: Part 2", "eng", 2011, 8);

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
</head>

<body>
    <main>
        <h1>Movie List</h1>
        <?php foreach ($movies as $movie) { ?>
            <div>
                <?= $movie->title ?>
            </div>
        <?php } ?>
    </main>

</body>

</html>