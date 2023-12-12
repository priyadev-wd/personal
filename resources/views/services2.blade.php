@extends('layouts.app')
@section('content')

  <!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('images/background/page-title-bg.jpg')}});">
		<div class="auto-container">
			<div class="title-outer text-center">
				<ul class="page-breadcrumb">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Services</li>
				</ul>
				<h1 class="title">Service Details</h1>
			</div>
		</div>
	</section>

	<!--Start Services Details-->
	<section class="services-details">
		<div class="container">
			<div class="row">
				<!--Start Services Details Sidebar-->
				<div class="col-xl-4 col-lg-4">
					<div class="service-sidebar">
						<!--Start Services Details Sidebar Single-->
						<div class="sidebar-widget service-sidebar-single">

							<div class="sidebar-service-list">
								<ul>
									<li><a href="{{ route('services',['asphalt-paving']) }}" class="current"><i class="fas fa-angle-right"></i><span>Asphalt Paving</span></a></li>
									<li ><a href="{{ route('services',['excavation']) }}"><i class="fas fa-angle-right"></i><span>Precision Excavation</span></a></li>
									<li><a href="{{ route('services',['pit-and-quarry']) }}"><i class="fas fa-angle-right"></i><span>PIT and Quarry Expertise</span></a></li>
									<li class="current"><a href="{{ route('services',['salt-transportation']) }}"><i class="fas fa-angle-right"></i><span>Salt Transportation</span></a></li>
								</ul>
							</div>

							<div class="service-details-help">
								<div class="help-shape-1"></div>
								<div class="help-shape-2"></div>
								<h2 class="help-title">Contact with <br> us for any <br> advice</h2>
								<div class="help-icon">
									<span class=" lnr-icon-phone-handset"></span>
								</div>
								<div class="help-contact">
									<p>Need help? Talk to an expert</p>
									<a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
								</div>
							</div>
						</div>
						<!--End Services Details Sidebar-->
					</div>
				</div>

				<!--Start Services Details Content-->
				<div class="col-xl-8 col-lg-8">
					<div class="services-details__content">
						<img src="{{ asset('images/services/salt-service-details.jpg')}}" alt="" />
						<h3 class="mt-4">Service Overview</h3>
						<p>Our Salt Transportation Service is your reliable partner in ensuring the seamless and efficient movement of salt products from source to destination. With a dedicated fleet of specialized vehicles equipped to handle various quantities and forms of salt, we prioritize the timely and secure delivery of your salt shipments. Our experienced team of logistics professionals ensures that your salt reaches its destination in optimal condition, meeting the highest industry standards. Whether you require bulk transportation of industrial-grade salt or precision delivery of specialty salts, Salt Transportation Service is committed to providing customized solutions to meet your unique transportation needs.</p>

						<div class=" mt-25">
							<h3>Frequently Asked Question</h3>
							<p>Explore our FAQs for quick answers! Learn about the types of salt we transport, request a quote, ensure shipment safety, track deliveries, and more. Your salt transportation questions, answered. </p>
							<ul class="accordion-box wow fadeInRight">
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">What types of salt can Salt Transportation Service handle?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">We specialize in transporting a wide range of salt types, including industrial-grade salt, road salt, sea salt, and specialty salts for various applications.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block active-block">
									<div class="acc-btn active">What regions do you serve?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">Salt Transportation Service operates across a broad geographic area. Contact us to discuss your specific transportation needs and to inquire about service availability in your region.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">What is the typical transit time for salt deliveries?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Transit times vary based on factors such as distance, destination, and mode of transportation. Our team will provide you with estimated delivery times based on your specific requirements.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">Can Salt Transportation Service handle both domestic and international shipments?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Yes, we have the capability to handle both domestic and international salt shipments. Our team can assist you with the necessary documentation and logistics for cross-border transportation.</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--End Services Details Content-->
			</div>
		</div>
	</section>
	<!--End Services Details-->

@endsection
@section('page-script')

@endsection
