<!DOCTYPE html>
<html lang="ar" class="no-js" dir="rtl">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Dentist</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('them/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('them/css/main.css') }}">
</head>

<body>
	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-12 ">
						<a href="index.html" class="nn"><img class="log" src="{{ asset('them/img/log.jpg') }}"></a>
					</div>

					<!-- <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
				  				<a class="btns" href="mailto:support@colorlib.com">support@colorlib.com</a>		
				  				<a class="icons" href="tel:+953 012 3654 896">
				  					<span class="lnr lnr-phone-handset"></span>
				  				</a>
				  				<a class="icons" href="mailto:support@colorlib.com">
				  					<span class="lnr lnr-envelope"></span>
				  				</a>		
				  			</div> -->
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="#">اتصل بي</a></li>
						<li><a href="#">ساعات العمل </a></li>
						<li><a href="#">خدماتي</a></li>
						<li><a href="#">حول</a></li>
						<li class="menu-active"><a href="#">الصفحة الرئيسية</a></li>
					</ul>
				</nav>
				<div class="menu-social-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</header><!-- #header -->





	@include('layouts.them.home');
	@include('layouts.them.hourwork');
	@include('layouts.them.services');
	@include('layouts.them.about');
	@include('layouts.them.number');
	@include('layouts.them.hagz');
	@include('layouts.them.testomial');





	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2  col-md-6">
					<div class="single-footer-widget">
						<h6>Top Products</h6>
						<ul class="footer-nav">
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Contact Us</h6>
						<p>
							56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205
						</p>
						<h3>012-6532-568-9746</h3>
						<h3>012-6532-568-97468</h3>
					</div>
				</div>
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget newsletter">
						<h6>Newsletter</h6>
						<p>You can trust us. we only send promo offers, not a single spam.</p>
						<div id="mc_embed_signup">
							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">

								<div class="form-group row" style="width: 100%">
									<div class="col-lg-8 col-md-12">
										<input name="EMAIL" placeholder="Your Email Address"
											onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Your Email Address '" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
												type="text">
										</div>
									</div>

									<div class="col-lg-4 col-md-12">
										<button class="nw-btn primary-btn">Subscribe<span
												class="lnr lnr-arrow-right"></span></button>
									</div>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between">
				<div class="col-lg-12 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{ asset('them/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="{{ asset('them/js/vendor/bootstrap.min.js') }}"></script>
	<script type="{{ asset('them/text/javascript') }}"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{ asset('them/js/easing.min.js') }}"></script>
	<script src="{{ asset('them/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('them/js/superfish.min.js') }}"></script>
	<script src="{{ asset('them/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('them/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('them/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('them/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('them/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('them/js/mail-script.js') }}"></script>
	<script src="{{ asset('them/js/main.js') }}"></script>
</body>

</html>