<?php
$myarr=["Ayman","Ahmad","Khaled"];
echo "<pre>";

print_r ($myarr);

echo $myarr[0];
$myarr[1]="Adel"; //Add item to Array
print_r ($myarr);

unset($myarr[1]); //remove item form Array
print_r ($myarr);