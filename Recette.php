<?php
require __DIR__.'/kint.phar' ;

class Recette {
    public $id ;
    public $titre ;
    public $image ;
    public $personne ;
    public $ingredients ;
    public $quantites;
    public $etapes ;

    public function __construct($titre,$image,$personne,$ingredients,$quantites,$etapes) {
        $this->id=$id;
        $this->titre=$titre;
        $this->image=$image;
        $this->personne=$personne;
        $this->ingredients=$ingredients;
        $this->quantites=$quantites ;
        $this->etapes=$etapes ;
        d($this) ;
    }
}

