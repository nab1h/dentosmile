<!-- Start appoinment Area -->
<section class="appoinment-area section-gap relative" id="hagz" >
    <div class="container">

        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 no-padding appoinment-right text-al">
                <h1 class="text-white">
                    إحجز كشفك
                </h1>
                @if(session('success_message'))
                    <div class="alert shadow-sm d-flex align-items-center" role="alert" dir="rtl"
                        style="background-color: #e3fcfd; border-right: 5px solid #00d4ff; border-radius: 10px; padding: 20px; text-align: right; margin-bottom: 20px;">
                        <i class="fa fa-check-circle ms-3" style="color: #00d4ff; font-size: 24px;"></i>
                        <div>
                            <h6 class="mb-0 fw-bold" style="color: #007bff;">تم بنجاح!</h6>
                            <span>{{ session('success_message') }}</span>
                        </div>
                    </div>
                @endif
                <form class="appoinment-form" action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                            <input name="patient-name" placeholder="أسمك" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Patient Name'" class="form-control mt-20" required=""
                                type="text">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="phone" placeholder="رقم الموبيل" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="dob" placeholder="تاريخ الميلاد" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Date of birth'" class="form-control mt-20" required=""
                                type="text" id="datepicker">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <input name="appoinment-date" placeholder="تاريخ الكشف" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Appoinment date'" class="form-control mt-20" required=""
                                type="text" id="datepicker2">
                        </div>
                        <div class="col-lg-12 flex-column">
                            <textarea rows="5" class="form-control mt-20" name="message" placeholder="رسالتك"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                required=""></textarea>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-start send-btn">
                            <button class="primary-btn primary mt-20 text-al">تأكيد الحجز</button>
                        </div>
                        <div class="alert-msg"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if(session('success_message'))
        <script>
            Swal.fire({
                title: 'شكراً لك!',
                text: "{{ session('success_message') }}",
                icon: 'success',
                confirmButtonText: 'حسناً',
                confirmButtonColor: '#007bff'
            });
        </script>
    @endif
</section>
<!-- End appoinment Area -->


