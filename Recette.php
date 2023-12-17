<?php
require __DIR__.'/kint.phar' ;

class Recette {
    public $titre ;
    public $ingredients ;
    public $etapes ;

    public function __construct($titre,$ingredients,$etapes) {
        $this->titre=$titre;
        $this->ingredients=$ingredients;
        $this->etapes=$etapes ;
        d($this) ;
    }
}

$rec1= new Recette ("a","b","c") ;