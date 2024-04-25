<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>"/>
 		<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/slick-theme.css')); ?>"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/nouislider.min.css')); ?>"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"/>
		 <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>"/>
 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->


					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

				<div class="forms">
						
						<ul class="tab-group">
							<li class="tab"><a href="#signup">Sign Up</a></li>
							<li class="tab active"><a href="#login">Log In</a></li>
						</ul>
						
						<div class="tab-content">
									
						<div id="login">   
							<h1>Welcome Back!</h1>
							
							<form method="POST" action="<?php echo e(route('login')); ?>">
								<?php echo csrf_field(); ?>
								<div class="field-wrap">
								<label>
								Email Address<span class="req">*</span>
								</label>
								<input class="inputs<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" type="email"required autocomplete="off"/>
								
							</div>
							
							<div class="field-wrap">
								<label>
								Password<span class="req">*</span>
								</label>
								<input class="inputs <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" type="password"required autocomplete="off"/>
								
							</div>
							
							<p class="forgot"><a href="#">Forgot Password?</a></p>
							
							<button class="button button-block"><?php echo e(__('Login')); ?></button>
							
							</form>

							</div>


							<div id="signup">   
							<h1>Sign Up</h1>
							
							<form action="/" method="post">
							
							
								<div class="field-wrap">
								<label>
									 Name<span class="req">*</span>
								</label>
								<input class="inputs" type="text" required autocomplete="off" />
								</div>
							
								<div class="field-wrap">
								<label>
									 Phone<span class="req">*</span>
								</label>
								<input class="inputs" type="text" required autocomplete="off" />
								</div>

							<div class="field-wrap">
								<label>
								Email Address<span class="req">*</span>
								</label>
								<input class="inputs" type="email"required autocomplete="off"/>
							</div>
							
							<div class="field-wrap">
								<label>
								Set A Password<span class="req">*</span>
								</label>
								<input class="inputs" type="password"required autocomplete="off"/>
							</div>
							<div class="field-wrap">
								<label>
								Enter Admin Password<span class="req">*</span>
								</label>
								<input class="inputs" type="password"required autocomplete="off"/>
							</div>
							<button type="submit" class="button button-block"/>Get Started</button>
							
							</form>

							</div>
					
							
						</div><!-- tab-content -->
						
					</div> <!-- /form -->



				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Web app is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by IT Core Apps
							
							</span>


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/nouislider.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/jquery.zoom.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/main.js')); ?>"></script>
		<script src="<?php echo e(asset('js/login.js')); ?>"></script>
	</body>
</html>
<?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/auth/login.blade.php ENDPATH**/ ?>