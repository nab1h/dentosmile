<!-- Start service Area -->
<section class="service-area section-gap" id="service">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 pb-40 header-text text-center">
				<h1 class="pb-10" style="color: #0056b3;">خدماتنا</h1>
				<p class="text-muted">كل ما تود معرفته عن خدماتنا الطبية</p>
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
			
		</div>
	</div>
</section>
<!-- End service Area -->