<?php


class Person {
    public $name; //access modifier
    public $email = "not known";
    private $age = 30;

   function mySelf (){
    echo " hey {$this->name}, and my age {$this->age}, email {$this->email}";
   }
}


$person = new Person();
$person->name ="Humaun kabir";
//$person->age = 30;
$person->email = "humaunakbir@gmail.com";

$person->mySelf();


