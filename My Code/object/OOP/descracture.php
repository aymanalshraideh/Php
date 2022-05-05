<?php
class Car{

    function __construct($name){
        $this->name=$name;
    }
    function __destruct(){
        echo "This Car is {$this->name}.";
    }
}

$car1=new Car("BMW");
