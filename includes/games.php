<?php

include_once __DIR__ . '/tipologia.php';


class games {
    public $tipoGioco;
    public $animals;
}
$games = new Games();
$games->tipoGioco = 'Gioco acquativo';
echo('<p>TipoGioco: ' . $games->tipoGioco . '</p>');


/*
echo('<pre>');
var_dump($animals);
echo('</pre>');
*/


?>