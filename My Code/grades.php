<?php
$name ="Ayman";
$grade=[60,85,54,60,85,33,88,99];

$sum=0;
foreach($grade as $value){
    $sum+=$value;
}
$avr= $sum/count($grade);


switch ($avr) {
    case ($avr>90):
        echo "You have 'Exelant' Grade ";
        break;
        case ($avr>80):
            echo "You have 'very Good' Grade ";
            break;
        case ($avr>70):
            echo "You have ' Good' Grade";
            break;
            case ($avr>60):
                echo "You have 'Accept' Grade";
                break;

    default:
        echo "You must Studey More!!";
        break;
}

