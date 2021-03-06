<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include '../connection.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| About :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
    </script>
    <!-- Custom Theme files -->
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="../css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
     <!-- header -->
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.html">Lyrah
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                  
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <a href="wishlist.php">
                            <img src="../images/wishlist.png" height="50px" width="50px;">
                        </a>
                        
                        <a class="text-dark login_btn align-self-center mx-3" href="account.php" >
                            <i class="far fa-user"></i>
                        </a>
                        
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link  active" href="customerhome.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                      <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Women's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <?php 
                                            $q="select * from tblsubcategory where status='active' and catid='1'";
                                            $s= mysqli_query($conn, $q);
                                            while($r= mysqli_fetch_array($s))
                                            {
                                             echo '<a class="dropdown-item" href="product.php?cat='.$r['subid'].'"  >'.$r['subcategory'].'</a>';
                                            }
                                            ?>
<!--                                            <a class="dropdown-item" href="women.html">T-shirts</a>
                                            <a class="dropdown-item" href="women.html">Skirts</a>
                                            <a class="dropdown-item" href="women.html">Jeans</a>
                                            <a class="dropdown-item" href="women.html">Tunics</a>
                                           <a class="dropdown-item" href="women.html">Palazzo</a>-->
                                        </div>
<!--                                        <div class="col-md-4">
                                            
                                            <a class="dropdown-item" href="women.html">Sarees</a>
                                            <a class="dropdown-item" href="women.html">Churidars</a>
                                            <a class="dropdown-item" href="women.html">Churidar materials</a>
                                            <a class="dropdown-item" href="women.html">Kurthis</a>
                                           <a class="dropdown-item" href="women.html">Chikandhari</a>
                                        </div>-->
                                        
                                        </div>
                                    </div>
                                </div>
                            
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Accessories</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="container">
                                    <div class="row w3_kids  py-3">
                                        <div class="col-md-3 ">
                                          <?php 
                                            $q="select * from tblsubcategory where status='active' and catid='2' ";
                                            $s= mysqli_query($conn, $q);
                                            while($r= mysqli_fetch_array($s))
                                            {
                                             echo '<a class="dropdown-item" href="product.php?cat='.$r['subid'].'" >'.$r['subcategory'].'</a>';
                                            }
                                            ?>
<!--                                            <a class="dropdown-item" href="boys.html">Bags</a>
                                            <a class="dropdown-item" href="boys.html">Watches</a>
                                            <a class="dropdown-item" href="boys.html">Clutches</a>
                                            <a class="dropdown-item" href="boys.html">Jutties</a>-->
                                            
                                        </div>
                                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Scarfs</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="container">
                                    <div class="row w3_kids  py-3">
                                        <div class="col-md-3">
                                            <?php 
                                            $q="select * from tblsubcategory where status='active' and catid='3' ";
                                            $s= mysqli_query($conn, $q);
                                            while($r= mysqli_fetch_array($s))
                                            {
                                             echo '<a class="dropdown-item" href="product.php?cat='.$r['subid'].'">'.$r['subcategory'].'</a>';
                                            }
                                            ?>
<!--                                            <a class="dropdown-item" href="girls.html">Hijab</a>
                                            <a class="dropdown-item" href="girls.html">Hair scarfs</a>
                                            -->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                       
                       <li class="nav-item">
                           <a class="nav-link" href="orders.php">My orders</a>
                        </li>
                       
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>
    <!-- //header -->
    <!-- inner banner -->
  <div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
            <span>L</span>YRAH
            <span>s</span>tore</h4>
    </div>
    <!-- //inner banner -->
    <!-- //inner banner -->
   
 