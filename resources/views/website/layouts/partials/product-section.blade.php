<section id="or-product-4" class="or-product-section-4">
    <div class="container">
        <div class="or-section-title-4 headline-2 pera-content text-center">
            <h2>Best Prices & Offers New Items</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="best-price-product-4">

            {{-- Category Filter --}}
            <div class="or-best-price-filter-btn ul-li text-center">
                <ul class="filter clearfix">
                    <li class="active" data-filter="*">All Product</li>
                    @foreach ($categories as $category)
                        <li data-filter=".{{ $category->category_slug }}">
                            {{ $category->category_name }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Product Area --}}
            <div class="or-best-product-slider-area">
                <div class="or-best-product-slider-wrapper">
                    <div class="or-best-product-slider">

                        @foreach ($featured_products as $product)
                            <div class="organio-inner-item product-item {{ $product->category->category_slug }}">
                                <div class="or-best-product-innerbox text-center">

                                    {{-- Product Image --}}
                                    <div class="or-best-product-img position-relative">
                                        <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->product_name }}">
                                        
                                    </div>

                                    {{-- Product Content --}}
                                    <div class="or-best-product-text headline-2">
                                        <h3>
                                            <a href="{{ route('product_single.page', $product->id) }}">{{ $product->product_name }}</a>
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

                                        <div class="or-btn-2">
                                            <a class="d-flex justify-content-center align-items-center" href="{{ route('product_single.page', $product->id) }}">
                                                View Details
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



