<?php
interface Animal{
    public function makesound();
}

class Cat implements Animal{
    public function makesound(){
        echo "Meawww<br>";
    }
}
class Dog implements Animal{
    public function makesound(){
        echo "Hoooo Hooo<br>";
    }
}
class qaww implements Animal{
    public function makesound(){
        echo "Moooooo<br>";
    }
}

$cat=new cat();
$dog=new Dog();
$qaw=new qaww();
$animal=array($cat,$dog,$qaw);

foreach($animal as $sound){
    $sound->makesound();
}