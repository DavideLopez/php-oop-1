<?php 

include __DIR__ . './movie.php';

$interstellar = new Movies('Interstellar', 'Avventura-Fantascienza', '2014', 'Christopher Nolan',); 
$jp = new Movies('Jurassic Park', 'Avventura-Fantascienza', '1993', 'Steven Spielberg',);
$irish = new Movies('The Irishman', 'Biografico', '2019', 'Martin Scorsese');


// var_dump($interstellar);
echo $interstellar->getMovie();
echo $jp->getMovie();
echo $irish->getMovie();