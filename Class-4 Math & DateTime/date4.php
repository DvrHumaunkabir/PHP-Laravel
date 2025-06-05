<?php
$date = "2025/06/05";

$currentDate = new dateTime();
$oldDateTime = new DateTime($date);


$diff = $currentDate -> diff($oldDateTime);
echo $diff-> format("%a days ago");