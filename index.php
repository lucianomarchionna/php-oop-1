<?php
/*- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

    class ‘Movie’ {
        public $titol;
        public $original_language;
        public $vote ;
        public $duration;

        function __construct($_vote){
            $this->vote = $_vote;
        }
    }

?>