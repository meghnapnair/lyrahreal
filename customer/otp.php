<?php
session_start();
include '../connection.php';
$email=$_SESSION['email'];
$otp=$_GET['otp'];
?>
<html>
    <head>
        <link href="web/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="web/css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="web/css/flexslider.css" type="text/css" rel="stylesheet" media="all">
    <link href="web/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="web/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
    <script>function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  </script>
    </head>
    
<body>
<form method="POST">
	
	<!--Payment-->
    <section class="payment_w3ls py-5">
        <div class="container">
            <div class="privacy about">
                <h5 class="head_agileinfo text-center text-capitalize pb-5">
                    <span>O</span>tp Details</h5>
               
                <div style=" width: 750px;" class="tab4">
                                <div class="pay_info">
                                    <div class="row">
                                       
                                                                                   

<div style="margin-left: 380px;" class="col-md-3">
                                            <form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                                <section class="creditly-wrapper payf_wrapper">
                                                    <div class="credit-card-wrapper">
                                                        <div class="first-row form-group">
                                                           
                                                            
                                                                <div class="fpay_card_number_grid_right">
                                                                    <div class="controls">
                                                                        <label class="control-label">OTP</label>
                                                                        <input class="form-control" pattern="[0-9]{4}" required title="enter otp" type="password" name="txtotp">
                                                                    </div>
                                                                </div>
                                                                <div class="clear"> </div>
                                                            </div>
                                                            
                                                                <!-- <label class="control-label">Valid Thru</label>
                                                                <input class="expiration-month-and-year form-control" required type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                             -->
                                                                                                                       
                                                               
                                                        </div>
                                                    <input class="btn btn-primary submit" type="submit" name="btnSubmit" value="Submit">
                                                    </div>
                                                </section>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//tabs-->
            </div>

        </div>
	</section>
	<script src="web/js/jquery-2.2.3.min.js"></script>
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
    <script src="web/js/minicart.js"></script>
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
    <!-- easy-responsive-tabs -->
    <script src="web/js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //easy-responsive-tabs -->

    <!-- credit-card -->
    <script src="web/js/creditly.js"></script>
    <link rel="stylesheet" href="web/css/creditly.css" type="text/css" media="all" />

    <script>
        $(function () {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function (e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });
    </script>
    <!-- //credit-card -->
    <!-- start-smooth-scrolling -->
    <script src="web/js/move-top.js"></script>
    <script src="web/js/easing.js"></script>
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
    <script src="web/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="web/js/bootstrap.js"></script>
    <!-- //payment -->
    </body>
    </html>
    <?php
    if(isset($_REQUEST['btnSubmit']))
    {
              $o=$_POST['txtotp'];
              if($o==$otp)
               
                echo '<script>location.href="orders.php"</script>';
              else
                  echo '<script>alert("Wrong OTP");</script>';
        
    }
    ?>