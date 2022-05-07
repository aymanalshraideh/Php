<?php
abstract class ParentClass{

    abstract protected function prefexname($name):string;
}
class  ChildClass extends ParentClass{
    public function prefexname($name):string{
        if ($name == "Ayman"){
            $prefex="Mr.";
        }elseif($name == "soso"){
            $prefex="Mrs.";
        }else{
            $prefex="";
        }
return "{$prefex} {$name}";
    }
}
$class=new ChildClass("Ayman");
echo $class->prefexname("Ayman");