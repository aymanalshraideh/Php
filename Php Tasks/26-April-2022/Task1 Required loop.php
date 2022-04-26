<?php
echo "<br>"."Task 1".str_repeat("#",15)."<br>";
$totall=0;
for($i=0;$i<30;$i++){
  $totall+=$i;
}
echo $totall;
//Task 1 ##################
echo "<br>".str_repeat("#",20)."<br>";
//#########################
//Task 4 ##################

$a=1;


do {
  $b=1;
  do {
    if($a==$b){
      echo $a." ";
    }else{
      echo 0 ." "; ;
    }
   
   ++ $b;

  } while ($b <= 5);
  
  echo "<br>";
  $a++;
} while ($a <= 5);
echo "<br>".str_repeat("#",20)."<br>";

//#########################
//Task 5 ##################
$num=5;
$fectorial=1;
for($i=1;$i<=$num;$i++){
  $fectorial*=$i;
}
echo $fectorial;
//#########################
echo "<br>".str_repeat("#",20)."<br>";
//#########################

//#########################
//Task 6 ##################
$a=0;
$b=1;
echo $a;
for($i=0;$i<8;$i++){
  echo " ".$b." ";
  $sum=$a+$b;
  $a=$b;
  $b=$sum;
}
//#########################
echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 9 ##################
$c=0;
for ($i=0; $i <6 ; $i++) { 
 
for ($j=0; $j < $i; $j++) {
  $c++; 
  echo $c ."  " ;
  
}

echo "<br>";
}
