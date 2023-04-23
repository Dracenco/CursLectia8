<?php 

class Human {

    private $height;
    private $weight;
    private $race;
    private $age;
    private $sex;
    private $night;

    public function __construct($height, $weight, $race, $age, $sex){
        $this->height = $height;
        $this->weight = $weight;
        $this->race = $race;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function sleep(){
            echo "dorm";
    }

    private function work(){
            echo "lucrez";
    }

    public function haveFun(){
        echo "ma distrez";
    }

    public function eat(){
        echo "mananc";

    }

    public function setAge($id, $location, $age){
        if($id == 3 && $location == 'Office') {

            $this->age = $age;
        }else {
         echo 'cu parere de rau nu aveti dreptul sa faceti modificari la varsta';
        }
    }

    public function getAge(){
        echo $this->age;
    }

}


$dracula = new Human(220, 150, 'caucasian', rand(18,55), 'M');

echo $dracula->getAge();
