<?php
include '../connection.php';


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
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="../css/shop.css" type="text/css" rel="stylesheet" media="all">
    <!-- Owl Stylesheets -->
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
                    <a class="navbar-brand" href="../index.html">LYRAH
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
                            <a class="nav-link  active" href="../index.php">Home
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
<div style="margin:70px 100px 50px 70px; border-style: solid; width: 200px; padding: 10px; border-width: thin; border-radius: 5px; border-color: #C1C1C1;"">
    <form method="POST">
        <h5 style="margin:10px;">Filters</h5>
        <div style="margin:10px">
            Category
            <select name="cat" id="cat" style="width: 160px;">
            <option>---Select---</option>
            <option value="1">Women's clothing</option>
            <option value="2">Accessories</option>
            <option value="3">Scarfs</option>
        </select>
    </div>
        <div style="margin:10px">
            Subcategory
        <select name="subcat" name="subcat" id="subcat" style="width: 160px;">
            <option>---Select---</option>
        </select>
    </div>
    <div style="margin:10px">
        Price range
        <select name="price" style="width: 160px;">
            <option>Select price range</option>
            <option>Below 500</option>
            <option>500-1000</option>
            <option>1000-2000</option>
            <option>2000-3000</option>
            <option>Above 3000</option>
        </select>
    </div>
        <div style="margin: 10px;">
            <input type="submit" class="btn btn-danger" style="width:160px;" value="Apply filter" name="filter">
        </div>
    </form>
</div>
<div style="margin-top: -350px; margin-left: 250px; min-height: 400px;">
    <h1 style="margin:50px;">Our collections</h1>
    <table  style="margin:50px; ">
            
          
        <?php
        if(isset($_POST['filter'])){
            $p=$_POST['price'];
            $cat=$_POST['subcat'];
            $p1=0; $p2=0;
//            echo "hhhhhh".$cat;
            if($p=="Below 500")
                $p1=0; $p2=500;
            if($p=="500-1000")
                $p1=500; $p2=1000;
            if($p=="1000-2000")
                $p1=1000; $p2=2000;
            if($p=="2000-3000")
                $p1=2000; $p2=3000;
            if($p=="Above 3000")
                $p1=3000; $p2=150000;
                        $q="select * from tblproduct where subid='$cat' and (pRate between $p1 and $p2) order by pId desc";
//                        echo $q;
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
                            echo '<td><img src="../'.$row['imgpath'].'" height="300px" width="300px"></td>';
                            echo '<td><h4>'.$pname1.'</h4><br/><b>₹'.$prate1.'+ shipping</b>';
                            echo '<br/><br/><a href="productdetails.php?id='.$pid1.'" >View more...</a></td>';
                  echo '</tr>';
                            
                            
                            
                        }
        }
                   ?> 
        </table>
</div>
<footer>
        <div class="footerv2-w3ls">
            <div class="footer-w3lagile-innerr">
                <!-- footer-top -->
                
                <!-- //footer-top -->
                
            </div>
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
  
    <!-- signin Modal -->
    <!-- js -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    
     $(document).ready(function() {
      $( "#cat" ).change(function () {
      var sid = $("#cat").val();
//      debugger;
      $.ajax({
      url: "getsub.php?id="+sid,
      type:'POST',
      success: function(data) 
      { 
        var dt=$.trim(data);
//        alert(dt);
        $("#subcat").html(dt);
      },error:function(xhr,error)
        {
            alert(error); 
        }
      });
  });
     });
    </script>
      <!-- //insta posts -->

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
   
    <!-- script for password match -->
    <!-- Banner Responsiveslides -->
    <script src="../js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
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
    <script src="../js/owl.carousel.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: false,
            margin: 10,
            autoplay: true,
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
    <!--<script src="../js/SmoothScroll.min.js"></script>-->
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap.js"></script>
</body>

</html>