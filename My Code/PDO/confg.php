<?php
$servername="localhost";
$username="root";
$password="";


$dsn = "mysql:host=$servername;dbname=univercity;";

try {
    $db=new PDO($dsn,$username,$password);
    // echo "you are Conected"."<br>";
    //code...
} catch (PDOException $e) {
    echo 'Falid'. $e->getMessage();
}

