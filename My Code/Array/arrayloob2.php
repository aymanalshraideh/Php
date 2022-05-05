<?php
$arr=["ayman",100,52,"ali",75];
$sum=0;
for($i=0;$i<count($arr);$i++){
    if(gettype($arr[$i])=="integer"){
       $sum+=$arr[$i];
    }
}
echo "<pre>";
print_r($arr);
echo "The sum of numbers in Array is :".$sum;