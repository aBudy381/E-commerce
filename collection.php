<?php   
 session_start(); ?>
 <!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Be Elegant </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.pink.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="font-weight-bold text-uppercase text-dark">Be Elegant</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="http://localhost/php%20project/index.php">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="http://localhost/php%20project/collection.php">Shop</a>
                </li>
               
              </ul>
              <ul class="navbar-nav ml-auto">               
                <li class="nav-item"><a class="nav-link" href="http://localhost/php%20project/cart/panier.php?action=delete&id=0"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray">(2)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost/php%20project/admin/index.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                <div class="col-lg-6">
                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="p-5 my-md-4">
                    <ul class="list-inline mb-2">
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h2 class="h4">Red digital smartwatch</h2>
                    <p class="text-muted">$250</p>
                    <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class="row align-items-stretch mb-4">
                      <div class="col-sm-7 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                    </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
<link rel="stylesheet" href="collection.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<div class="container">
<div class="section-header">
                    
                    <h3>Our Collection</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  labore et dolore magna aliqua.</p>
                </div>
<div class="row">
<?php   
 $connect = mysqli_connect("localhost", "root", "", "projet_php");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="shopcart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?> 
 <?php 
                //PULLING DATA FROM DATABASE  
              // $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
               // $result = mysqli_query($connect, $query); 
               /* $dbh= new PDO('mysql:host=localhost;dbname=projet_php','root','');
                $select = $dbh->prepare("SELECT * FROM products");
                $select->execute();*/

             // if(mysqli_num_rows($result) > 0)  
              // {  
                  // while($row = mysqli_fetch_array($result)) 
 //while($prod=$select->fetch(PDO::FETCH_OBJ)){ 
                    // { 
                      $query = "SELECT * FROM products ORDER BY id ASC";  
                      $result = mysqli_query($connect, $query);  
                      if(mysqli_num_rows($result) > 0)  
                      {  
                           while($row = mysqli_fetch_array($result))  
                           {  
                      ?>  
                 
<div class="col-md-3 col-sm-6">
<form method="post" action="shopcart.php?action=add&id=<?php echo $row["id"]; ?>"> 
<div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1"  src="<?php echo $row["image"]; ?>">
                        
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" name="add_to_cart" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#"><?php echo $row["title"]; ?></a></h3>
                    <div class="price">
                        $<?php echo $row["price"]; ?>
                        <span>$16.00</span>
                    </div>
                    <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />  
                      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                    <a class="add-to-cart" href="" name="add_to_cart">ADD TO CART</a>
                </div>
</div>

</div>
<?php  
                     }  
                }
                
                
                ?> 
</div>
</div>
<footer>
    <?php require_once('./include/footer.php');?>
</footer>