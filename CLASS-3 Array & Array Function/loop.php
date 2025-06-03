<?php
$numbers = array(4,6,4,87,5,8,4,8 );
$countrys  = [
"name" =>" Humaun kabir",
"roll" => 1,
"age" => 25,
"country" => "Bangladesh",
];



foreach($numbers as $number){
    echo $number;
}


$lenth = count($numbers);

for($i = 0; $i<$lenth; $i++){
    echo $numbers[$i];

}



$numberOfItems = count($numbers);

foreach ($numbers as $number){
    echo $number ;
}


foreach($countrys as $country){
    echo $country;
    echo "<br>";
}

foreach ($countrys as $key => $value){
    echo "$key = $value ";
     echo "<br>";
}