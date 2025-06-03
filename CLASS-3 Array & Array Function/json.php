<?php


$json = '{ "name": "kabir", "age": 12, "roll": 20, "math": 100 }';
  $countris = json_decode($json,true);

print_r($countris);
