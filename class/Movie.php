<?php

//attributi -> variabile

//classe
class Movie {
    
    public $title;
    public $annoUscita;

    //per acedere al valore
    //$pippo ->nome = 'pippo'

    public function setTitle($newValue){
        $this->title = $newValue;

    }

    //funzione constructore
 /*     function __construct($_annoUscita){

        $this->annoUscita = $_annoUscita;
    }  */

   

    public function setAnnoUscita($_annoUscita){

        $this->annoUscita = $_annoUscita;
    }

    
    public function getAnnoUscita(){
        return $this->annoUscita;
    }
}

//inocata la funzione _construct
/* $film1 = new Movie(2007);
echo $film1 -> annoUscita ;"<br>";

$film2 = new Movie();
$film2 -> annoUscita ='1950';

var_dump ($film2); */