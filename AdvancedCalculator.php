<?php

require_once 'Calculator.php';

class AdvancedCalculator extends Calculator {

    public function multiply($x, $y) {
        $rezultat = $x * $y;

        echo $x.' inmultit la '.$y.' este egal cu '. $rezultat;

        return $rezultat;
    }

}