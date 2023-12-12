<!-- Preloader -->
<div class="preloader"></div>

<!-- Main Header-->
<header class="main-header header-style-two">
  <!-- Header Top -->
  <div class="header-top">
    <div class="auto-container">
      <div class="inner-container">
        <div class="top-left">
          <!-- Info List -->
          <ul class="list-style-one">
            <li><i class="fa fa-phone"></i> Phone No: &nbsp; <a href="tel:4163713304">4163713304</a></li>
          </ul>
        </div>
        <div class="top-right">
          <!-- Info List -->
          <ul class="list-style-one">
            <li><i class="fa fa-map-marker-alt"></i> Location: &nbsp; 128 Benhurst Cres Brampton, ON, L7A5A5</li>
          </ul>
          <ul class="social-icon-one">
            <li><a href="https://www.facebook.com/profile.php?id=61554237701512&mibextid=LQQJ4d"><span class="fab fa-facebook"></span></a></li>
            <li><a href="https://www.instagram.com/_u/ahluwaliatransport"><span class="fab fa-instagram"></span></a></li>
            <li><a href="www.tiktok.com/@ahluwalia87"><span class="fab fa-tiktok"></span></a></li>


          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Top -->

  <!-- Header Lower -->
  <div class="header-lower">
    <div class="auto-container">
      <!-- Main box -->
      <div class="main-box">
        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
        <!--Nav Box-->
        <div class="nav-outer">
          <nav class="nav main-menu">
            <ul class="navigation">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li class="dropdown"><a href="#">Services</a>
                <ul>
                  <li><a href="{{ route('services',['asphalt-paving']) }}">Asphalt Paving</a></li>
                  <li><a href="{{ route('services',['excavation']) }}">Precision Excavation</a></li>
                  <li><a href="{{ route('services',['pit-and-quarry']) }}">PIT and Quarry Expertise</a></li>
                  <li><a href="{{ route('services',['salt-transportation']) }}">Salt Transportation</a></li>
                </ul>
              </li>
              <li><a href="{{ route('about-us') }}">About Us</a></li>
              <li><a href="https://forms.gle/e2YjCejm5CqnPHf66" target="_blank">Jobs</a></li>
              <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
            </ul>
          </nav>
          <div class="outer-box">

            <a href="#" class="theme-btn btn-style-one hover-light" id="openWhatsAppDialogButton"><span class="btn-title"><i class="fa fa-comments"></i>&nbsp  Chat With Us </span></a>
            <!-- Mobile Nav toggler -->
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Lower -->

  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
    <nav class="menu-box">
      <div class="upper-box">
        <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo-2.png') }}" alt="" title=""></a></div>
        <div class="close-btn"><i class="icon fa fa-times"></i></div>
      </div>
      <ul class="navigation clearfix">
        <!--Keep This Empty / Menu will come through Javascript-->
      </ul>
      <ul class="contact-list-one">
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box"> <i class="icon lnr-icon-phone-handset"></i> <span class="title">Call Now</span> <a href="tel:+4163713304">+4163713304</a> </div>
        </li>
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box"> <span class="icon lnr-icon-envelope1"></span> <span class="title">Send Email</span> <a href="mailto:ahluwaliatransport30@gmail.com">ahluwaliatransport30@gmail.com</a> </div>
        </li>
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box"> <span class="icon lnr-icon-clock"></span> <span class="title">Send Email</span> Mon - Fri 8:00AM - 5:00PM, Sat - Sun - CLOSED </div>
        </li>
      </ul>
      <ul class="social-links">
        <li><a href="https://www.facebook.com/profile.php?id=61554237701512&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/_u/ahluwaliatransport"><i class="fab fa-instagram"></i></a></li>
        <li><a href="www.tiktok.com/@ahluwalia87"><i class="fab fa-toktok"></i></a></li>

      </ul>
    </nav>
  </div>
  <!-- End Mobile Menu -->


  <!-- Sticky Header  -->
  <div class="sticky-header">
    <div class="auto-container">
      <div class="inner-container">
        <!--Logo-->
        <div class="logo"> <a href="{{ route('home') }}" title=""><img src="{{ asset('images/logo.png') }}" alt="" title=""></a> </div>
        <!--Right Col-->
        <div class="nav-outer">
          <!-- Main Menu -->
          <nav class="main-menu">
            <div class="navbar-collapse show collapse clearfix">
              <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
              </ul>
            </div>
          </nav>
          <!-- Main Menu End-->
          <!--Mobile Navigation Toggler-->
          <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sticky Menu -->
</header>
<!--End Main Header -->
