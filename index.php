<?php

class Movies {
   public $title;
   public $year;
   public $genre;

 function __construct($title,$year,$genre) 
 {
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
 }

}