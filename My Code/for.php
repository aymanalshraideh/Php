<?php
for ($number_ofThrow=0;$number_ofThrow<10;$number_ofThrow++)
{
    $flip_coin=rand(1,10);
    if($flip_coin<5){
        echo "<h4>we got a Face</h4>";
    }else{
        echo "<h4>we got a Wrote</h4>";
    }
}