<?php
$products=array("Milk","Bread","Tea","Tomato");
echo "<pre>";
print_r($products);
$products[10]="Frase";
print_r($products);
foreach($products as $item){
    echo $item ."<br>";
}