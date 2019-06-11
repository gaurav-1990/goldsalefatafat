<?php
define("BASEURL", "http://".$_SERVER['SERVER_NAME'] . ":8080/goldsalefatafat/");
//define("BASEURL", "http://goldsalefatafat.in/");
?>
<!doctype html>
<html class="" lang="zxx">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Apollo Impex</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- all css here -->
        <link rel="stylesheet" href="<?=BASEURL?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/animate.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/ionicons.min.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/meanmenu.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/magnific-popup.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/et-line-icon.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/Pe-icon-7-stroke.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/icofont.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/style.css">
        <link rel="stylesheet" href="<?=BASEURL?>css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <script src="<?=BASEURL?>js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        

        <!-- Add your site or application content here -->
		<!-- header-start -->
		<header>
			<div class="header-top-area header-top header-2">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-5">
							<div class="logo">
								<a href="<?=BASEURL?>index.php"><img src="<?=BASEURL?>img/logo/logo.png" alt="" /></a>
							</div>
						</div>
                                            <div class="col-md-5 col-sm-12 col-xs-7 ">
                                                
                                             <div class="for-selling">
                                                     <h3>Coming soon :<span class="blink_me">New Product</span> </h3>
                                                </div>
                                                
                                           <!--     <div class="for-selling">
                                                     <h3>Selling Price : <cut><i class="fa fa-inr" aria-hidden="true"></i>6,350</cut><span class="blink_me"> <i class="fa fa-inr" aria-hidden="true"></i>6,300</span> </h3>
                                                </div> -->
                                               
                                                
<!--                        <div class="search-center">
                            <input type="text" placeholder="Search  your favourite beauty products... ">
                            <button><i class="fa fa-search"></i></button>
                        </div>-->
                    </div>
                                            <div class="col-md-4 head-right">
                                                <div class=" calling">
                                                    <a href="tel:011-43086284"><i class="fa fa-phone" aria-hidden="true"></i> Call For Purchase: 011-43086284 </a>
                                                </div>
<!--                                                <div class=" quote">
                                                    <button data-toggle="modal" data-target="#basicExampleModal"><i class="fa fa-paper-plane" aria-hidden="true" ></i> Get Quote</button>
                                                </div>-->
                                            </div>          
<!--						<div class="col-md-3 col-xs-8 top-cart ">
							<div class="current current-icon floatright">
                                                           <a href="#">Login/Signup</a>
                                                        

								<ul class="current-menu">
									<li><a href="signup.php">Signup</a></li>
									
									
									<li><a href="login.php">Log In</a></li>
									<li><a href="login.php">Orders</a></li>
									<li><a href="login.php">Go to cart</a></li>
									<li><a href="login.php">My business Associate</a></li>
									<li><a href="login.php">Returns</a></li>
									<li><a href="login.php">My reward point</a></li>
									<li><a href="login.php">Today deals</a></li>
									<li><a href="login.php">Settings</a></li>
									
								</ul>
							</div>
							<div class="cart-search cart-search-icon floatright">
								<div class="shopping-cart cart-icon">
									<a href="cart.html"><span>2</span>My Cart</a>
                                                                        
									<ul>
										<li>
											<div class="cart-img">
												<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
											</div>
											<div class="cart-content">
												<h3><a href="#"> 1 X Faded...</a> </h3>
												<span><b>S, Orange</b></span>
												<span class="cart-price"><i class="fa fa-inr" aria-hidden="true"></i> 16.84</span>
											</div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>
										<li>
											<div class="cart-img">
												<a href="#"><img src="img/cart/1.jpg" alt="" /></a>
											</div>
											<div class="cart-content">
												<h3><a href="#"> 1 X Faded...</a> </h3>
												<span><b>S, Orange</b></span>
												<span class="cart-price"><i class="fa fa-inr" aria-hidden="true"></i> 16.84</span>
											</div>
											<div class="cart-del">
												<i class="fa fa-times-circle"></i>
											</div>
										</li>
										<li>
											<div class="shipping"> 
												<span class="f-left">Shipping </span>
												<span class="f-right cart-price"> <i class="fa fa-inr" aria-hidden="true"></i>7.00</span>  
											</div>
											<hr class="shipping-border" />
											<div class="shipping">
												<span class="f-left"> Total </span>
												<span class="f-right cart-price"><i class="fa fa-inr" aria-hidden="true"></i>692.00</span> 
											</div>
										</li>
										<li class="checkout m-0"><a href="#">checkout <i class="fa fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="header-search header-icon floatright">
								<i class="pe-7s-search"></i>
								<div class="icon-form">
									<form action="#">
										<input type="text" placeholder="search" />
										<button class="search">search</button>
									</form>
								</div>
							</div>
							
														
						</div>-->
					</div>
				</div>
			</div>
                    <div class="menu-area ">

                <nav class="navbar navbar-inverse">

                    <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>

                    </div>
                    
                    <div class="collapse navbar-collapse" id="myNavbar">
                      
                        <ul class="nav navbar-nav">

<!--                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Rings <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">T Shirt</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </li>-->
<!--                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Earrings <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Top</a></li>
                                    <li><a href="#">Lehenga</a></li>
                                    <li><a href="#">Kurti</a></li>
                                    
                                    
                                   
                                </ul>
                            </li>-->
                            <li><a href="#">Home </a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Offers</a></li>
                            <li><a href="#">Designs </a></li>
                            <li><a href="#">Contact Us</a></li>



<!--                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Collections <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Watch</a></li>
                                    <li><a href="#">Bags</a></li>
                                   
                                </ul>
                            </li>-->


                        </ul>
                      
                    </div>
                </div>
                </nav>

            </div>
		</header>