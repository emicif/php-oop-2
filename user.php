<?php



class User {
    public $registrato;


    //public $sconto = 0;

    public function setSconto($registrato){
        
        if($this->registrato=true){
            
            $this->sconto = 20;
            //echo('registrato' . $registrato);
            echo('Sconto: ' . $this->sconto);
        }
    }

    public function getSconto($registrato){
       return $this->sconto;
    }

    public function calculatePrice($price){
        return $price - ($price * $this->sconto / 100);
        echo('Prezzo: ' . $this->price);
     }

}

$user = new User();
$user->registrato = true;
$user->price = 40;

/*
echo('<pre>');
var_dump($user);
echo('</pre>');
*/
echo('<p>' . $user->setSconto(true) . '</p>');
echo('<p>Il prezzo scontato è: ' . $user->calculatePrice(40) . '</p>');

/*
echo('<pre>');
var_dump($animals);
echo('</pre>');
*/


?>