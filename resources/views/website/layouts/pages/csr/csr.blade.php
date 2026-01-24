@extends('website.home')
@section('title', 'CSR | Star Agro')
@section('content')

    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/bg-page-title.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="or-breadcrumbs-content text-center">
				<div class="page-title headline"><h1>CSR</h1></div>
				<div class="or-breadcrumbs-items ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>CSR</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->


  <section id="or-why-choose-2" class="or-why-choose-section-2">
    <div class="container">
      <div class="or-why-choose-content-2">
        <div class="row">
          <div class="col-lg-6">
            <div class="or-why-choose-text-wrapper-2">
              <div class="or-section-title-4 headline-2 pera-content">
                <h2>{{ $csr->title }}</h2>
                <p><strong>{!! $csr->sub_title !!}</strong></p>
              </div>
              <div class="or-why-choose-feature-2">
                  <div class="or-why-choose-feature-text pera-content">
                    <p>{!! $csr->description !!}</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="or-why-choose-img-2">
              <img src="{{ asset($csr->image) }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection