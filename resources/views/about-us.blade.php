@extends('layouts.app')
@section('content')

 <!-- Start main-content -->
 <section class="page-title" style="background-image: url({{ asset('images/background/page-title-bg.jpg') }});">
		<div class="auto-container">
			<div class="title-outer text-center">
				<ul class="page-breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li>About Us</li>
				</ul>
				<h1 class="title">About Us</h1>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- About Section -->
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
              <h4 class="title"><a href="#">Asphalt Paving</a></h4>
              <div class="text">With unmatched expertise, we take pride in delivering high-quality, durable, and aesthetically pleasing asphalt surfaces. Our skilled professionals leverage years of experience to ensure your projects are completed to the highest standards.</div>
            </div>
            <div class="image-box">
              <a href="#" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="#"><img src="{{ asset('images/services/service-1-1.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block">
          <div class="inner-box">
            <div class="content-box">
              <h4 class="title"><a href="#">Precision Excavation</a></h4>
              <div class="text">Our excavation services lay the groundwork for success, encompassing initial ground preparation and precise grading. Backed by cutting-edge equipment and skilled expertise, we ensure accuracy and efficiency in every project.</div>
            </div>
            <div class="image-box">
              <a href="#" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="#"><img src="{{ asset('images/services/service-1-2.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block">
          <div class="inner-box">
            <div class="content-box">
              <h4 class="title"><a href="#">PIT and Quarry Expertise</a></h4>
              <div class="text">As industry leaders in pit and quarry operations, we provide top-quality aggregates crucial for construction projects. Our strategically located pits ensure a reliable supply chain, supporting the foundation of your endeavors.</div>
            </div>
            <div class="image-box">
              <a href="#" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="#"><img src="{{ asset('images/services/service-1-3.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
        <!-- Service Block -->
        <div class="service-block">
          <div class="inner-box">
            <div class="content-box">
              <h4 class="title"><a href="#">Salt Transportation</a></h4>
              <div class="text">Rely on our specialized fleet for dependable salt transportation. Whether for winter maintenance or industrial needs, our logistics team guarantees timely and safe delivery of your salt, ensuring it reaches its destination efficiently.</div>
            </div>
            <div class="image-box">
              <a href="#" class="read-more"><i class="lnr-icon-arrow-up"></i></a>
              <figure class="image"><a href="#"><img src="{{ asset('images/resource/service-1-1.jpg') }}" alt=""></a></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section -->


  @endsection
  @section('page-script')
