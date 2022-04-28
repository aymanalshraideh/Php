<?php
  
// Create a class
class GFG {
      
    public $Gek_name = "Welcome to GeeksforGeeks"; 
      
    // Constructor is being implemented. 
    public function __construct($Gek_name) { 
        $this->Gek_name = $Gek_name; 
    } 
   
} 
  
// Create the class name alias
class_alias('GFG', 'GeeksforGeeks');

// Create an object
$Gek = new GeeksforGeeks("GeeksforGeeks"); 
  
// Display result
echo $Gek->Gek_name; 


?>