@extends('website.home')
@section('title', 'Carrer | Organio')
@section('content')

<!-- Start of Breadcrumb section
	============================================= -->
<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/bg-page-title.jpg">
	<div class="background_overlay"></div>
	<div class="container">
		<div class="or-breadcrumbs-content text-center">
			<div class="page-title headline">
				<h1>Carrer</h1>
			</div>
			<div class="or-breadcrumbs-items ul-li">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Carrer</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End of Breadcrumb section
	============================================= -->

<div class="job-listing-area pt-120 pb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-10">
				<section class="featured-job-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="count-job mb-35">
									<span>{{ $jobCount }} Jobs Found</span>
									<div class="select-job-items">
										<span>Sort by: </span>
										<form action="{{ route('career') }}" method="GET">
											<select name="sort" onchange="this.form.submit()">
												<option value="">None</option>
												<option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
												<option value="high_salary" {{ request('sort') == 'high_salary' ? 'selected' : '' }}>High Salary</option>
											</select>
										</form>
									</div>
								</div>
							</div>
						</div>

						@foreach ($career as $car )
						<div class="single-job-items">
							<div class="job-items">
								<div class="company-img">
									<a href="#"><img src="assets/img/logo/logo1.png" alt="Company Logo"></a>
								</div>
								<div class="job-tittle">
									<a href="#">
										<h4>{{ $car->job_title }}</h4>
									</a>
									<ul>
										<li>Star Agro</li>
										<li><i class="fas fa-map-marker-alt"></i>{{ $car->location }}</li>
										<li><i class="fas fa-money-bill-wave"></i>{{ $car->salary }}</li>
									</ul>
								</div>
							</div>
							<div class="items-link">
								<a href="{{ route('careerDetails.show', $car->id) }}">{{ $car->job_type }}</a>
								<span><i class="far fa-clock"></i><span>{{ \Carbon\Carbon::parse($car->created_at)->diffForHumans() }}</span>
								</span>
							</div>
						</div>

						@endforeach

					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<!-- Job List Area End -->

@endsection