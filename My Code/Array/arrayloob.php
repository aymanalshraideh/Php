<?php
$myarr=["ayman",1,2,"Ahmad","Soso",3];
echo "<pre>";
print_r($myarr);
$in=[];
for($i=0;$i<count($myarr);$i++){
    if(gettype($myarr[$i])==="integer"){
        // echo $myarr[$i]. "<br>";
        $in[]=$myarr[$i];
    }
}
print_r ($in);
$st=[];
for($i=0;$i<count($myarr);$i++){
    if(gettype($myarr[$i])==="string"){
        // echo $myarr[$i]. "<br>";
        $st[]=$myarr[$i];
    }
}
print_r ($st);