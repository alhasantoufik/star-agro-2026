@extends('website.home')
@section('title', 'About Us | Organio')
@section('content')

    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/bg-page-title.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="or-breadcrumbs-content text-center">
				<div class="page-title headline"><h1>About</h1></div>
				<div class="or-breadcrumbs-items ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>About</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->

@include('website.layouts.partials.why-choose-us')

<!-- Start of Funfact section
	============================================= -->
	<section id="or-funfact" class="or-funfact-section position-relative" data-background="assets/img/bg/fn-bg.png">
		<div class="container">
			<div class="or-funfact-content">
				<div class="row">
				@foreach ($achievements as $achiev)
				
				
					<div class="col-lg-3 col-md-6"> 
						<div class="or-funfact-innerbox position-relative d-flex align-items-center">
							<div class="or-funfact-icon">
								<i class="flaticon-rate"></i>
							</div>
							<div class="or-funfact-text headline pera-content">
								<h3> <span class="counter">{{ $achiev->count_number }}</span> <sup>+</sup></h3>
								<p>{{ $achiev->title }}</p>
							</div>
						</div>
					</div>

				@endforeach	

				</div>
			</div>
		</div>
	</section>
<!-- End of Funfact section
	============================================= -->

<!-- Start of team section
	============================================= -->
	<section id="our-team" class="or-team-section">
		<div class="container">
			<div class="or-section-title headline pera-content text-center middle-align">
				<span class="sub-title">Team member </span>
				<h2 class="case-animate-time">We have awesome team member to  support.</h2>
			</div>
			<div class="or-team-content">
				<div class="or-team-content-area">
					<div class="or-team-slider">

					@foreach ($teams as $team)
					
			
						<div class="organio-inner-item">
							<div class="or-team-innerbox">
								<div class="or-team-img position-relative">
									<img src="{{ asset($team->image) }}" alt="">
								</div>
								<div class="or-taam-item-holder">
									<div class="or-team-meta text-center headline position-relative">
										<h3><a href="team-single.html">{{ $team->name }}</a></h3>
										<span>{{ $team->position }}</span>
										<div class="team-item-side-img">
											<img class="side-img" src="assets/img/icon/t-icon2.png" alt="">
											<img class="side-img" src="assets/img/icon/t-icon1.png" alt="">
										</div>
									</div>
									<div class="or-team-text-social pera-content text-center">
										
										
									</div>
								</div>
							</div>
						</div>

					@endforeach

					

					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of team section
	============================================= -->

<!-- Start of About us section
	============================================= -->
	<!-- <section id="or-about-1" class="or-about-section-1">
		<div class="container">
			<div class="or-about-content-1 position-relative">
				<div class="or-about-img-1 position-absolute">
					<img src="assets/img/about/ab1.jpg" alt="">
				</div>
				<div class="or-about-text-area  d-flex justify-content-end">
					<div class="or-about-img-text-wrapper-1">
						<div class="or-section-title headline pera-content">
							<span class="sub-title">About us</span>
							<h2 class="case-animate-time">We believe in working with
							accredited farmers</h2>
							<span class="sub-text">Organic Foods and Café is a family run company founded in
							2004 that runs organic supermarkets</span>
							<p>Organic means growing our food, which is to nourish us, without chemical aids during the growing process such as fertilisers, pesticides, fungcides, herbacides, larbicides etc</p>
						</div>
						<div class="or-about-feature-wrapper d-flex">
							<div class="or-about-feature-innebox headline pera-content d-flex">
								<div class="or-about-feature-icon">
									<img src="assets/img/icon/a-icon1.png" alt="icon">
								</div>
								<div class="or-about-feature-text">
									<h3>Why Organic?</h3>
									<p>We're making room for self care today with plan.</p>
								</div>
							</div>
							<div class="or-about-feature-innebox headline pera-content d-flex">
								<div class="or-about-feature-icon">
									<img src="assets/img/icon/a-icon2.png" alt="icon">
								</div>
								<div class="or-about-feature-text">
									<h3>Speciality Produce</h3>
									<p>New range coming in on a weekly basis veg section.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
<!-- End of About Us section
	============================================= -->	

@endsection