<?php

$name="Ayman";
$grade=[99,95,85,100,98];
function average(array $students){
 foreach($students as $name=>$grade){
    $sum=0;

 foreach($grade as $value){

    $sum+=$value;
 }
 return $sum/count($grade);

}
function evaluation($average){
    $message="";
    switch ($average){
   
        case ($average>90):
            $message=" you have a 'A' Grade  ";
            break;
        case ($average>80):
            $message= " you have a 'B' Grade  ";
            break;
        case ($average>70):
            $message= " you have a 'C' Grade  ";
            break;
        case ($average>60):
            $message= " you have a 'D' Grade  ";
            break;
        case ($average>50):
            $message= " you have a 'D-' Grade  ";
            break;
        }
    return $message;
}}

function print_Grade($students){

    echo "Dear ".$name."<br>";
    $average=average($grade);
   $evaluation= evaluation($average);
    echo $evaluation;

}
print_Grade($name,$grade);

$students=[
    "Ayman"=>[99,95,85,100,98],
    "Ali"=>[86,58,41,58,69,44],
    "Ahmad"=>[99,88,98,65,47,89]
]