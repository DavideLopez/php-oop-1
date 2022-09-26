<?php

class Movies {
   public $title;
   public $genre;
   public $year;
   public $director;

 function __construct($title,$genre,$year,$director) 
 {
    $this->title = $title;
    $this->genre = $genre;
    $this->year = $year;
    $this->director = $director;
 }

public function getMovie() {
    return $this->title . 'è un film ' $this->genre . 'girato nel ' $this->year . 'dal regista ' . $this->director . ;
 }

}