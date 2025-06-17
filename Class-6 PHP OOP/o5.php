<?php

class MathCalculator {
    const PI = 3.14159;
    const SUPPORTED_OPERATIONS = ['add', 'subtract', 'multiply', 'divide'];

    function valuOfPi() {
        echo "Value of PI is " . self::PI;
    }
}

$math = new MathCalculator();
// $math::PI = 2;