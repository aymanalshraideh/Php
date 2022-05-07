<?php $id=$_GET['id'];?>



<?php
if ($id==1){
    $name="Iphone";
}elseif($id==2){
    $name="Samsung";
}elseif($id==3){
    $name="OPOO";
}else{
    $name="The product is not found";
}
echo "<h1>".$name."</h1>";