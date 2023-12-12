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
									<li><a href="{{ route('services',['excavation']) }}"><i class="fas fa-angle-right"></i><span>Precision Excavation</span></a></li>
									<li class="current"><a href="{{ route('services',['pit-and-quarry']) }}"><i class="fas fa-angle-right"></i><span>PIT and Quarry Expertise</span></a></li>
									<li><a href="{{ route('services',['salt-transportation']) }}"><i class="fas fa-angle-right"></i><span>Salt Transportation</span></a></li>
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
						<img src="{{ asset('images/services/pit-service-details.jpg')}}" alt="" />
						<h3 class="mt-4">Service Overview</h3>
						<p>Our PIT and Quarry Expertise Service is a comprehensive solution designed to meet the unique needs of professionals and businesses operating in the mining and aggregates industry. Whether you're involved in pit excavation, quarrying, or related activities, our service offers specialized expertise to optimize your operations. We provide strategic consulting, technical support, and innovative solutions to enhance productivity, efficiency, and safety in your mining endeavors. Our team of seasoned professionals brings extensive knowledge in geology, equipment optimization, environmental compliance, and regulatory considerations. With our PIT and Quarry Expertise Service, you can navigate the complexities of the industry with confidence, ensuring sustainable and profitable outcomes for your projects.</p>

						<div class=" mt-25">
							<h3>Frequently Asked Question</h3>
							<p>Unlock the full potential of your mining and quarry operations with our PIT and Quarry Expertise Service. Tailored guidance, environmental compliance, and equipment optimization for sustainable success. </p>
							<ul class="accordion-box wow fadeInRight">
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">What does PIT and Quarry Expertise Service entail?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Our service encompasses a range of specialized support for mining and quarry operations, including strategic consulting, technical guidance, and innovative solutions tailored to enhance productivity and compliance.</div>
										</div>
									</div>
								</li>

								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">What types of mining and quarrying operations do you support?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">We cater to a diverse range of operations, including pit excavation, quarrying, and related activities across various minerals and aggregates. Our expertise is adaptable to different scales and types of projects.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">Can you help optimize equipment usage in our quarry?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Absolutely. We provide expert advice on equipment optimization, helping you make informed decisions to enhance the performance and longevity of your machinery, ultimately contributing to cost-effectiveness.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">Is your service suitable for small-scale mining operations?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Yes, our expertise is adaptable to projects of varying scales. We provide tailored solutions that suit the specific needs and challenges faced by small-scale mining operations.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">What geographic regions do you cover?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">We offer our expertise globally, catering to mining and quarrying operations in various geographic regions. Our team is equipped to understand and address the specific challenges faced in different locations around the world.</div>
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
