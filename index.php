<?php

// Definizione della classe Movie
class Movie {
  // Dichiarazione di variabili d'istanza
  public $title;
  public $director;
  public $year;


  // Costruttore
  public function __construct($title, $director, $year) {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
  }

  // Metodo
  public function getMovieDetails() {
    return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}";
  }
}

?>

