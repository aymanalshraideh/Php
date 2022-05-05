<?php
class Car{
    public $name;
    public $color;
    public function move($speed){

    }
}

class BMW extends Car{
    public function stop(){

    }
}



$a=new car();
$b=new BMW();
$b->color="red";
$b->name="5550";
echo $b->color;