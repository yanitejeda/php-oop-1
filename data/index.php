<!-- 

- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->


 <?php
 require_once  "../class/Movie.php";

//istanza della classe
 $movie = new Movie(2007);
 $movie-> setTitle('nome film');
 //$movie->getTitle();
 //$movie->getAnnoUscita('1998');
 $movie->setAnnoUscita('1998');
 //$movie-> setTitle('nome film 2');
 //$movie->setAnnoUscita('2005');

var_dump($movie);

/* $film1 = new Movie(2007);
echo $film1 -> annoUscita ;"<br>"; */

$movie2 = new Movie();
$movie2-> setTitle(' secondo film');
$movie2 -> setAnnoUscita =('1950');

var_dump($movie2);
