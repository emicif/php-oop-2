<?php

include_once __DIR__ . '/tipologia.php';


class animalCare {
    public $tipo;
}
$animalCare = new animalCare();
$animalCare->tipo = 'Anello massaggia gengive';
echo('<p>Tipo: ' . $animalCare->tipo . '</p>');


/*
echo('<pre>');
var_dump($animals);
echo('</pre>');
*/


?>


<a href = "/php-oop-2/index.php"> Torna indietro </a>