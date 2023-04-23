<?php

require_once 'Pasare.php';

class Papagal extends Pasare {

    public $limba = 'engleza';

  

    public function talk(){
        echo "papagalul vorbeste";
    }

}


$papagal = new Papagal(2, 'mov');

var_dump($papagal);

$papagal->talk();