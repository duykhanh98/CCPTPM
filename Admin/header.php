<?php 
    ob_start();
    session_start();
    if (isset ($_GET['ac']) && $_GET['ac'] == 'dangxuat')
    {
        session_destroy();
        header('location:index.php');
    }
 ?>


 <!DOCTYPE html>
 <html lang="en">
<head>
<title>Mua bán quần áo online</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
    <script src="js/main.js"></script>
<!--search jQuery-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  <!--start-rate-->
<script src="js/jstarbox.js"></script>
    <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                    starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                    } 
                })
            });
        });
        </script>
<!--//End-rate-->
</head>
<body>
<!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                     <div class="top-left">
                        <a href="#">Hotline<i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
                    </div>
                    <div class="top-right">
                    <ul>
                        <li><a href="checkout.html">Checkout</a></li>
                        <?php
                            if(isset($_SESSION['dangnhap'])){
                         ?>
                             <li><a href="#">HI ! : <?php echo $_SESSION['dangnhap'] ?></a></li> /
                             <li><a href="index.php?ac=dangxuat">Đăng xuất</a></li>
                         <?php
                            }else{ 
                          ?>
                        <li><a href="login1.php">Đăng nhập</a></li>
                        <li><a href="registered.php">Đăng ký</a></li>
                        <?php
                            }
                         ?>
                    </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="heder-bottom">
                <div class="container">
                    <div class="logo-nav">
                        <div class="logo-nav-left">
                            <h1><a href="index.php">New Shop <span>Shop anywhere</span></a></h1>
                        </div>
                        <div class="logo-nav-left1">
                            <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> 
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php" class="act">Trang chủ</a></li>   
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nữ<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu1</h6>
                                                        <li><a href="products.html">Clothing</a></li>
                                                        <li><a href="products.html">Wallets</a></li>
                                                        <li><a href="products.html">Shoes</a></li>
                                                        <li><a href="products.html">Watches</a></li>
                                                        <li><a href="products.html"> Underwear </a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu2</h6>
                                                        <li><a href="products.html">Sunglasses</a></li>
                                                        <li><a href="products.html">Wallets,Bags</a></li>
                                                        <li><a href="products.html">Footwear</a></li>
                                                        <li><a href="products.html">Watches</a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                        <li><a href="products.html">Jewellery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                        <a href="products.html"><img src="images/woo.jpg" alt=" "/></a>
                                                </div> 
                                                <div class="col-sm-3  multi-gd-img">
                                                        <a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nam<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu1</h6>
                                                        <li><a href="products.html">Clothing</a></li>
                                                        <li><a href="products.html">Wallets</a></li>
                                                        <li><a href="products.html">Shoes</a></li>
                                                        <li><a href="products.html">Watches</a></li>
                                                        <li><a href="products.html"> Underwear </a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Submenu2</h6>
                                                        <li><a href="products.html">Sunglasses</a></li>
                                                        <li><a href="products.html">Wallets,Bags</a></li>
                                                        <li><a href="products.html">Footwear</a></li>
                                                        <li><a href="products.html">Watches</a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                        <li><a href="products.html">Jewellery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                        <a href="products1.html"><img src="images/woo3.jpg" alt=" "/></a>
                                                </div> 
                                                <div class="col-sm-3  multi-gd-img">
                                                        <a href="products1.html"><img src="images/woo4.jpg" alt=" "/></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li><a href="codes.html">Short Codes</a></li>
                                    <li><a href="mail.html">Email</a></li>
                                </ul>
                            </div>
                            </nav>
                        </div>
                        <div class="logo-nav-right">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul> <!-- cd-header-buttons -->
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Nhập sản phẩm cần tìm...">
                                </form>
                            </div>  
                        </div>
                        <div class="header-right2">
                            <div class="cart box_1">
                                <a href="checkout.html">
                                    <h3> <div class="total">
                                        <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                        <img src="images/bag.png" alt="" />
                                    </h3>
                                </a>
                                <p><a href="javascript:;" class="simpleCart_empty">Giỏ hàng trống</a></p>
                                <div class="clearfix"> </div>
                            </div>  
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header-->