
    <?php
//Task 1 ##################
$color=["white","green","red"];
    
    
"<ul>";
     
    for($i=0;$i<count($color);$i++){
        echo "<li>";
        echo $color[$i];
        echo "</li>";
    }
    
"</ul>";

//#########################
echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 2 ##################
$cities= array( "Italy"=>"Rome",
 "Luxembourg"=>"Luxembourg"
 , "Belgium"=> "Brussels"
 , "Denmark"=>"Copenhagen"
 , "Finland"=>"Helsinki"
 , "France" => "Paris"
 , "Slovakia"=>"Bratislava"
 , "Slovenia"=>"Ljubljana"
 , "Germany" => "Berlin"
 , "Greece" => "Athens"
 , "Ireland"=>"Dublin"
 , "Netherlands"=>"Amsterdam"
 , "Portugal"=>"Lisbon"
 , "Spain"=>"Madrid" );
echo "<pre>";
asort($cities);

 foreach ($cities as $key => $value) {
     echo "The Cabital of ".$key." is ".$value."<br>";
 }
//#########################

 echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 3 ##################

$color0 = array (4 => 'white', 6 => 'green', 11=> 'red');

foreach($color0 as $value){
    echo $value;
    break;
}
//#########################

echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 4 ##################

$fruits = array("d" => "lemon"
, "a" => "orange"
, "b" => "banana",
 "c" => "apple");
 asort($fruits);
 foreach($fruits as $key => $value){
        echo $key." = " .$value ."<br>";

 }
//#########################

echo "<br>".str_repeat("#",20)."<br>";



//#########################
//Task 8 ##################

$words =  array("abcd","abc","de","hjjj","g","wer");


$min=1;
$max=0;
for($i=0;$i<count($words);$i++){
   if(strlen($words[$i])>$max){
       $max=strlen($words[$i]);
   }elseif(strlen($words[$i])<$min){
       $min=strlen($words[$i]);
   }

}
echo "The shortest array length is ".$min ." The longest array length is ".$max;
