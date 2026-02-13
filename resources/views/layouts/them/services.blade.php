<!-- Start service Area -->
<section class="service-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 pb-40 header-text text-center">
				<h1 class="pb-10">خدماتنا</h1>
			</div>
		</div>
		<div class="row">
			@foreach($projects as $project)
				<div class="col-lg-3 col-md-6">
					<div class="single-service">
						<img class="img-fluid img-sev" src="{{ asset('storage/' . $project->photo_1) }}" alt="{{ $project->brand_name }}">
						<a href="#" class="d-flex align-items-start">
							<h4>{{ $project->name }}</h4>
						</a>
						<p>
							{{ Str::limit($project->description, 100) }}
						</p>
					</div>
				</div>
			@endforeach
			<div class="col-lg-3 col-md-6">
				<div class="single-service">
					<img class="img-fluid" src="{{ asset('them/img/s2.jpg') }}" alt="">
					<a href="#" class="d-flex align-items-start">
						<h4>تنظيف الاسنان</h4>
					</a>
					<p>
						الحمد لله رب العالمين الرحمن الرحيم مالك يوم الدين اياك نعبده واياك نستعين
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-service">
					<img class="img-fluid" src="{{ asset('them/img/s3.jpg') }}" alt="">
					<a href="#" class="d-flex align-items-start">
						<h4>تنظيف الاسنان</h4>
					</a>
					<p>
						الحمد لله رب العالمين الرحمن الرحيم مالك يوم الدين اياك نعبده واياك نستعين
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-service">
					<img class="img-fluid" src="{{ asset('them/img/s4.jpg') }}" alt="">
					<a href="#" class="d-flex align-items-start">
						<h4>تنظيف الاسنان</h4>
					</a>
					<p>
						الحمد لله رب العالمين الرحمن الرحيم مالك يوم الدين اياك نعبده واياك نستعين
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-service">
					<img class="img-fluid" src="{{ asset('them/img/s4.jpg') }}" alt="">
					<a href="#" class="d-flex align-items-start">
						<h4>تنظيف الاسنان</h4>
					</a>
					<p>
						الحمد لله رب العالمين الرحمن الرحيم مالك يوم الدين اياك نعبده واياك نستعين
					</p>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">رعاية طبية متكاملة</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="single-feature d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-rocket"></span>
					</div>
					<div class="details text-al mr-4">
						<h4>رعاية طارئة 24 ساعة</h4>
						<p>
							نستقبل حالات الطوارئ ونعمل على تخفيف الألم بسرعة وكفاءة.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-feature d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-bug"></span>
					</div>
					<div class="details text-al mr-4">
						<h4>علاج وحشو الأسنان</h4>
						<p>
							علاج التسوس وحشو الأسنان بمواد عالية الجودة للحفاظ على صحة أسنانك لأطول فترة ممكنة.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-feature d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-paw"></span>
					</div>
					<div class="details text-al mr-4">
						<h4>تجميل الأسنان</h4>
						<p>
							ابتسامة أجمل مع خدمات التبييض، الفينير، وتصحيح شكل الأسنان بأحدث الأساليب.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-feature d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-users"></span>
					</div>
					<div class="details text-al mr-4">
						<h4>علاج أسنان الأطفال</h4>
						<p>
							رعاية خاصة ولطيفة للأطفال لضمان تجربة مريحة وآمنة داخل العيادة.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-feature d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-heart-pulse"></span>
					</div>
					<div class="details text-al mr-4">
						<h4>استشارة متخصصة</h4>
						<p>
							نقدم فحصًا دقيقًا وتشخيصًا شاملًا باستخدام أحدث التقنيات لضمان خطة علاج مناسبة لحالتك.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-feature d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-chart-bars"></span>
					</div>
					<div class="details text-al mr-4">
						<h4>أشعة الأسنان</h4>
						<p>
							نوفر خدمات الأشعة الرقمية بأعلى دقة لتشخيص المشكلات بسرعة وأمان.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End service Area -->