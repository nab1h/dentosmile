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
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
						<a href="#" class="nn"><img class="log" src="{{ asset('them/img/log.jpg') }}"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="#contact">اتصل بي</a></li>
						<li><a href="#ask">الأسئلة الشائعة</a></li>
						<li><a href="#hour">ساعات العمل </a></li>
						<li><a href="#hagz">حجز</a></li>
						<li><a href="#service">خدمتنا</a></li>
						<li><a href="#about">حول</a></li>
						<li class="menu-active"><a href="#home">الصفحة الرئيسية</a></li>
					</ul>
				</nav>
				<div class="menu-social-icons">
					<a href="{{ $links->where('name', 'facebook')->first()->url ?? '#' }}"><i class="fa fa-facebook"></i></a>
					<a href="{{ $links->where('name', 'twiter')->first()->url ?? '#' }}"><i class="fa fa-twitter"></i></a>
					<a href="{{ $links->where('name', 'linkedin')->first()->url ?? '#' }}"><i class="fa fa-linkedin"></i></a>
					<a href="{{ $links->where('name', 'instagram')->first()->url ?? '#' }}"><i class="fa fa-instagram"></i></a>
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
	@include('layouts.them.ask');




	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2  col-md-6 text-al">
					<div class="single-footer-widget">
						<h6><a href="#home">الصفحة الرئيسية</a></h6>
						<ul class="footer-nav">
							<li><a href="#service">خدمتنا</a></li>
							<li><a href="#hagz">حجز</a></li>
							<li><a href="#about">حول</a></li>
							<li><a href="#ask">الأسئلة الشائعة</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-al">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">اتصل بنا</h6>
						<p>
							{{$settings['home']}}
						</p>
						<h3>{{ $links->where('name', 'phone')->first()->url ?? '#' }}</h3>
						<h3>{{ $links->where('name', 'whats')->first()->url ?? '#' }}</h3>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 text-al" id="contact">
					<div class="single-footer-widget newsletter">
						<h6>رأيك يهمنا</h6>
						<p>نحن نؤمن بأن كل مريض هو فرد من عائلة DentoSmile. رأيك يساعدنا على تقديم رعاية تليق بابتسامتك.</p>
						<div class="d-flex flex-column">
							<input type="text" id="contactName" class="transparent-blue-input mb-2 text-white" placeholder="الاسم الكريم" style="background: none !important; border:1px solid #00FFFF; border-radius:10px !important;">
						
							<textarea id="contactMessage" rows="3" class="transparent-blue-input mb-3 text-white" placeholder="اكتب رأيك هنا..." style="background: none !important; border:1px solid #00FFFF; border-radius:10px !important;"></textarea>
						
							<button type="button" id="submitAjax" class="primary-btn header-btn text-uppercase mt-10">
								إرسال الآن
							</button>
						</div>
					</div>
				</div>
			</div>
			<script>
				document.getElementById('submitAjax').addEventListener('click', function (e) {
					e.preventDefault();
					const name = document.getElementById('contactName').value;
					const message = document.getElementById('contactMessage').value;
					console.log("Sending Data:", { name, message });
					fetch("{{ route('contact.send') }}", {
						method: "POST",
						headers: {
							"Content-Type": "application/json",
							"X-CSRF-TOKEN": "{{ csrf_token() }}",
							"Accept": "application/json"
						},
						body: JSON.stringify({
							name: name,
							message: message,
							job_title: "Client"
						})
					})
						.then(async response => {
							const data = await response.json();
							if (!response.ok) {
								console.error("Server Error:", data);
								alert("خطأ في البيانات: " + JSON.stringify(data.errors));
								return;
							}
							alert("شكراً لك! تم استلام رأيك بنجاح.");
							document.getElementById('contactName').value = '';
							document.getElementById('contactMessage').value = '';
						})
						.catch(error => {
							console.error("Fetch Error:", error);
							alert("حدث خطأ في الاتصال بالسيرفر");
						});
				});
			</script>

			<div class="row footer-bottom d-flex justify-content-between">
				<div class="col-lg-12 col-sm-12 footer-social">
					<a href="{{ $links->where('name', 'facebook')->first()->url ?? '#' }}"><i class="fa fa-facebook"></i></a>
					<a href="{{ $links->where('name', 'twiter')->first()->url ?? '#' }}"><i class="fa fa-twitter"></i></a>
					<a href="{{ $links->where('name', 'linkedin')->first()->url ?? '#' }}"><i class="fa fa-linkedin"></i></a>
					<a href="{{ $links->where('name', 'instagram')->first()->url ?? '#' }}"><i class="fa fa-instagram"></i></a>
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