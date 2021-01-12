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
    <title>Lyrah</title>
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
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="../css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
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
                    <a class="navbar-brand" href="../index.php">Lyrah
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
                        <a href="wishlist.php">
                            <img src="../images/wishlist.png" height="50px" width="50px;">
                        </a>
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="account.php">
                            <i class="far fa-user"></i>
                        </a>
                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
                       <a href="cart.php">
                            <img src="../images/cart.png" height="50px" width="50px;">
                        </a>
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
    <!-- banner -->
    <div class="banner-text">
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>L</span>yrah
                            <span>s</span>tore
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>w</span>omen's
                                <span>c</span>lothings</h4>
                            <div class="bnr_clip position-relative">
                                <h4>
                                    <span class="px-2">best </span> collection
                                </h4> 
                                
                                <p class="text-uppercase py-2"> best price</p>
                                <!--<a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>-->
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>L</span>YRAH
                            <span>s</span>tore
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>A</span>ccessories</h4>
                            <div class="bnr_clip position-relative">
                                <h4>
                                    <span class="px-2">Branded </span>items
                                </h4>
                                
                                <p class="text-uppercase py-2">on special sale</p>
                               
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner3">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>L</span>YRAH
                            <span>s</span>tore
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>S</span>carf
                                <span>c</span>ollection</h4>
                            <div class="bnr_clip position-relative">
                                <h4>
                                    <span class="px-2">Exclusive </span>items
                                </h4>
                                
                                <p class="text-uppercase py-2">best quality</p>
                               
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>    </div>
    <!-- //banner -->
    <!--services-->
    <div class="agileits-services" id="services">
        <div class="no-gutters agileits-services-row row">
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-sync-alt p-4"></span>
                <h4 class="mt-2 mb-3">Fast processing</h4>
            </div>
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-gift p-4"></span>
                <h4 class="mt-2 mb-3">Best packing</h4>
            </div>

            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-lock p-4"></span>
                <h4 class="mt-2 mb-3">secure payments</h4>
            </div>
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-shipping-fast p-4"></span>
                <h4 class="mt-2 mb-3">Safe shipment</h4>
            </div>
        </div>
    </div>
    <!-- //services-->
    <!-- about -->
   
    <!-- //about -->
    <!-- product tabs -->
