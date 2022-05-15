<?php
session_start();
// @include 'config.php';
// if(isset($_POST['add_product'])){
    
// $product_name=$_POST['product_name'];
// $product_price=$_POST['product_price'];
// $product_image=$_FILES['product_image']['name'];
// $product_image_tmp_name=$_FILES['product_image']['tmp_name'];
// $product_image_folder='uploded_img/'.$product_image;
// if(empty($product_name)||empty($product_price)||empty($product_image)){
//   $message[]='Please Fill out All';
// }else{
//   $insert="INSERT INTO products(name,price,image) VALUES('$product_name','$product_price','$product_image') ";
//   $upload=mysqli_query($conn,$insert);
//   if($upload){
//     move_uploaded_file($product_image_tmp_name,$product_image_folder);
//     $message[]='new product addes successfully';
//   }else{
//     $message[]='Could not add the product';
//   }
// }
// };
// if(isset($_GET['delete'])){
//   $id=$_GET['delete'];
//   mysqli_query($conn,"DELETE FROM products WHERE id = $id");
//   header('location:admin_page.php');
// };

?>
<!Doctype html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
        #logo{
            display: flex;
            justify-content: center;     
        }
      .fakeimg {
        height: 200px;
        background: #aaa;
      }
    </style> 
</head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a id="logo1" class="navbar-brand" href="#">Ayman</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="page2.php">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="page1.php">Admin</a>
          </li>
          <li class="nav-item">
            
          </li>
        </ul>
      </div>
    </nav>

    <?php
    if(isset($message)){
      foreach($message as $message){
        echo '<span class="message">'.$message.'</span>';
      }
    }
    ?>
  
  <div class="container">

<form action="" method="post">
	<div class="form-group">
		<label for="prod">Product Name: </label>
		<input type="text" class="form-control" id="prod" name="pname" Required>
	</div>
	<div class="form-group">
		<label for="pri">Price: </label>
		<input type="number" class="form-control" id="pri" name="price" Required>
	</div>
	
	<div class="form-group">
		<label for="pic">Product Picture: </label>
		<input type="file" class="form-control" id="pic" name="picture" accept="image/*" required>
		
	</div>

	<div class="form-group">
		<label for="desc">Description: </label>
		<textarea name="description" id="desc" cols="30" rows="10" class="form-control" Required></textarea>
	</div>
	<br>
	<button type="submit" class="btn btn-primary" name="add" id="add"  >Add Item</button>
	<button class="btn btn-primary" id="btn" style="display: inline-block;"><a href="view-products-page.php"style="color: white; text-decoration:none;">Show Items</a></button>
</form>
<br>


</div>
<div class="table-responsive" id="table-div">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Product Picture</th>
                </tr>
            </thead>
            <tbody id="info">
            <?php 
                
                if(isset($_POST['add'])){
                    $_SESSION['n'].=$_POST['pname'].'<br>';
                    $_SESSION['p'].=$_POST['price'].'<br>';
                    $_SESSION['d'].=$_POST['description'].'<br>';
                    $_SESSION['ph'].=$_POST['picture'].'<br>';
                    echo ('<tr><td>' . $_SESSION['n'] . '</td><td>' . $_SESSION['p'] . '</td><td>' . $_SESSION['d'] . '</td><td>' . $_SESSION['ph']. '</td></tr>');
                }
                // session_unset();
            ?>
            </tbody>
        </table>
    </div>
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>