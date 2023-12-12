<footer class="main-footer footer-style-two">
    <div class="bg bg-image" style="background-image: url({{ asset('images/background/7.jpg') }});"></div>
    <!--Widgets Section-->
    <div class="widgets-section">
      <div class="auto-container">
        <div class="row">
          <!--Footer Column-->
          <div class="footer-column col-xl-4 col-lg-4">
            <div class="footer-widget about-widget">
              <div class="logo"><a href="route('home')"><img src="{{ asset('images/logo-2.png')}}" alt=""></a></div>
              <div class="text">Ahluwalia Transport, delivering quality services since 2012, offers professional care to clients. Contact us today to explore our trucking solutions.</div>
              <ul class="social-icon-two">
                <li><a href="https://www.facebook.com/profile.php?id=61554237701512&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/_u/ahluwaliatransport"><i class="fab fa-instagram"></i></a></li>
                <li><a href="www.tiktok.com/@ahluwalia87"><i class="fab fa-tiktok"></i></a></li>
              </ul>
            </div>
          </div>
          <!--Footer Column-->
          <div class="footer-column col-xl-4 col-lg-4">
            <div class="footer-widget contact-widget">
              <h4 class="widget-title">Contact Info</h4>
              <div class="widget-content">
                <ul class="contact-list-two light">
                  <li><i class="icon fa fa-map-marker-alt"></i> 128 Benhurst Cres Brampton, <br>ON, L7A5A5</li>
                  <li><i class="icon fa fa-phone"></i> <a href="tel:+4163713304">+4163713304</a> Mon - Fri: 8 am - 5 pm,</li>
                  <li><i class="icon fa fa-envelope"></i> <a href="mailto:ahluwaliatransport30@gmail.com">ahluwaliatransport30@gmail.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--Footer Column-->
          <div class="footer-column col-xl-4 col-lg-4">
            <div class="footer-widget links-widget">
              <h4 class="widget-title">Our Services</h4>
              <div class="widget-content">
                <ul class="user-links two-column">
                    <li><a href="{{ route('services',['asphalt-paving']) }}">Asphalt Paving</a></li>
                    <li><a href="{{ route('services',['excavation']) }}">Precision Excavation</a></li>
                    <li><a href="{{ route('services',['pit-and-quarry']) }}">PIT and Quarry Expertise</a></li>
                    <li><a href="{{ route('services',['salt-transportation']) }}">Salt Transportation</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="inner-container">
          <div class="copyright-text text-center">&copy; Copyright 2023 All Right Reserved.</div>

        </div>
      </div>
    </div>
  </footer>

  <div id="WAButton"></div>
