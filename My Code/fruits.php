<?php
$server='localhost';
$user='root';
$password='';
$db_name='fruits';


$mysqli= new mysqli($server,$user,$password,$db_name);

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: ".$mysqli->connect_error;
  exit();
}
   echo "The Connection is done"."<br>"; 



$select = mysqli_query($mysqli, "SELECT * FROM fruits");
$row = mysqli_fetch_all($select,MYSQLI_ASSOC);
echo $row['fruit_name'];
