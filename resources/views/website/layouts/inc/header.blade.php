<header id="organio-header" class="organio-header-section header-style-four">
	<div class="header-top">
		<div class="container">
			<div class="header-top-content d-flex justify-content-between align-items-center">
				<div class="or-header-slug ul-li">
					<ul>
						<li><i class="far fa-phone-alt"></i>{{ $website_setting->phone }}</li>
						<li><i class="fal fa-map-marker-alt"></i>{{ $website_setting->address }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="organio-main-header-wrapper">
		<div class="container">
			<div class="or-header-main-menu-content d-flex justify-content-between align-items-center">
				<div class="site-logo">
					<a href="{{ route('home') }}"><img src="{{ asset($website_setting->website_logo) }}" height="143px" width="57px" alt="logo"></a>
				</div>
				<div class="or-header-main-navigation-btn d-flex">
					<nav class="main-navigation-area clearfix ul-li">
						<ul class="menu-navigation">
							<li class="dropdown">
								<a href="{{ route('home') }}"><span class="menu-line"></span>Home</a>
							</li>
							<li><a href="{{ route('about.page') }}"><span class="menu-line"></span>About Us</a></li>


							<li class="dropdown">
								<a href="{{ route('product.page') }}">
									<span class="menu-line"></span>Products
								</a>

								<ul class="dropdown-menu clearfix">
									@foreach($categories as $category)
									<li>
										<a href="{{ route('product.category', $category->category_slug) }}">
											{{ $category->category_name }}
										</a>
									</li>
									@endforeach
								</ul>
							</li>

							<li class="dropdown">
								<a href="#"><span class="menu-line"></span>Gallery</a>
								<ul class="dropdown-menu clearfix">
									<li><a href="{{ route('image-gallery') }}">Images</a></li>
									<li><a href="{{ route('video-gallery') }}">Videos</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="{{ route('csr') }}"><span class="menu-line"></span>CSR</a>
							</li>
							<li class="dropdown">
								<a href="{{ route('career') }}"><span class="menu-line"></span>Career</a>
							</li>
							<li class="dropdown">
								<a href="{{ route('contact.page') }}"><span class="menu-line"></span>Contact</a>
							</li>
							<li class="dropdown">
								<a href="#"><span class="menu-line"></span>Others</a>
								<ul class="dropdown-menu clearfix">
									<li><a href="{{ route('companyProfile') }}">Company Profile</a></li>
									<li><a href="{{ route('topManagement') }}">Top management</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="mobile_menu position-relative">
				<div class="mobile_menu_button open_mobile_menu">
					<i class="fal fa-bars"></i>
				</div>
				<div class="mobile_menu_wrap">
					<div class="mobile_menu_overlay open_mobile_menu"></div>
					<div class="mobile_menu_content">
						<div class="mobile_menu_close open_mobile_menu">
							<i class="fal fa-times"></i>
						</div>
						<div class="m-brand-logo">
							<a href="%21.html#"><img src="assets/img/logo/logo1.png" alt=""></a>
						</div>
						<div class="mobile-search-wrapper position-relative">
							<form action="#">
								<input type="text" placeholder="Search Here...">
								<button><i class="fas fa-search"></i></button>
							</form>
						</div>
						<nav class="mobile-main-navigation  clearfix ul-li">
							<ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
								<li class="dropdown">
									<a href="{{ route('home') }}">Home</a>
								</li>
								<li><a target="" href="{{ route('about.page') }}">About</a></li>
								<li class="dropdown">
								<a href="{{ route('product.page') }}">
									<span class="menu-line"></span>Products
								</a>

								<ul class="dropdown-menu clearfix">
									@foreach($categories as $category)
									<li>
										<a href="{{ route('product.category', $category->category_slug) }}">
											{{ $category->category_name }}
										</a>
									</li>
									@endforeach
								</ul>
							</li>
								<li class="dropdown">
									<a target="" href="#">Gallery</a>
									<ul class="dropdown-menu clearfix">
										<li><a target="" href="{{ route('image-gallery') }}">Images</a></li>
										<li><a target="" href="{{ route('video-gallery') }}">Videos</a></li>

									</ul>
								</li>
								<li class="dropdown">
									<a target="" href="{{ route('career') }}">Career</a>
								</li>
								<li class="dropdown">
									<a target="" href="{{ route('contact.page') }}">Contact</a>
								</li>
								<li class="">
									<a target="" href="{{ route('csr') }}">CSR</a>
								</li>
								<li class="dropdown">
									<a target="" href="#">Others</a>
									<ul class="dropdown-menu clearfix">
										<li><a target="" href="{{ route('companyProfile') }}">Company profile</a></li>
										<li><a target="" href="{{ route('topManagement') }}">Top management</a></li>

									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /Mobile-Menu -->
			</div>
		</div>
	</div>
</header>