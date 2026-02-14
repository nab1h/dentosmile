<!-- Start home-about Area -->
<section class="home-about-area section-gap relative" id="about">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 px-4 home-about-right">
                <h1 class="text-white text-al">
                        عن عيادتنا
                </h1>
                <p class="text-al">
                    {{$settings['about'] ?? ''}}
                </p>
                <div class="row no-gutters">
                    <div class="single-services col text-al">
                        <span class="lnr lnr-map-marker"></span>
                        <a href="#">
                            <h4 class="text-white">عنوانا</h4>
                        </a>
                        <p class="align-items-center">
                            {{ $links->where('name', 'address')->first()->url ?? '' }}
                        </p>
                    </div>
                    <div class="single-services col text-al">
                        <span class="lnr lnr-phone"></span>
                        <a href="#">
                            <h4 class="text-white">اتصل بنا</h4>
                        </a>
                        <p class="align-items-center">
                            {{ $links->where('name', 'phone')->first()->url ?? '' }}
                            <br>
                            {{ $links->where('name', 'whats')->first()->url ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->