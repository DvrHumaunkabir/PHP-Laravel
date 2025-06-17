<?php


class Person {

function __construct(public $name, public $email, public $age){

}

function mySelf (){
    echo "{$this->name}, {$this->email}";
}

/*
public function isAdult () {

    return $this->age >=18;
}
*/
}

$salman = new Person("Humaun kabir","huma@gmail.com","190");

if($salman->age >=18){
    echo "You are wellcome";
}else{
  echo  "Not Wellcome";
}


$salman->mySelf();