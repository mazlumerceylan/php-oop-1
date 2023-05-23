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


$movie1 = new Movie("Il padrino", "Francis Ford Coppola", 1972);
echo $movie1->getMovieDetails();
echo "<br/>";


$movie2 = new Movie("Il signore degli anelli", "Peter Jackson", 2001);
echo $movie2->getMovieDetails();

?>

