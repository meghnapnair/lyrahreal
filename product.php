<?php
include 'connection.php';

$cat=$_GET['cat'];
?>
<html lang="zxx">

<head>
    <title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Contact :: w3layouts</title>
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
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <!-- Owl Stylesheets -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="index.html">LYRAH
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
<!--                    <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                        <select class="form-control input-lg" name="category">
                            <option value="all">Search our store</option>
                            <optgroup label="Womens">
                                <option value="Dresses">Dresses</option>
                                <option value="T-shirts">T-shirts</option>
                                <option value="skirts">Skirts</option>
                                <option value="jeans">Jeans</option>
                                <option value="Tunics">Tunics</option>
                                <option value="Dresses">Palazzo</option>
                                <option value="T-shirts">Sarees</option>
                                <option value="skirts">Churidars</option>
                                <option value="jeans">Churidar materials</option>
                                <option value="Tunics">Kurthis</option>
                                <option value="Tunics">Chikandhari</option>

                            </optgroup>
                            <optgroup label="Accessories">
                                <option value="Dresses">Bags</option>
                                <option value="T-shirts">Watches</option>
                                <option value="skirts">Clutches</option>
                                <option value="jeans">Jutties</option>
                                
                            </optgroup>
                            <optgroup label="Scarfs">
                                <option value="T-Shirts">Hijab</option>
                                <option value="coats-jackets">Hair scarfs</option>
                                
                            </optgroup>
                        </select>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                    </form>-->
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                            <i class="far fa-user"></i>
                        </a>
                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
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
                        <!-- //shopping cart ends here -->
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
                            <a class="nav-link  active" href="index.php">Home
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
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>
<style>
    td,th{
        padding: 20px;
    }
</style>
<div style="margin-top: 50px; margin-left: 200px; ">
    <h1 style="margin:50px;">Latest collections</h1>
    <table  style="margin:50px; ">
            
            <?php
                        $q="select * from tblproduct where subid='$cat' and pStatus='In stock' order by pId desc";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            
                            $pid1=$r[0];
                            $pname1=$r[2];
                            $prate1=$r[9];

                            
                            echo '<tr>';
                            $qry="select imgpath from tblimages where pid='$pid1'";
                            $res= mysqli_query($conn, $qry);
                            $row= mysqli_fetch_array($res);
                            echo '<td><img src="'.$row['imgpath'].'" height="300px" width="300px"></td>';
                            echo '<td><h4>'.$pname1.'</h4><br/><b>₹'.$prate1.'+ shipping</b>';
                            echo '<br/><br/><a href="#" data-toggle="modal" data-target="#myModal_btn">View more...</a></td>';
                  echo '</tr>';
                            
                            
                            
                        }
                   ?> 
        </table>
