<section id="numbers" class="s-numbers">
    <div class="container">
        <div class="row d-flex justify-content-center mt-50">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10" style="color: #0056b3;">رعاية طبية متكاملة</h1>
				    <p class="text-muted">رؤيتنا هي تقديم رعاية طبية استثنائية تجمع بين الخبرة الطويلة وأحدث التقنيات لضمان أفضل النتائج لمرضانا.</p>

                </div>
            </div>
        </div>
        <div class="row counter-items mb-50">
            @forelse ($statistics as $stat)
                <div class="col-lg-6 col-md-12 counter-items__item d-flex flex-column justify-content-start gap-4">
                    <div class="num my-3">
                        {{ $stat->value }}
                        <span>+</span>
                    </div>
                    <h5 class="text-al mb-2">{{ $stat->title }}</h5>
                    <p class="text-al">
                        {{ Str::limit($stat->description, 505) }}
                    </p>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No statistics found.</td>
                </tr>
            @endforelse
        </div> <!-- end counter-items -->
    </div>
</section> <!-- end s-numbers -->