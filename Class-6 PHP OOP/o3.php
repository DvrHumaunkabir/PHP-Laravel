<?php


class Person {
    public $name; //access modifier
    public $email;
    private $age;

    function __construct($name, $email, $age) {
       $this->name =$name;
       $this->email =$email;
       $this->age = $age;
    }

    function greet() {
        // echo "Hey I am {$this->name}, and my email address is {$this->email}";
        echo "Hey I am {$this->name}, and my age is {$this->age}";
    }
}

 $person =new Person("Humaun kabir","h@gmail.com",30);


$person->greet();
