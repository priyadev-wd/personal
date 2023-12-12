@extends('layouts.app')
@section('content')

  <!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('images/background/page-title-bg.jpg') }});">
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
									<li class="current"><a href="{{ route('services',['asphalt-paving']) }}" class="current"><i class="fas fa-angle-right"></i><span>Asphalt Paving</span></a></li>
									<li><a href="{{ route('services',['excavation']) }}"><i class="fas fa-angle-right"></i><span>Precision Excavation</span></a></li>
									<li><a href="{{ route('services',['pit-and-quarry']) }}"><i class="fas fa-angle-right"></i><span>PIT and Quarry Expertise</span></a></li>
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
						<img src="{{ asset('images/services/asphalt-service-details.jpg')}}" alt="" />
						<h3 class="mt-4">Service Overview</h3>
						<p>Transform your property with our professional Asphalt Paving Service, where precision meets durability. At [Your Company Name], we pride ourselves on delivering top-notch asphalt paving solutions that enhance the aesthetics and functionality of driveways, parking lots, and pathways. Our experienced team employs state-of-the-art equipment and industry-leading techniques to ensure a smooth, resilient surface that withstands the test of time and weather. Whether you're a homeowner looking to upgrade your driveway or a business owner seeking a reliable parking lot solution, we tailor our services to meet your unique needs. Trust us to pave the way for a safer, more attractive, and long-lasting surface that adds value to your property.</p>

						<div class=" mt-25">
							<h3>Frequently Asked Question</h3>
							<p>Explore our comprehensive FAQ section to find answers to common inquiries about our Asphalt Paving Service. From project timelines to maintenance tips, we've compiled essential information to guide you through the process</p>
							<ul class="accordion-box wow fadeInRight">
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">How long does the asphalt paving process take?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Our timeline depends on the size and complexity of the project. Typically, a residential driveway can be completed within a few days, while larger commercial projects may take a bit longer. We provide a detailed timeline during the consultation phase.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block active-block">
									<div class="acc-btn active">What is the lifespan of asphalt paving?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">With proper maintenance and care, asphalt surfaces can last 20 to 30 years or more. Regular sealcoating and repairs can extend the lifespan and protect against environmental factors.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">Is asphalt environmentally friendly?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Asphalt is a recyclable material, and it can be reused, making it an eco-friendly choice. Additionally, it helps reduce stormwater runoff and provides a smooth, fuel-efficient surface.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">Can asphalt be installed in extreme weather conditions?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Asphalt can be installed in various weather conditions, but extreme temperatures may affect the paving process. We schedule projects during optimal weather conditions to ensure the best results.</div>
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

