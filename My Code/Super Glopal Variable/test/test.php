<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="file" name="img" accept="image/png , image/jpeg , image/jpg"><br>
        <input type="submit" value="Submit" name='s'>
    </form>
    
    
    <?php
 
 if(isset($s)){
 
$img=$_FILES['img']['name'];
 $imgTmp=$_FILES['img']['tmp_name'];
 $imgfolder='./img/'.$img;
 move_uploaded_file( $imgTmp,$imgfolder);
}
   
$img1=$_POST['img']; echo $img1;
    ?>

</body>
</html>