<?php 

$products = [

['Orange', 0],
['Apple', 0],
['banana', 0],
['Grape', 0],
['Salat', 0]
];

//echo rand(1,70000);

//echo mt_rand(1, 20);

//echo random_int(1, 40);

$length = count($products);
//for loop

for($x = 0 ; $x < $length; $x++){

$products [$x] [1] = mt_rand(50 , 80);

}

print_r($products );

// foreech
foreach ($products as $index => $product){
$products[$index] [1] = mt_rand(1,40);

}

print_r($products);


// array_map function

$newProucts = array_map( function ($products){
 $products [1] = mt_rand(1,40);
return $products;

},$products);

print_r($newProucts);