<?php


echo abs(-11.4); // negative to posetive

echo pow( 2, 4); // sqwer

echo sqrt (16);  

//boro number ber korer jonno max beboher hoi
$max =max( 23,56,67,43,65,23,86);
echo " $max <br>";

$min = min(34,65,76,34,87,57,88);
echo "$min  <br>";

$max = 0;

$numbers=[45,76,98,45,98,07,56,43,57];


foreach ($numbers as $num){
if($num>$max){
    $max = $num;
}

}

print_r("$max  <br>");


$number = round (10.54);  // round up 50
echo $number;