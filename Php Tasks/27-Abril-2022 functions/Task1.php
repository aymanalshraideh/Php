<?php
//#########################

echo "<br>".str_repeat("#",20)."Task 1".str_repeat("#",20)."<br>";



//#########################Write a PHP script to check if the inserted number is a prime number 
//Task 1 ##################

function primenum($num){
    $count=0;
    for($i=1;$i<$num;$i++){
        if(($num % $i)==0){
            $count++;
        }
    }
    if ($count<=2){
        echo $num." is prime number";
    }else{
        echo $num." is not prime number";
    }
}
primenum(22);

//#########################1.	

echo "<br>".str_repeat("#",20)."Task 2".str_repeat("#",20)."<br>";



//#########################2.	Write a PHP script to reverse a string 
//Task 2 ##################

function reversstring($str){

    echo strrev($str);

}
reversstring("Ayman");

//#########################

echo "<br>".str_repeat("#",20)."Task 3".str_repeat("#",20)."<br>";



//######################### Write a PHP script to check if the all string characters are lower cases
//Task 3 ##################

function lowerandUpper($string){

    if($string==strtolower($string)){
        echo "your Sting is OK";
    }else{
        echo "your Sting is not OK";
    }
}
// strtolower
// echo strtoupper("ayman");
lowerandUpper("remove");


//#########################

echo "<br>".str_repeat("#",20)."Task 4".str_repeat("#",20)."<br>";



//#########################4.	Write a PHP function to swap to variables?
//Task 4 ##################
$x=10; $y=5;
echo "x before swaping=".$x." <br> y before swaping=".$y."<br>";
$x=$x+$y;
$y=$x-$y;
$x=$x-$y;

echo "x after swaping=".$x." <br> y after swaping=".$y;
//#########################

echo "<br>".str_repeat("#",20)."Task 5".str_repeat("#",20)."<br>";



//#########################
//Task 5 ##################5.	6.	Write a PHP function to check if a number is an Armstrong number or not ?

$n=(string)10;
$m= $n[1];
// echo $m;

function armstrong($num){
    $sum=0;
 $str=(string)$num;
$length=strlen($str);
 for ($i=0;$i<$length;$i++){
    $sum += $str[$i]**3;
 }
if($sum==$num){
    echo $num . " is Amsrong Number";
}else{
    echo $num . " is not Amsrong Number";


}}
armstrong(370);

//#########################

echo "<br>".str_repeat("#",20)."Task 6".str_repeat("#",20)."<br>";



//#########################6.	
//Task 6 ##################
function re($string){
    if($string==strrev($string))
    {
        echo "Yes";
    }
    
}
$stringg="Eva, can I see bees in a cave?";
re($stringg);
// echo strrev("Eva, can I see bees in a cave?");

//#########################

echo "<br>".str_repeat("#",20)."Task 7".str_repeat("#",20)."<br>";



//#########################6.	
//Task 7 ##################

function dublecat($arr){

    echo "<pre>";
    print_r(array_unique($arr));
}
echo "<pre>";
$myarr=[2, 4, 7, 4, 8, 4];
print_r($myarr);
dublecat($myarr);