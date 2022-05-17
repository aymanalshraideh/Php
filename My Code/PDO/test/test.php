<form action="" method='get'><input type="submit" value="Load Data" name='load'> </form>
<?php

require 'confg.php';


if(isset($_GET['load'])){

    LoadData();
}


function LoadData(){
    global $db;
$sql='SELECT * FROM courses';

$sta=$db->query($sql);

$publsh=$sta->fetchAll();


if($publsh){

foreach($publsh as $value){
  
    echo $value['name']."<br>";

}

}
}


?>
<?php
$sql='SELECT * FROM courses';

$sta=$db->query($sql);

$publsh=$sta->fetchAll();?>

<select name="" id="">
    <?php foreach($publsh as $value): ?>
    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
  <?php endforeach ?>
</select>
