<?php
/*- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

    class Movie {
        public $title = " ";
        public $original_language;
        public $vote;
        public $duration;

        function __construct($_title, $_original_language, $_vote,$_duration){
            $this->title = $_title;
            $this->original_language = $_original_language;
            $this->vote = $_vote;
            $this->duration = $_duration;
        }

        function setMovie($_vote){
            $this->vote = $_vote;
        }

        function getMovie(){
            return $this->vote;
        }
    }

    $film1 = new Movie("The Wolf Of Wall Street", "Inglese", 10, 180);

    $film2 = new Movie("Avengers: Endgame", "Inglese", 1, 182);

    $film3 = new Movie("Cado dalle Nubi", "Italiano", 9, 114);

    var_dump($film1);
    var_dump($film2);
    var_dump($film3);

    $film3->setMovie(7);
    echo "Il Nuovo voto assegnato al film ". $film3->title . " è: " . $film3->getMovie();
?>