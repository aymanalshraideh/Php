<?php
//Task 5 ##################
$temprator=[78, 60, 62,81, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$avr=0;
$maxt=[];

rsort($temprator);
foreach($temprator as $value) {
    $avr +=$value;
    
}
echo "Average Temperature is : ".(float)($avr/count($temprator))."<br>"."<pre>";
echo "five highest temperatures is ";
for($i=0;$i<5;$i++){
    echo $temprator[$i]." ";
}
$n=array_unique($temprator);
sort($n);

// print_r(array_unique($temprator));

echo "<br>";
echo " five lowest temperatures is ";
for($i=0;$i<5;$i++){
    echo $n[$i]." ";
}


//#########################

echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 6 ##################


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
 print_r( array_merge($array1,$array2));

 //#########################

echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 7 ##################

for($i=200;$i<250;$i++){
    if($i%4==0){
        echo $i." ";
    }
}

//#########################

echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 9 ##################


for($i=0;$i<10;$i++){
    $random=rand(11,20);
    echo $random ." ";
}

//#########################

echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 10 ##################

$array10 = array( 2, 0, 10, 12, 6);
$min=0;
for($i=0;$i<count($array10);$i++){
    // if($array10[$i]== 0){
    //     unset($array10[$i]);
    // }
    if($array10[$i]<$min){
        
         $min=$array10[$i];
     }


}
echo $min ;