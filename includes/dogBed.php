<?php

include_once __DIR__ . '/tipologia.php';


class dogBed {
    public $tipo;
}
$dogBed = new dogBed();
$dogBed->tipo = 'Cuccia grande';
echo('<p>Tipo: ' . $dogBed->tipo . '</p>');


/*
echo('<pre>');
var_dump($animals);
echo('</pre>');
*/


?>

<a href = "/php-oop-2/index.php"> Torna indietro </a>