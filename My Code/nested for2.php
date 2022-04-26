<?php
$star="*";
for($i=0;$i<5;$i++){
   for($j=5;$j>$i;$j--){
       echo $star ." ";
   }
   echo $star ."<br>";
   
}
$dd="A";
$a=0;

do {
    $b=0;
    do {
        echo $star ;
    $b++;
    } while ($b <= 8);
    echo "<br>"  ;
    $a++;
    
} while ($a < 4);