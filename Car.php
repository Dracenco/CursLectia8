<?php

class Car {

    private $make;
    public $model;
    public $engine;
    public $year;
    public $color;

    public function __construct($make, $model, $engine, $year, $color){
        $this->make = $make;
        $this->model = $model;
        $this->engine = $engine;
        $this->year = $year;
        $this->color = $color;
    }
    public function drive(){
        echo 'eu conduc un '.$this->make;
        $this->park();
    }

    private function park(){
        echo 'am parcat';
    }

    public function consumeFuel(){
        echo 'consum X litri';
    }

}

$car = new Car('Mercedes', 'CLS', 4, 2019, 'Black');
$car2 = new Car('VW', 'Golf', '1.5', 2016, 'Red');

$car->drive();





