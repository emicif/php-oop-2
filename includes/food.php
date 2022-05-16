<?php


class food {
    public $cibo;
    public $snack; 
}

$food = new Food();
$food->cibo = 'Cibo secco';
$food->snack = 'Cibo umido';

echo('<p>Tipologia: ' . $food->cibo . '</p>');
echo('<p>Tipo: ' . $food->snack . '</p>');


?>