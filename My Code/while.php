<?php
$number_of_throw=0;
while($number_of_throw<10){
    $flep_coin=rand(1,10);
    if($flep_coin<5){
        echo "<h4>We got a Face</h4>"."<br>";
    }else{
        echo "<h4>We got a Wrote</h4>"."<br>";
    }
    $number_of_throw +=1;
}