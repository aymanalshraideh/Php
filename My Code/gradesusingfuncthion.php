<?php

function grades($name,$grade1,$grade2,$grade3,$grade4,$grade5){

    $allgrades=[$grade1,$grade2,$grade3,$grade4,$grade5];
$sum=0;

    foreach($allgrades as $value){
      $sum+=$value;
        
    }
    $avr=$sum/count($allgrades);
switch ($avr){
   
    case ($avr>90):
        echo "Hi ".$name." you have a Grade 'A' "."...Your Grade in Number is :".$avr;
        break;
    case ($avr>80):
        echo "Hi ".$name." you have a Grade 'B' "."...Your Grade in Number is :".$avr;
        break;
    case ($avr>70):
        echo "Hi ".$name." you have a Grade 'C' "."...Your Grade in Number is :".$avr;
        break;
    case ($avr>60):
        echo "Hi ".$name." you have a Grade 'D' "."...Your Grade in Number is :".$avr;
        break;
    case ($avr>50):
        echo "Hi ".$name." you have a Grade 'D-' "."...Your Grade in Number is :".$avr;
        break;
    }


}

grades("Ayman",100,85,85,85,99);