<!--    <section class="tabs_pro py-md-5 pt-sm-3 pb-5">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>s</span>mart clothing</h5>
        <div class="tabs tabs-style-line pt-md-5">
            <nav class="container">
                <ul id="clothing-nav" class="nav nav-tabs tabs-style-line" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#women" id="women-tab" role="tab" data-toggle="tab" aria-controls="women" aria-expanded="true">Women's Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#men" role="tab" id="men-tab" data-toggle="tab" aria-controls="men">Accessories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#girl" role="tab" id="girl-tab" data-toggle="tab" aria-controls="girl">Scarfs</a>
                    </li>
                    
                </ul>
            </nav>
             Content Panel 
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                <div role="tabpanel" class="tab-pane fade show active" id="women" aria-labelledby="women-tab">
                    <div id="owl-demo" class="owl-carousel text-center">
                        
                             card 
                            <?php
                      include '../connection.php';
                      $q="select * from tblproduct where subid in(select subid from tblsubcategory where catid in(select catid from tblcategory where category='Women''s clothing')) and pStatus='In stock' order by pId desc limit 4";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            $qry="select imgpath from tblimages where pId='".$r['pId']."'";
                            $res=mysqli_query($conn,$qry);    
                            $row=mysqli_fetch_array($res);
                            
                           echo '<div class="item">';
                            echo '<div class="card product-men p-3">';
                                echo'<div class="men-thumb-item">';
                                    echo'<img src="../'.$row[0].'" alt="img" class="card-img-top">';
                                    echo '<div class="men-cart-pro">';
                                        echo '<div class="inner-men-cart-pro">';
                                           echo '<a href="womens.html" class="link-product-add-cart">Quick View</a>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                
                                echo '<div class="card-body  py-3 px-2">';
                                    echo '<h5 class="card-title text-capitalize">'.$r['pName'].'</h5>';
                                    echo'<div class="card-text d-flex justify-content-between">';
                                        echo'<p class="text-dark font-weight-bold">Rs. '.$r['pRate'].'</p>';
                                        echo '<p class="line-through">'.($r['pRate']+100).'</p>';
                                    echo '</div>';
                                echo '</div>';
                                
                                
                            echo '</div>';
                           
                        echo '</div>';
                        
                        
                        }?>
                        
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="men" aria-labelledby="men-tab">
                    <div id="owl-demo1" class="owl-carousel text-center">
                       <?php
                      include '../connection.php';
                      $q="select * from tblproduct where subid in(select subid from tblsubcategory where catid in(select catid from tblcategory where category='Accessories')) and pStatus='In stock' order by pId desc limit 4";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            $qry="select imgpath from tblimages where pId='".$r['pId']."'";
                            $res=mysqli_query($conn,$qry);    
                            $row=mysqli_fetch_array($res);
                            
                           echo '<div class="item">';
                            echo '<div class="card product-men p-3">';
                                echo'<div class="men-thumb-item">';
                                    echo'<img src="../'.$row[0].'" alt="img" class="card-img-top">';
                                    echo '<div class="men-cart-pro">';
                                        echo '<div class="inner-men-cart-pro">';
                                           echo '<a href="womens.html" class="link-product-add-cart">Quick View</a>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                
                                echo '<div class="card-body  py-3 px-2">';
                                    echo '<h5 class="card-title text-capitalize">'.$r['pName'].'</h5>';
                                    echo'<div class="card-text d-flex justify-content-between">';
                                        echo'<p class="text-dark font-weight-bold">Rs. '.$r['pRate'].'</p>';
                                        echo '<p class="line-through">'.($r['pRate']+100).'</p>';
                                    echo '</div>';
                                echo '</div>';
                                
                                
                            echo '</div>';
                           
                        echo '</div>';
                        
                        
                        }?>
                        
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="girl" aria-labelledby="girl-tab">
                    <div id="owl-demo2" class="owl-carousel text-center">
                        <?php
                      include '../connection.php';
                      $q="select * from tblproduct where subid in(select subid from tblsubcategory where catid in(select catid from tblcategory where category='Scarfs')) and pStatus='In stock' order by pId desc limit 4";
                        $s= mysqli_query($conn, $q);
                        while($r= mysqli_fetch_array($s))
                        {
                            $qry="select imgpath from tblimages where pId='".$r['pId']."'";
                            $res=mysqli_query($conn,$qry);    
                            $row=mysqli_fetch_array($res);
                            
                           echo '<div class="item">';
                            echo '<div class="card product-men p-3">';
                                echo'<div class="men-thumb-item">';
                                    echo'<img src="../'.$row[0].'" alt="img" class="card-img-top">';
                                    echo '<div class="men-cart-pro">';
                                        echo '<div class="inner-men-cart-pro">';
                                           
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                
                                echo '<div class="card-body  py-3 px-2">';
                                    echo '<h5 class="card-title text-capitalize">'.$r['pName'].'</h5>';
                                    echo'<div class="card-text d-flex justify-content-between">';
                                        echo'<p class="text-dark font-weight-bold">Rs. '.$r['pRate'].'</p>';
                                        echo '<p class="line-through">'.($r['pRate']+100).'</p>';
                                    echo '</div>';
                                echo '</div>';
                                
                                
                            echo '</div>';
                           
                        echo '</div>';
                        
                        
                        }?>
                        
                    </div>
                </div>

               

            </div>
        </div>
    </section>-->
    <!-- //product tabs -->
    <!-- insta posts -->
   
    <!-- //insta posts -->
    <!-- footer -->
    <footer>
        <div class="footerv2-w3ls">
            
            <div class="container-fluid py-5 footer-copy_w3ls">
                <div class="d-lg-flex justify-content-between">
                    <div class="mt-2 sub-some align-self-lg-center">
                        <h5>Payment Method</h5>
                        <ul class="mt-4">
                            <li class="list-inline-item">
                                <img src="../images/pay2.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="../images/pay5.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="../images/pay3.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="../images/pay7.png" alt="">
                            </li>
                            <li class="list-inline-item">
                                <img src="../images/pay8.png" alt="">
                            </li>
                            <li class="list-inline-item ">
                                <img src="../images/pay9.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="cpy-right align-self-center">
                        <h2 class="agile_btxt">
                            <a href="../index.html">
                                <span>f</span>ashion
                                <span>h</span>ub</a>
                        </h2>
                        <p>© 2018 Fashion Hub. All rights reserved | Design by
                            <a href="http://w3layouts.com" class="text-secondary"> W3layouts.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- sign up Modal -->
   
    <!-- signin Modal -->
    <!-- js -->
<script>
function allLetter(inputtxt)
  {
   var letters = /^[A-Za-z]+$/;
   if(inputtxt.value.match(letters))
     {
      return true;
     }
   else
     {
     alert("message");
     return false;
     }
  }
</script>
    <script src="../js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for show signin and signup modal -->
    <script>
        $(document).ready(function () {
            $("#myModal_btn").modal();
        });
    </script>
    <!-- //script for show signin and signup modal -->
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
    <!-- Banner Responsiveslides -->
    <script src="../js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- Product slider Owl-Carousel-JavaScript -->
    <script src="js/owl.carousel.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: false,
            margin: 10,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                320: {
                    items: 1,
                },
                568: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1050: {
                    items: 4
                }
            }
        });
    </script>
    <!-- //Product slider Owl-Carousel-JavaScript -->
    <!-- cart-js -->
    <script src="../js/minicart.js">
    </script>
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
    <script src="../js/move-top.js"></script>
    <script src="../js/easing.js"></script>
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
    <script src="../js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap.js"></script>
</body>

</html