<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style-default.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
include('header.php');
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>My <span>Orders </span></h3>
            <!--/w3_short-->
                 <div class="services-breadcrumb">
                        <div class="agile_inner_breadcrumb">

                           <ul class="w3_short">
                                <li><a href="index.php">Home</a><i>|</i></li>
                                <li>My Orders</li>
                            </ul>
                         </div>
                </div>
       <!--//w3_short-->
    </div>
</div>

<div id="customer">
    <div class="container">
        <div class="col-md-3">
            <!-- *** CUSTOMER MENU ***
_________________________________________________________ -->
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Customer section</h3>
                </div>

                <div class="panel-body">

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="customer-orders.html"><i class="fa fa-list"></i> My orders</a>
                        </li>
                        <li>
                            <a href="customer-wishlist.html"><i class="fa fa-heart"></i> My wishlist</a>
                        </li>
                        <li>
                            <a href="customer-account.html"><i class="fa fa-user"></i> My account</a>
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- /.col-md-3 -->

            <!-- *** CUSTOMER MENU END *** -->
        </div>

        <div class="col-md-9" id="customer-orders">
            <div class="box">
                <p class="lead">Your orders on one place.</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                <hr>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th># 1735</th>
                                <td>22/06/2013</td>
                                <td>$ 150.00</td>
                                <td><span class="label label-info">Being prepared</span>
                                </td>
                                <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th># 1735</th>
                                <td>22/06/2013</td>
                                <td>$ 150.00</td>
                                <td><span class="label label-info">Being prepared</span>
                                </td>
                                <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th># 1735</th>
                                <td>22/06/2013</td>
                                <td>$ 150.00</td>
                                <td><span class="label label-success">Received</span>
                                </td>
                                <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th># 1735</th>
                                <td>22/06/2013</td>
                                <td>$ 150.00</td>
                                <td><span class="label label-danger">Cancelled</span>
                                </td>
                                <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                            <tr>
                                <th># 1735</th>
                                <td>22/06/2013</td>
                                <td>$ 150.00</td>
                                <td><span class="label label-warning">On hold</span>
                                </td>
                                <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

<!-- php footer include -->
<?php
include('footer.php');
?>


<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
    <!-- Custom-JavaScript-File-Links --> 
    <!-- cart-js -->
    <script src="js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

    <!-- //cart-js --> 
<!-- script for responsive tabs -->                     
<script src="js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion           
    width: 'auto', //auto or any width like 600px
    fit: true,   // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    activate: function(event) { // Callback function if tab is switched
    var $tab = $(this);
    var $info = $('#tabInfo');
    var $name = $('span', $info);
    $name.text($tab.text());
    $info.show();
    }
    });
    $('#verticalTab').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true
    });
    });
</script>
<!-- //script for responsive tabs -->       
<!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

