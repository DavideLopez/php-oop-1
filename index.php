<?php 

include __DIR__ . './movie.php';

$interstellar = new Movie('Interstellar', 'Christopher Nolan', '2014', 'avventura-fantascienza');

var_dump($interstellar);
echo $interstellar->getMovie();