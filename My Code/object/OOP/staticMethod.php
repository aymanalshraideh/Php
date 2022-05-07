<?php
class A{

    public static function Welcome(){
        echo "Welcome!!";
    }
}
// يتم مناداتها من غير ان يتم تعريف object 
A::Welcome();