<?php

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  $myCar = (array) $myCar;
  var_dump($myCar);
  Cast to Object
  To cast to object, use the (object) statement:
  
  //data ttype to object
  
  $a = 5;       // Integer
  $b = 5.34;    // Float
  $c = "hello"; // String
  $d = true;    // Boolean
  $e = NULL;    // NULL
  
  $a = (object) $a;
  $b = (object) $b;
  $c = (object) $c;
  $d = (object) $d;
  $e = (object) $e;


?>