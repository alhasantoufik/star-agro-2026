@extends('website.home')
@section('title', 'Product | Star Agro')
@section('content')

<!-- Start of Breadcrumb section
	============================================= -->
<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/bg-page-title.jpg">
    <div class="background_overlay"></div>
    <div class="container">
        <div class="or-breadcrumbs-content text-center">
            <div class="page-title headline">
                <h1>Products</h1>
            </div>
            <div class="or-breadcrumbs-items ul-li">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of Breadcrumb section
	============================================= -->
<!-- Start of Shop product section
	============================================= -->
<section id="or-shop-product" class="or-shop-product-section">
    <div class="container">
        <div class="or-section-title headline pera-content text-center middle-align">
            <h2>All of our products are
                organic & fresh.</h2>
        </div>
        <div class="or-product-shop-content">
            <div class="container">
                <div class="row">

                    @foreach ($products as $product )


                    <div class="col-lg-3 col-md-6">
                        <div class="or-product-innerbox-item type-1 text-center position-relative">
                            <div class="e-commerce-btn">
                                <a href="#"><i class="fal fa-shopping-cart"></i></a>
                                <a href="#"><i class="fal fa-heart"></i></a>
                                <a href="#"><i class="fal fa-eye"></i></a>
                            </div>
                            <div class="or-product-inner-img">
                                <img src="{{ asset($product->thumbnail) }}" alt="">
                            </div>
                            <div class="or-product-inner-text headline">
                                <h3><a href="shop-single.html" tabindex="0">{{ $product->product_name }}</a></h3>
                                <span class="price">
                                    @if ($product->discount_price && $product->discount_type === 'flat')
                                    @php
                                    $final_price = $product->regular_price - $product->discount_price;
                                    @endphp
                                    ট. {{ number_format($final_price, 2) }}
                                    <del class="ms-2 text-muted">
                                        ট. {{ number_format($product->regular_price, 2) }}
                                    </del>

                                    @elseif ($product->discount_price && $product->discount_type === 'percent')
                                    @php
                                    $discount_amount = ($product->regular_price * $product->discount_price) / 100;
                                    $final_price = $product->regular_price - $discount_amount;
                                    @endphp
                                    ট. {{ number_format($final_price, 2) }}
                                    <del class="ms-2 text-muted">
                                        ট. {{ number_format($product->regular_price, 2) }}
                                    </del>

                                    @else
                                    ট. {{ number_format($product->regular_price, 2) }}
                                    @endif
                                </span>
                                <div class="or-product-rate ul-li">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="or-product-btn text-center">
                                <a class="d-flex justify-content-center align-items-center" href="{{ route('product_single.page', $product->id) }}" tabindex="0">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- <div class="or-pagination text-center ul-li">
                    <ul>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- End of Shop product section
	============================================= -->

@endsection