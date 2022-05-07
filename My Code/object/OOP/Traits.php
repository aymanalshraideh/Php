<?php
trait vehaicle {

    public function vehiclename($name){
echo "This vhaicle   is ". $name;
}}
class Car {
use vehaicle;
}
$obj=new Car();
$obj->vehiclename("BMW");