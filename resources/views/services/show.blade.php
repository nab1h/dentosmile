<!DOCTYPE html>
<html lang="ar" class="no-js" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}?v=1.1">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}?v=1.1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}?v=1.1" type="image/x-icon">

    <title>{{ $project->name }} | خدمات DentoSmile</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('home') }}" class="nn">
                            <img class="log" src="{{ asset('them/img/log.jpg') }}" alt="DentoSmile">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                    <li><a href="{{ route('home') }}#contact">اتصل بي</a></li>
                    <li><a href="{{ route('home') }}#about">حول</a></li>
                        <li class="menu-has-children menu-active">
                            <a href="{{ route('home') }}#service">خدماتنا</a>
                            <ul>
                                <li><a href="{{ route('home') }}#service">كل الخدمات</a></li>
                                @foreach($projects as $item)
                                    <li><a href="{{ route('services.show', $item) }}">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('articles.index') }}">المقالات</a></li>
                        <li><a href="{{ route('home') }}#hagz">حجز</a></li>
                        <li><a href="{{ route('home') }}#hour">ساعات العمل</a></li>
                        <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                    </ul>
                </nav>
                <div class="menu-social-icons">
                    <a href="{{ optional($links->where('name', 'facebook')->first())->url ?? '#' }}"><i class="fa fa-facebook"></i></a>
                    <a href="{{ optional($links->where('name', 'twiter')->first())->url ?? '#' }}"><i class="fa fa-twitter"></i></a>
                    <a href="{{ optional($links->where('name', 'linkedin')->first())->url ?? '#' }}"><i class="fa fa-linkedin"></i></a>
                    <a href="{{ optional($links->where('name', 'instagram')->first())->url ?? '#' }}"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </header>

    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-lg-10 pb-20 header-text text-center">
                    <h1 class="pb-10" style="color: #0056b3;">{{ $project->name }}</h1>
                    <p class="text-muted mb-0">{{ $project->brand_name }}</p>
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="col-lg-10">
                    <div class="single-service">
                        @if($project->photo_1)
                            <img class="img-fluid mb-3" src="{{ asset('storage/' . $project->photo_1) }}" alt="{{ $project->name }}">
                        @endif

                        @if($project->description)
                            <p class="mb-3">{{ $project->description }}</p>
                        @else
                            <p class="mb-3">تفاصيل الخدمة ستُضاف قريبًا.</p>
                        @endif

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a class="primary-btn text-uppercase" href="{{ route('home') }}#service">رجوع للخدمات</a>
                            <a class="primary-btn text-uppercase" href="{{ route('home') }}#hagz">احجز الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-al">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">اتصل بنا</h6>
                        <p>{{ $settings['home'] ?? '' }}</p>
                        <h3>{{ optional($links->where('name', 'phone')->first())->url ?? '' }}</h3>
                        <h3>{{ optional($links->where('name', 'whats')->first())->url ?? '' }}</h3>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <div class="col-lg-12 col-sm-12 footer-social">
                    <a href="{{ optional($links->where('name', 'facebook')->first())->url ?? '#' }}"><i class="fa fa-facebook"></i></a>
                    <a href="{{ optional($links->where('name', 'twiter')->first())->url ?? '#' }}"><i class="fa fa-twitter"></i></a>
                    <a href="{{ optional($links->where('name', 'linkedin')->first())->url ?? '#' }}"><i class="fa fa-linkedin"></i></a>
                    <a href="{{ optional($links->where('name', 'instagram')->first())->url ?? '#' }}"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('them/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="{{ asset('them/js/vendor/bootstrap.min.js') }}"></script>
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

