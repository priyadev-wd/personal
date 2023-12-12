@extends('layouts.app')
@section('content')

  <!-- Banner Section -->
  <section class="banner-section-two">
    <div class="banner-carousel owl-carousel owl-theme default-dots">
      <div class="slide-item">
        <div class="bg bg-image" style="background-image: url({{ asset('images/banner/1.jpg')}});"></div>
        <!-- <div class="bg bg-shape-image" style="background-image: url(images/banner/3.jpg);"></div> -->
        <!-- <div class="icon-triangle-6"></div> -->
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-12">
              <div class="content-box">
                <h1 class="title animate-2">Aesthetic Asphalt Paving</h1>
                <div class="text animate-3">Unmatched Expertise for Durable and Beautiful Surfaces</div>
                <div class="btn-box animate-4">
                  <a href="{{ route('services',['asphalt-paving']) }}" class="theme-btn btn-style-one wow fadeInUp" data-wow-delay="900ms"><span class="btn-title">Explore More</span></a>
                </div>
              </div>
            </div>
            <!-- <div class="image-column col-lg-6">
              <figure class="image animate-5"><img src="images/banner/men.png" alt=""></figure>
            </div> -->
          </div>
        </div>
      </div>
      <div class="slide-item">
        <div class="bg bg-image" style="background-image: url({{ asset('images/banner/2.jpg')}});"></div>
        <!-- <div class="bg bg-shape-image" style="background-image: url(images/banner/3.jpg);"></div> -->
        <!-- <div class="icon-triangle-6"></div> -->
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-12">
              <div class="content-box">
                <h1 class="title animate-2">Dependable Salt Transportation</h1>
                <div class="text animate-3">Timely Delivery for Winter Maintenance and Industrial Needs</div>
                <div class="btn-box animate-4">
                  <a href="{{ route('services',['salt-transportation']) }}" class="theme-btn btn-style-one wow fadeInUp" data-wow-delay="900ms"><span class="btn-title">Explore More</span></a>
                </div>
              </div>
            </div>
            <!-- <div class="image-column col-lg-6">
              <figure class="image animate-5"><img src="images/banner/men.png" alt=""></figure>
            </div> -->
          </div>
        </div>
      </div>
      <div class="slide-item">
        <div class="bg bg-image" style="background-image: url({{ asset('images/banner/3.jpg')}});"></div>
        <!-- <div class="bg bg-shape-image" style="background-image: url(images/banner/3.jpg);"></div> -->
        <!-- <div class="icon-triangle-6"></div> -->
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-12">
              <div class="content-box">
                <h1 class="title animate-2">PIT and Quarry Mastery</h1>
                <div class="text animate-3">Supplying Top-Quality Aggregates for Your Success</div>
                <div class="btn-box animate-4">
                  <a href="{{ route('services',['pit-and-quarry']) }}" class="theme-btn btn-style-one wow fadeInUp" data-wow-delay="900ms"><span class="btn-title">Explore More</span></a>
                </div>
              </div>
            </div>
            <!-- <div class="image-column col-lg-6">
              <figure class="image animate-5"><img src="images/banner/men.png" alt=""></figure>
            </div> -->
          </div>
        </div>
      </div>
      <div class="slide-item">
        <div class="bg bg-image" style="background-image: url({{ asset('images/banner/4.jpg')}});"></div>
        <!-- <div class="bg bg-shape-image" style="background-image: url(images/banner/3.jpg);"></div> -->
        <!-- <div class="icon-triangle-6"></div> -->
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-12">
              <div class="content-box">
                <h1 class="title animate-2">Precision Excavation Excellence</h1>
                <div class="text animate-3">Breaking Ground with Accuracy and Efficiency</div>
                <div class="btn-box animate-4">
                  <a href="{{ route('services',['excavation']) }}" class="theme-btn btn-style-one wow fadeInUp" data-wow-delay="900ms"><span class="btn-title">Explore More</span></a>
                </div>
              </div>
            </div>
            <!-- <div class="image-column col-lg-6">
              <figure class="image animate-5"><img src="images/banner/men.png" alt=""></figure>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Banner Section -->

  <!-- About Section -->
  <section class="about-section-two">
    <div class="icon-plane-12"></div>
    <div class="auto-container">
      <div class="sec-title text-center">
        <span class="sub-title">About Our Company</span>
        <h2>Ahluwalia Transport <br> Provider 2012</h2>
      </div>
      <div class="row">
        <!-- Content Column -->
        <div class="content-column col-lg-6 order-lg-2 wow fadeInRight">
          <div class="inner-column">
            <div class="text">Established in 2012, Ahluwalia Transport has been dedicated to delivering quality services, ensuring our clients receive the professional care they deserve. As a trusted Trucking Company, we prioritize excellence in every aspect of our operations. Contact us today to discover how we can meet your transportation needs with reliability and expertise.</div>
            <ul class="list-style-two">
              <li>
                <div class="icon-arrow"></div>
                <a>Safety & reliable service</a>
              </li>
              <li>
                <div class="icon-arrow"></div>
                <a>Quality Assurance</a>
              </li>
              <li>
                <div class="icon-arrow"></div>
                <a>Customer-Centric Approach</a>
              </li>
              <li>
                <div class="icon-arrow"></div>
                <a>Safety, Quality, Innovation</a>
              </li>
            </ul>
            <!-- Info Btn -->
            <a href="tel:+1288555013" class="info-btn"> <i class="icon fa fa-phone"></i> <small>Emergency Hotline:</small> <strong>+12 (88) 555-013</strong> </a>
            <div class="btn-box"> <a href="{{ route('about-us') }}" class="theme-btn btn-style-one"><span class="btn-title">Explore More</span></a> </div>
          </div>
        </div>
        <!--image column-->
        <div class="image-column col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
          <div class="inner-column">
            <div class="image-box">
              <figure class="image overlay-anim"><img src="{{ asset('images/services/about2-1.jpg') }}" alt="Image"></figure>
              <figure class="image-2 overlay-anim"><img src="{{ asset('images/services/about2-2.jpg') }}" alt="Image"></figure>
              <div class="exp-box bounce-y">
                <div class="inner">
                  <h2 class="count">12+</h2>
                  <div class="text">years of<br>Experience</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Emd About Section -->

   <!-- Services Section -->
   <section class="services-section pt-0">
    <div class="anim-icons">
      <span class="icon icon-plane-1 bounce-y"></span>
    </div>
    <div class="auto-container">
      <div class="sec-title text-center">
        <span class="sub-title">Our Services</span>
        <h2>Discover Our All Services</h2>
      </div>
      <div class="services-carousel owl-carousel owl-theme default-dots">
        <!-- Service Block -->
        <div class="service-block">
          <div class="inner-box">
            <div class="content-box">
              <h4 class="title"><a href="{{ route('services',['asphalt-paving']) }}">Asphalt Paving</a></h4>
              <div class="text">With unmatched expertise, we take pride in delivering high-quality, durable, and aesthetically pleasing asphalt surfaces. Our skilled professionals leverage years of experience to ensure your projects are completed to the highest standards.</div>
            </div>
            <div class="image-box">
              <a href="{{ route('services',['asphalt-paving']) }}" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="{{ route('services',['asphalt-paving']) }}"><img src="{{ asset('images/services/service-1-1.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block">
          <div class="inner-box">
            <div class="content-box">
              <h4 class="title"><a href="{{ route('services',['excavation']) }}">Precision Excavation</a></h4>
              <div class="text">Our excavation services lay the groundwork for success, encompassing initial ground preparation and precise grading. Backed by cutting-edge equipment and skilled expertise, we ensure accuracy and efficiency in every project.</div>
            </div>
            <div class="image-box">
              <a href="{{ route('services',['excavation']) }}" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="{{ route('services',['excavation']) }}"><img src="{{ asset('images/services/service-1-2.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block">
          <div class="inner-box">
            <div class="content-box">
              <h4 class="title"><a href="{{ route('services',['pit-and-quarry']) }}">PIT and Quarry Expertise</a></h4>
              <div class="text">As industry leaders in pit and quarry operations, we provide top-quality aggregates crucial for construction projects. Our strategically located pits ensure a reliable supply chain, supporting the foundation of your endeavors.</div>
            </div>
            <div class="image-box">
              <a href="{{ route('services',['pit-and-quarry']) }}" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="{{ route('services',['pit-and-quarry']) }}"><img src="{{ asset('images/services/service-1-3.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block">
          <div class="inner-box">
            <div class="content-box">
              <h4 class="title"><a href="{{ route('services',['salt-transportation']) }}">Salt Transportation</a></h4>
              <div class="text">Rely on our specialized fleet for dependable salt transportation. Whether for winter maintenance or industrial needs, our logistics team guarantees timely and safe delivery of your salt, ensuring it reaches its destination efficiently.</div>
            </div>
            <div class="image-box">
              <a href="{{ route('services',['salt-transportation']) }}" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="{{ route('services',['salt-transportation']) }}"><img src="{{ asset('images/resource/service-1-1.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section -->


  <!-- Feature Section -->
  <section class="feature-section-two p-0">
    <div class="icon-plane-2"></div>
    <div class="auto-container">
      <div class="row">
        <!-- Content Column -->
        <div class="content-column col-lg-5 wow fadeInLeft">
          <div class="inner-column">
            <div class="sec-title">
              <span class="sub-title">Why Choose Us</span>
              <h2>Discover the Advantages of working with Us</h2>
              <!-- <div class="text">adipiscing elit. Aliquam vulputate, tortor nec comultri <br> Suspendisse faucibus sed dolor eget Sed id.</div> -->
            </div>
            <div class="feature-block-two">
              <div class="inner-box">
                <i class="icon  flaticon-courier"></i>
                <div class="content">
                  <h6 class="title">Expert Craftsmanship, Lasting Impressions:</h6>
                  <div class="text">Our seasoned professionals bring unparalleled skill to every asphalt paving project. Count on us for surfaces that not only stand the test of time but also enhance the aesthetics of your property.</div>
                </div>
              </div>
            </div>
            <div class="feature-block-two">
              <div class="inner-box">
                <i class="icon flaticon-computer-monitor"></i>
                <div class="content">
                  <h6 class="title">Groundbreaking Excellence</h6>
                  <div class="text">From initial ground preparation to precise grading, our excavation services set the stage for success. Trust us to handle your excavation needs with accuracy, efficiency, and a keen eye for detail.</div>
                </div>
              </div>
            </div>
            <div class="feature-block-two">
              <div class="inner-box">
                <i class="icon flaticon-delivery-time"></i>
                <div class="content">
                  <h6 class="title">On-Time Delivery, Every Time</h6>
                  <div class="text">Count on our specialized fleet for dependable salt transportation. Whether it's for winter maintenance or industrial applications, our logistics team ensures that your salt arrives at its destination promptly and safely.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Video Column -->
        <div class="video-column col-lg-7 wow fadeInRight" data-wow-delay="300ms">
          <div class="inner-column">
            <div class="video-box">
              <figure class="image"><img src="{{ asset('images/services/feature2-1.jpg') }}" alt="Image"></figure>
              <div class="btn-box">
                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon fa fa-play" aria-hidden="true"></i><span class="ripple"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Emd Feature Section -->

  <!-- Testimonial Section -->
  <section class="testimonial-section-two">
    <div class="auto-container">
      <div class="sec-title">
        <span class="sub-title">Testimonials</span>
        <h2>Transportation Service That <br>Deliver Excellence</h2>
      </div>
      <div class="row">

        <!-- Testimonial Column -->
        <div class="testimonial-column col-xl-12 col-lg-12">
          <div class="testimonial-carousel owl-carousel owl-theme custom-navs">
            <!-- Testimonial Block -->
            <div class="testimonial-block-two">
              <div class="inner-box">
                <div class="icon-quote"></div>
                <div class="image-box">
                  <figure class="image overlay-anim"><img src="{{ asset('images/resource/testi2-1.jpg') }}" alt="Image"></figure>
                </div>
                <div class="info-box">
                  <div class="text">This is due to their excellent service, competitive pricing and customer support. It's thoroughly refreshing to get such a personal</div>
                  <h3 class="name">Romina Jameson</h3>
                  <div class="designation">Cargo agency owner</div>
                </div>
              </div>
            </div>
            <!-- Testimonial Block -->
            <div class="testimonial-block-two">
              <div class="inner-box">
                <div class="icon-quote"></div>
                <div class="image-box">
                  <figure class="image overlay-anim"><img src="{{ asset('images/resource/testi2-1.jpg') }}" alt="Image"></figure>
                </div>
                <div class="info-box">
                  <div class="text">This is due to their excellent service, competitive pricing and customer support. It's thoroughly refreshing to get such a personal</div>
                  <h3 class="name">Romina Jameson</h3>
                  <div class="designation">Cargo agency owner</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->

@endsection
@section('page-script')

@endsection
