  <section id="or-why-choose-2" class="or-why-choose-section-2">
    <div class="container">
      <div class="or-why-choose-content-2">
        <div class="row">
          <div class="col-lg-6">
            <div class="or-why-choose-text-wrapper-2">
              <div class="or-section-title-4 headline-2 pera-content">
                <h2>{{ $about->about_title }}</h2>
                <p>{!! $about->description !!}</p>
              </div>
              <div class="or-why-choose-feature-2">
                <div class="or-why-choose-feature-item-2 d-flex align-items-center">
                  <div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
                    <i class="flaticon-pay"></i>
                  </div>
                  <div class="or-why-choose-feature-text pera-content">
                    <h3>Our Mission</h3>
                    <p>{{ $about->mission }}</p>
                  </div>
                </div>
                <div class="or-why-choose-feature-item-2 d-flex align-items-center">
                  <div class="or-why-choose-feature-icon d-flex align-items-center justify-content-center">
                    <i class="flaticon flaticon-fruits"></i>
                  </div>
                  <div class="or-why-choose-feature-text pera-content">
                    <h3>Our Vission</h3>
                    <p>{{ $about->vission }}</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="or-why-choose-img-2">
              <img src="{{ asset($about->image) }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>