 <section id="or-testimonial-3" class="or-testimonial-section-3">
   <div class="container">
     <div class="or-testimonial-content-3">
       <div class="row">
         <div class="col-lg-6">
           <div class="or-testimonial-text-wrapper-3 position-relative">
             <span class="or-testimonial-shape position-absolute"><img src="assets/img/leaf.png" alt=""></span>
             <div class="or-section-title-4 headline-2 pera-content text-center">
               <span>Testimonials</span>
               <h2>Whats Customer Saying?</h2>
               <p>We value the experimentation. We offer a variety of services and solutions Worldwide. We’ve been lucky to collaborate with a long list of customers, located in and out of the country.
               </p>
             </div>
             <div class="testimonial-feature-content-4 d-flex">
               @foreach ($achievements->take(2) as $achiev )


               <div class="testimonial-feature-item d-flex align-items-center">
                 <div class="testimonial-feature-icon">
                   <i class="flaticon-rate"></i>
                 </div>
                 <div class="testimonial-feature-text headline-2 pera-content">
                   <h3><span class="counter">{{ $achiev->count_number }}</span>+</h3>
                   <p>{{ $achiev->title }}</p>
                 </div>
               </div>
               @endforeach
             </div>
           </div>
         </div>
         <div class="col-lg-6">
           <div class="testimonial-slider-area-4">
             <div class="testimonial-slider-wrapper-4">
               <div class="testimonial-slider-4">
                 @foreach ($reviews as $review )
                 <div class="testimonial-slider-item-4 d-flex position-relative">
                   <div class="testimonial-slider-img-4">
                     <img src="{{ asset($review->image) }}" alt="">
                   </div>
                   <div class="testimonial-slider-text-4 pera-content headline position-relative">
                     <p>{{ $review->review }}</p>
                     <h3>{{ $review->name }}</h3>
                     <div class="testimonial-icon position-absolute">
                       <i class="fal fa-quote-right"></i>
                     </div>
                   </div>
                 </div>
                 @endforeach
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>