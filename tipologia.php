<?php

class animals {
    public $tipologia;
    public $taglia;
}



/*
echo('<pre>');
var_dump($animals);
echo('</pre>');
*/


$animals = new Animals();
$animals->tipologia = 'Cane';
$animals->taglia = 'Media';



echo('<p>Tipologia: ' . $animals->tipologia . '</p>');
echo('<p>Taglia: ' . $animals->taglia . '</p>');



?>