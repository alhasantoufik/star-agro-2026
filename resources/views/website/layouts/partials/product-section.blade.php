<section id="or-product-4" class="or-product-section-4">
  <div class="container">

    {{-- Section Title --}}
    <div class="or-section-title-4 headline-2 pera-content text-center">
      <h2>Our Products</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
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

                    <div class="e-commerce-btn">
                      <a href="#"><i class="fal fa-shopping-cart"></i></a>
                      <a href="#"><i class="fal fa-heart"></i></a>
                      <a href="#"><i class="fal fa-eye"></i></a>
                    </div>
                  </div>

                  {{-- Product Content --}}
                  <div class="or-best-product-text headline-2">
                    <h3>
                      <a href="#">{{ $product->product_name }}</a>
                    </h3>

                    <div class="price">
                      @if($product->discount_price)
                        ৳{{ $product->discount_price }}
                        <del>৳{{ $product->regular_price }}</del>
                      @else
                        ৳{{ $product->regular_price }}
                      @endif
                    </div>

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


