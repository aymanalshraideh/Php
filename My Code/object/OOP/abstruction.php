<?php
abstract class Car{
public $name;

public function __construct($name){

    $this->name=$name;

}
abstract public function intro():string;

}
class BMW extends Car{
public function intro():string {
    return "I'm $this->name From German";
}
}
class volvo extends Car{
    public function intro():string {
        return "I'm $this->name  from Amman";
    }
    }
class Toyota extends Car{
        public function intro():string {
            return "I'm $this->name From Jaban";
        }
        }

$Bmw=new BMW("BMW");
echo $Bmw->intro();
echo "<br>";

$volvo=new volvo("Volov");
echo $volvo->intro();
echo "<br>";

$toyota=new Toyota("TOYOTA");
echo $toyota->intro();
echo "<br>";