  <style>
    .blog-content {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      /* কত লাইন দেখাবে */
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
  <section id="or-blog-4" class="or-blog-section-4">
    <div class="container">
      <div class="or-section-title-4 headline-2 pera-content text-center">
        <h2>Our Latest Blogs</h2>
        <p>Follow our latest Blogs and thoughts which focuses exclusively on design, art, vintage, and also work updates.
        </p>
      </div>
      <div class="blog-content-4">
        <div class="blog-slider-wrapper-4">
          <div class="blog-slider-4">
            @foreach ($blogs as $blog)


            <div class="organio-inner-item">
              <div class="blog-innbox-item-4">
                <div class="blog-img-4 position-relative">
                  <img src="{{ asset($blog->image) }}" height="570px" width="270" alt="">
                  <div class="blog-meta-share d-flex justify-content-between">
                    <div class="blog-meta">
                      <a href="#"><i class="fas fa-calendar-alt"></i>{{ $blog->created_at }}</a>
                      <a href="#"><i class="fas fa-user"></i>{{ $blog->user_name }}</a>
                    </div>
                    <div class="blog-share position-relative">
                      <div class="blog-share-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blog-text headline-2 pera-content">
                  <h3><a href="blog-single.html">{{ $blog->post_title }}</a></h3>
                  <p>
                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->post_content), 100, '...') }}
                  </p>

                  <div class="or-btn-2">
                    <a class="d-flex justify-content-center align-items-center" href="blog-single.html">Read More</a>
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