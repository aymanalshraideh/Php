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
<link rel="stylesheet" href="image/style.css">  
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
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div id="logo" class="col-sm-12">
          <img src="logo.png" id="logo" alt=""  width="200px" height="200px"/>
          
        </div>
      </div>
    </div>
    <div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <?php
    
    if(!empty($_SESSION['n']) || !empty($_SESSION['p']) || !empty($_SESSION['d'])){
        $_SESSION['n'];
        $_SESSION['p'];
        $_SESSION['d'];
        $_SESSION['ph'];
        $arr1=explode("<br>",$_SESSION['n']);
        $arr2=explode("<br>",$_SESSION['p']);
        $arr3=explode("<br>",$_SESSION['d']);
        $arr4=explode("<br>",$_SESSION['ph']);
    for($i=0; $i<count($arr1)-1; $i++){
        echo ('<div class="col-md-4 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions"> <img src="dfc.png" class="card-img img-fluid" width="96" height="350" alt="Image"> </div>
            </div>
            <div class="card-body bg-light text-center">
                <div class="mb-2">
                    <h5 class="font-weight-semibold mb-2" style="color:#80765c;">' . $arr1[$i] . '</h5><p class="text-muted" data-abc="true">' . $arr3[$i] . '</p>
                    </div>
                    <h4 class="mb-0 font-weight-semibold">$' . $arr2[$i] . '</h4>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i></div>
                    <div class="text-muted mb-3"></div> <button type="button"  class="btn bg-cart btn-primary"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>');
    }
}
else{
    echo('<div class="container" id="error"> <h2>There are no products to display!!! </h2></div>');
}
    ?>
    </div>
</div>
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>