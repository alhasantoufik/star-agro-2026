@extends('website.home')
@section('title', 'Top Management | Organio')
@section('content')
<style>
	.or-team-grid {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 30px;
	}

	/* Tablet */
	@media (max-width: 991px) {
		.or-team-grid {
			grid-template-columns: repeat(2, 1fr);
		}
	}

	/* Mobile */
	@media (max-width: 575px) {
		.or-team-grid {
			grid-template-columns: repeat(1, 1fr);
		}
	}
</style>

<!-- Start of Breadcrumb section
	============================================= -->
<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/bg-page-title.jpg">
	<div class="background_overlay"></div>
	<div class="container">
		<div class="or-breadcrumbs-content text-center">
			<div class="page-title headline">
				<h1>Top Management</h1>
			</div>
			<div class="or-breadcrumbs-items ul-li">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Top Management</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of team section
	============================================= -->
<section id="our-team" class="or-team-section">
	<div class="container">
		<div class="or-section-title headline pera-content text-center middle-align">
			<span class="sub-title">Team member </span>
			<h2 class="case-animate-time">We have awesome team member to support.</h2>
		</div>
		<div class="or-team-content">
			<div class="or-team-content-area">
				<div class="or-team-grid">

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

@endsection