</div>
<footer>
        <div class="footerv2-w3ls">
            <div class="footer-w3lagile-innerr">
                <!-- footer-top -->
                <div class="container-fluid">
                    <div class="row  footer-v2grids w3-agileits">
                        <!-- services -->
                        <div class="col-lg-2 col-sm-6 footer-v2grid">
                            <h4>Support</h4>
                            <ul>

                                <li>
                                    <a href="payment.html">Payment</a>
                                </li>
                                <li>
                                    <a href="#">Shipping</a>
                                </li>
                                <li>
                                    <a href="#">Cancellation & Returns</a>
                                </li>
                               
                            </ul>
                        </div>
                        <!-- //services -->
                        <!-- latest posts -->
                        <div class="col-lg-3 col-sm-6 footer-v2grid mt-sm-0 mt-5">
                            <h4>Latest Blog</h4>
                            <div class="footer-v2grid1 row">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl2.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">eveniie arcet ut moles morbi dapiti</a>
                                </div>
                            </div>
                            <div class="footer-v2grid1 row my-2">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl1.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">earum rerum tenmorbi dapiti et</a>
                                </div>
                            </div>
                            <div class="footer-v2grid1 row">
                                <div class="col-4 footer-v2grid1-left">
                                    <a href="blog.html">
                                        <img src="images/bl3.jpg" alt=" " class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-8 footer-v2grid1-right p-0">
                                    <a href="blog.html">morbi dapiti eveniet ut molesti</a>
                                </div>
                            </div>
                        </div>
                        <!-- //latest posts -->
                        <!-- locations -->
                        <div class="col-lg-2 col-sm-6 footer-v2grid my-lg-0 my-5">
                            <h4>office locations</h4>
                            <ul>
                                <li>
                                    <a href="#">Madakkathanam</a>
                                </li>
                               
                            </ul>
                        </div>
                        <!-- //locations -->
                        <!-- flickr posts -->
                        <div class="col-lg-3 col-sm-6 footer-v2grid my-lg-0 my-sm-5">
                            <h4 class="b-log">
                                flickr posts
                            </h4>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl4.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl1.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl6.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl5.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>

                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl2.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl3.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl6.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl4.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="footer-v2grid-instagram">
                                <a href="#">
                                    <img src="images/bl5.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <!-- //flickr posts -->
                        <!-- popular tags -->
                        <div class="col-lg-2  footer-v2grid mt-sm-0 mt-5">
                            <h4>popular tags</h4>
                            <ul class="w3-tag2">
                                <li>
                                    <a href="shop.html">amet</a>
                                </li>
                                <li>
                                    <a href="men.html">placerat</a>
                                </li>
                                <li>
                                    <a href="shop.html">Proin </a>
                                </li>
                                <li>
                                    <a href="boys.html">vehicula</a>
                                </li>
                                <li>
                                    <a href="shop.html">diam</a>
                                </li>
                                <li>
                                    <a href="women.html">velit</a>
                                </li>
                                <li>
                                    <a href="shop.html">felis</a>
                                </li>
                                <li>
                                    <a href="shop.html">mauris</a>
                                </li>
                                <li>
                                    <a href="girls.html">amet</a>
                                </li>
                                <li>
                                    <a href="shop.html">placerat</a>
                                </li>
                                <li>
                                    <a href="shop.html">Proin </a>
                                </li>
                                <li>
                                    <a href="index.html">vehicula</a>
                                </li>
                                <li>
                                    <a href="shop.html">diam</a>
                                </li>
                                <li>
                                    <a href="men.html">velit</a>
                                </li>
                                <li>
                                    <a href="shop.html">felis</a>
                                </li>
                                <li>
                                    <a href="women.html">mauris</a>
                                </li>
                            </ul>
                        </div>
                        <!-- //popular tags -->
                    </div>
                </div>
                <!-- //footer-top -->
                <div class="footer-bottomv2 py-5">
                    <div class="container">
                        <ul class="bottom-links-agile">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>

                        </ul>
                        <h3 class="text-center follow">Follow Us</h3>
                        <ul class="social-iconsv2 agileinfo">
                            <li>
                                <a href="#">
                                    <i class="facebook"></i>
                                </a>
                            </li>
                          
                            <li>
                                <a href="#">
                                    <i class="youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="instagram"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5 footer-copy_w3ls">
                <div class="d-lg-flex justify-content-between">
                    <div class="mt-2 sub-some align-self-lg-center">
                        <h5>Payment Method</h5>
                        <ul class="mt-4">
                            <li class="list-inline-item">
                                <img src="images/pay2.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay5.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay3.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay7.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/pay8.png" alt="">
                            </li>
                            <li class="list-inline-item ">
                                <img src="images/pay9.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="cpy-right align-self-center">
                        <h2 class="agile_btxt">
                            <a href="index.html">
                                <span>f</span>ashion
                                <span>h</span>ub</a>
                        </h2>
                        <p>© 2020LYRAH. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- sign up Modal -->
    <div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="register.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name1" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" pattern="[a-zA-Z ]+" id="recipient-name1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" name="Password" id="password1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                                </div>
                                <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Register">
                                </div>
                            </form>
                            <p class="text-center mt-3">Already a member?
                                <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                    Login Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //signup modal -->
    <!-- signin Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Password" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>