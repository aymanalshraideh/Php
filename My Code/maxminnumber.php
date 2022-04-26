<?php

$myarr=[2,3,11,25,21,1,0,100];

$count=0;
$count1=0;
for($i=0;$i<count($myarr);$i++){
    if($myarr[$i]<$count){
        $count=$myarr[$i];
    }elseif($myarr[$i]>$count1){
        $count1=$myarr[$i];
    }}
echo $count;
echo $count1;