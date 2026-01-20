@extends('website.home')
@section('title', 'Product | Organio')
@section('content')
@include('website.layouts.inc.script-head')
<!-- Start of Breadcrumb section
	============================================= -->
<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="{{ asset('assets/img/bg/bg-page-title.jpg') }}">
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


<section id="or-shop-product" class="or-shop-product-section">
    <div class="container">
        <div class="or-section-title headline pera-content text-center middle-align">
            <h2>
                {{ $category->category_name }} Products
            </h2>
        </div>

        <div class="or-product-shop-content">
            <div class="container">
                <div class="row">

                    @forelse($category->products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="or-product-innerbox-item type-1 text-center position-relative">

                            <div class="or-product-inner-img">
                                <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->product_name }}">
                            </div>

                            <div class="or-product-inner-text headline">
                                <h3>
                                    <a href="#" tabindex="0">
                                        {{ $product->product_name }}
                                    </a>
                                </h3>

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



                            </div>

                            <div class="or-product-btn text-center">
                                <a class="d-flex justify-content-center align-items-center"
                                    href="{{ route('product_single.page', $product->id) }}"
                                    tabindex="0">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <p>No products found in this category.</p>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Shop product section
	============================================= -->

@include('website.layouts.inc.script-bottom')

@endsection