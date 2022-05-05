<?php

class Car{

    function __construct($name){
        $this->name=$name;
    }

}
$car1=new Car("BMW");
echo $car1->name;