<!-- Start open-hour Area -->
<section class="open-hour-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h1>ساعات العمل</h1>
                <p>
                    نحن جاهزين خلال 24 ساعه لخدمتك
                </p>
                <!-- <a class="open-btn" href="#"> <span class="circle"></span>We are open Now</a> -->
                <div class="date-list d-flex flex-row justify-content-center">
                    {{-- العمود الأول: المواعيد --}}
                    <ul class="colm-2">
                        @foreach($workingHours as $hour)
                            <li>
                                @if($hour->is_closed)
                                    مغلق
                                @else
                                    {{ $hour->hours_range }}
                                @endif
                            </li>
                        @endforeach
                    </ul>
                
                    {{-- العمود الثاني: الأيام --}}
                    <ul class="colm-1">
                        @foreach($workingHours as $hour)
                            <li><span>:</span> {{ $hour->day_name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End open-hour Area -->