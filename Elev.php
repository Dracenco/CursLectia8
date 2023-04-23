<?php 

class Elev {
    public $name;
    public $surname;
    protected $age;
    // final private $age = 5;

    public function __construct($name, $surname, $age){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    // private function getAccessToAge(){
    //     return $this->age;
    // }
}

// class Absolvent extends Elev {
//     public function getAge(){
//         $this->age;
//         $this->getAccessToAge;
//     }
// }

// $aboslvent = new Absolvent();

// $absolvent->getAge();


// $array['name'];
// $array->name;