<!-- Start testomial Area -->
<section class="testomial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10" style="color: #0056b3;">ماذا يقول عملاؤنا؟</h1>
                    <p>نحن نفخر بتقديم أفضل خدمة طبية نالت رضا وثقة المئات</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial-carusel">
                @forelse ($testimonials->where('is_favorite', 1) as $testimonial)
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        {{ Str::limit($testimonial->message, 500) }}
                    </p>
                    <h4>{{ $testimonial->name }}</h4>
                </div>
                @empty
                    <div class="swiper-slide text-center">
                        <p>No featured testimonials found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>







    <a href="tel:{{ $links->where('name', 'phone')->first()->url ?? '' }}" class="call-circle" target="_blank">
        <i class="fa fa-phone"></i>
    </a>

    <a href="https://wa.me/{{ $links->where('name', 'whats')->first()->url ?? '' }}" class="whatsapp-circle" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
</section>
<!-- End testomial Area -->