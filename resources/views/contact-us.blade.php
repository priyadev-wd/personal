@extends('layouts.app')
@section('content')

  <!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('images/background/page-title-bg.jpg') }});">
		<div class="auto-container">
			<div class="title-outer text-center">
				<ul class="page-breadcrumb">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Contact</li>
				</ul>
				<h1 class="title">Contact Us</h1>
			</div>
		</div>
	</section>
	<!-- end main-content -->
  <!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Send us email</span>
						<h2>Feel free to write</h2>
					</div>
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="{{ route('contact-us') }}" method="post">
                        @csrf
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="name" class="form-control" type="text" placeholder="Enter Name" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="email" class="form-control required email" type="email" placeholder="Enter Email" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="subject" class="form-control required" type="text" placeholder="Enter Subject" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="phone" class="form-control" type="text" placeholder="Enter Phone" required >
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-5">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Need any help?</span>
							<h2>Get in touch with us</h2>
							<div class="text">Feel free to reach out to us for seamless truck transport solutions! Whether you have inquiries or want to discuss your specific needs, we're here to help. Connect with us today to experience efficient and reliable transportation services.</div>
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon bg-theme-color2">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Have any question?</h6>
									<a href="tel:4163713304"><span>Free</span> +4163713304</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Write email</h6>
									<a href="mailto:ahluwaliatransport30@gmail.com">ahluwaliatransport30@gmail.com</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Visit anytime</h6>
									<span>128 Benhurst Cres Brampton, ON, L7A5A5</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!-- Map Section-->
	<section class="map-section py-0">
		<iframe  class="map w-100"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
	</section>
	<!--End Map Section-->


    @endsection
    @section('page-script')
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    @if(session('success'))
        swal({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
        });
    @endif

    @if(session('error'))
        swal({
            icon: 'error',
            title: 'Error!',
            text: "{{ session('error') }}",
        });
    @endif
    </script>
    @endsection
