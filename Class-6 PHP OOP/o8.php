<?php


class Calculator {

    public static function sum($x, $y) {
        return $x + $y;
    }

    public static function multiply($x, $y) {
        return $x * $y;
    }
}
// $c = new Calculator();
// $sum = $c->sum(10, 20);
// echo $sum;

$sum = Calculator::sum(30, 40);
echo $sum;