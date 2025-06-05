<?php

$rahim = "1999-04-23";
$salman = "2024-01-03";

$date1 = new DateTime($rahim);
$date2 = new DateTime($salman);

$diff = $date1->diff($date2);

echo $diff->format("%y/%m/%d");
echo $diff->format("%a");


echo $diff->y .  " Years "  .  $diff->m  . " Months" .  $diff->d . " Days";