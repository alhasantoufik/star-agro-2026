<footer id="or-foooter-4" class="or-footer-section-4" data-background="{{ asset('assets/img/bg/f-bg4.jpg') }}">
    <div class="or-footer-widget-wrapper-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="or-footer-widget headline pera-content ul-li-block">
                        <div class="or-logo-widget">
                            <a href="#"><img src="{{ asset($website_setting->website_footer_logo) }}" height="160px" width="70px" alt=""></a>
                            <p>{{ $website_setting->footer_content }}</p>
                            <div class="footer-social">
                                <a href="#" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" tabindex="0"><i class="fab fa-twitter"></i></a>
                                <a href="#" tabindex="0"><i class="fab fa-dribbble"></i></a>
                                <a href="#" tabindex="0"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="or-footer-widget headline pera-content ul-li-block">
                        <div class="or-menu-widget">
                            <h2 class="widget-title">Links</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('product.page') }}">Products</a></li>
                                <li><a href="{{ route('about.page') }}">About us</a></li>
                                <li><a href="{{ route('csr') }}">CSR</a></li>
                                <li><a href="{{ route('companyProfile') }}">Company Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="or-footer-widget headline pera-content ul-li-block">
                        <div class="or-contact-widget">
                            <h2 class="widget-title">Official info:</h2>
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i> <span>{{ $website_setting->address }}</span></li>
                                <li><i class="fas fa-envelope"></i> <span>{{ $website_setting->email }}</span></li>
                            </ul>
                            <span class="title">Open Hours: </span>
                            <p>Mon - Sat: 8 am - 5 pm, Sunday: CLOSED</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="or-footer-widget headline pera-content ul-li-block">
                        <div class="or-gallery-widget">
                            <h2 class="widget-title">Photo Gallery</h2>
                            <ul class="zoom-gallery">
                                @foreach ($images->take(6) as $product)
                                <li>
                                    <a href="{{ asset($product->image) }}"
                                        data-source="{{ asset($product->image) }}">
                                        <img src="{{ asset($product->image) }}"
                                            alt="">
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="or-footer-copyright text-center">
        <span>© {{ $website_setting->copyright_text }} All rights reserved.</span>
    </div>
</footer>