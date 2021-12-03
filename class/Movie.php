<?php

//attributi -> variabile

//classe
class Movie {
    
    public $title;
    public $annoUscita;
    public $genere;

    //per acedere al valore
    //$pippo ->nome = 'pippo'

    public function getTitle(){
        return $this-> title;

    }

    public function setTitle($newTitle){

        //per verificare che il dato inserito esista
        if (empty($newTitle)){
            return;
        }

        $this->title = $newTitle;

    }

    public function getAnnoUscita(){
       
        return $this-> annoUscita;

    }

    public function setAnnoUscita($newAnnoUscita){
        //controllo che non sia una stringa
        if (is_string($newAnnoUscita)){
            return;
        }
        $this->annoUscita = $newAnnoUscita;

    }

    
    public function getGenere(){
        return $this-> genere;

    }

    public function setGenere($newGenere){
        $this->genere = $newGenere;

    }

   /*  //funzione constructore
      function __construct($_title, $annoUscita){

       // $this->annoUscita = $_title;
    }  
 */

    //concatenazioni delle due variabili
    public function getFullInfo(){
        return $this->title . " ". $this->annoUscita . " ". $this->genere . "<br>";
    }

   

}

//inocata la funzione _construct
/* $film1 = new Movie(2007);
echo $film1 -> annoUscita ;"<br>";

$film2 = new Movie();
$film2 -> annoUscita ='1950';

var_dump ($film2); */