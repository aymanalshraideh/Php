<?php 
class A {

    public function employee(){
        echo "Class Name is  : ".get_class($this);
    }

}
$obj=new A();
$obj->employee();