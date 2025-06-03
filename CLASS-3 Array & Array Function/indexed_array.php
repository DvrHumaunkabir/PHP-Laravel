<?php

$number = array(4,6,4,87,5,8,4,8 );
$numbers = [43,46,32,78,43,56,32,54];

$fruits = ['Apple','banana','orange','grupe'];

 array_push($fruits,'hello','wow');// add  last
 array_unshift($fruits,'plam'); // add frist
 array_pop($fruits);//finish last
 array_shift($fruits); // finish frist
 //if(in_array("Apple",$fruits)){
    //echo "Apple now";
// }else{
 //   echo "not ";
 //}
$index = array_search("Apple",$fruits);//array search
//echo $index;

sort($fruits);
rsort($fruits);

$slice = array_slice($fruits,1); // নির্দষ্ট অংশ কেটে ফেলার জন্য
//print_r($slice);

$splice = array_splice($fruits,0,1,["watermelon"]);//cut and new add

$moreFrits = ['A','B','C','D','D'];//ak ba akadik arry  add kora jai
$allFrits = array_merge($fruits,$moreFrits);

 //print_r($allFrits);
$unick = array_unique($allFrits); //unick key cheack
//print_r($unick);

$val = array_values($allFrits);//array values
//print_r($val);

$newArray = array_fill(0,5,"helooo");//array fill new array 
//print_r($newArray);

$sum = array_sum($number);// array sum
//print_r($sum);

shuffle($allFrits);//ulta palta

$nums =range(1,5);//range
//print_r($nums);
 echo count($fruits);
echo "<br>";
print_r($allFrits);
//print_r($fruits);





