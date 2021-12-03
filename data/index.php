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
 $movie->setAnnoUscita('1998');
var_dump($movie);


$movie2 = new Movie();
$movie2-> setTitle(' secondo film');
$movie2 -> setAnnoUscita('1950');

var_dump($movie2);

$movie2->title ='Piovono polpette';
$movie2->annoUscita ='2009';
$movie2->genere='Per famiglie/Fantasy';
echo $movie2->getFullInfo() ; 


$movie0 = new Movie();
$movie0->title ='Soul ';
$movie0->annoUscita ='2020 ';
$movie0->genere=' Per famiglie/Commedia ';
echo $movie0->getFullInfo();

$movie3 = new Movie();
$movie3->title ='Interstellar ';
$movie3->annoUscita ='2014  ';
$movie3->genere='  Sci-fi/Avventura';
echo $movie3->getFullInfo();



//modo più corretto di invocare un dato
$movie4 = new Movie();
$movie4->setTitle ('Skyfall ');
$movie4->SetAnnoUscita('2012');
$movie4->SetGenere('  Azione/Avventura');
echo $movie4->getTitle();
echo $movie4->getAnnoUscita();
echo $movie4->getGenere();


