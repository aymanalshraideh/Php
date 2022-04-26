<?php
$student=array("name" =>"Ayman","age"=>25,"location"=>"Irbid");
echo "<pre>";
print_r($student);

$student["name"]="Mohammad";
print_r($student);
unset($student["location"]);
print_r($student);