<?php
class User{
    public $name;

    function set_name($name){
        $this->name=$name;
    }

    function get_name(){
      return  $this->name;
    }
}
$user1=new User();
$user1->set_name("Ayman Al-Shraideh");
echo $user1->get_name();