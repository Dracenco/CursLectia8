<?php

require_once 'Calculator.php';

// $calculator->add(10,23);
// echo "<br>";
// $calculator->substract(250, 49);

require_once 'AdvancedCalculator.php';


$calculatorAvansat = new AdvancedCalculator();

$calculatorAvansat->multiply(5,5);

echo $calculatorAvansat->name;


$calculator->multiply(5,5);