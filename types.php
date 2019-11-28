<?php
$foo = True;
var_dump($foo);

$foo = 1;
var_dump($foo);

$foo = 1.25;
var_dump($foo);

$foo= "Hello world";
var_dump($foo);

$foo=array("Volvo", "BMW", "Toyota");
var_dump($foo);

class Student {
    // constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}

$foo = new Student("Prattya","Datta");
var_dump($foo);

$foo=NULL;
var_dump($foo);
?>