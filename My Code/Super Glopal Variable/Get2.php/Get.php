
<?php  $answer="" ;?>
<?php
if(isset($_GET["sup"])){
    $num1=$_GET["fnum"];
    $num2=$_GET["lnum"];
    $operation=$_GET["sup"];
    if ($operation=="+")
    {
        $answer=$num1+$num2;
    }elseif($operation=="-"){
        $answer=$num1-$num2;
    }elseif($operation=="*"){
        $answer=$num1*$num2;
    }elseif($operation=="/"){
        $answer=$num1/$num2;
    }
       
}
?>


<form action="">
    <input type="text" name="fnum"><br>
    <input type="text" name="lnum"><br>
    <input type="submit" value="+" name="sup">
    <input type="submit" value="-" name="sup">
    <input type="submit" value="*" name="sup">
    <input type="submit" value="/" name="sup"><br>
    <label for=""><?php echo $answer ;?></label>
</form>
<?php
