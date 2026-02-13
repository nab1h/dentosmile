<!-- Start open-hour Area -->
<section class="open-hour-area" id="hour">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h1>ساعات العمل</h1>
                <p>
                    يسعدنا استقبالكم في المواعيد التالية
                </p>
                <div class="date-list d-flex flex-row justify-content-center">
                    <ul class="colm-1">
                        @foreach($workingHours as $hour)
                            <li>{{ $hour->day_name }}<span>:</span></li>
                        @endforeach
                    </ul>
                    <ul class="colm-1">

                    </ul>
                    <ul class="colm-2 text-al">
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End open-hour Area -->