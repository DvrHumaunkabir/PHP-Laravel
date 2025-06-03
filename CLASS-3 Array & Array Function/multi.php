<?php


$students = [

"kabir"=>[
    "name" => "kabir",
    "age" => 12,
    "roll" => 20,
    "math" => 100

],

"salman"=>[
    "name" => "salman",
    "age" => 15,
    "roll" => 30,
    "math" => 90

]

];




 $students['kabir']['age'] = 1000;
print_r($students) ;