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
									<li  class="current"><a href="{{ route('services',['excavation']) }}"><i class="fas fa-angle-right"></i><span>Precision Excavation</span></a></li>
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
						<img src="{{ asset('images/services/excavation-service-details.jpg')}}" alt="" />
						<h3 class="mt-4">Service Overview</h3>
						<p>Our Precision Excavation Service is providing top-notch services with a commitment to precision and efficiency. Our team of skilled professionals is equipped with state-of-the-art machinery and a wealth of experience to tackle projects of any scale. Whether you're breaking ground for a new construction project, digging trenches, or clearing land, we prioritize accuracy and safety to ensure a seamless excavation process. Our dedication to delivering high-quality results has earned us a reputation as a reliable excavation service provider.</p>

						<div class=" mt-25">
							<h3>Frequently Asked Question</h3>
							<p>Welcome to the Precision Excavation Service Frequently Asked Questions (FAQ) section! Here, we've compiled essential information to address common queries about our top-tier excavation services. </p>
							<ul class="accordion-box wow fadeInRight">
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">What types of excavation services do you offer?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Precision Excavation Service offers a comprehensive range of excavation services, including site preparation, foundation digging, trenching, grading, and land clearing. Our experienced team is equipped to handle various projects in residential, commercial, and industrial settings.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block active-block">
									<div class="acc-btn active">How do you ensure safety during excavation projects?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">Safety is our top priority. We strictly adhere to industry safety standards and guidelines. Our team undergoes regular training, and we employ advanced safety measures and equipment to mitigate risks during excavation. Additionally, we conduct thorough site assessments to identify and address potential hazards.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">What equipment do you use for excavation projects?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">We use a fleet of modern and well-maintained excavation equipment, including excavators, bulldozers, loaders, and dump trucks. This allows us to efficiently handle a wide range of excavation tasks with precision.</div>
										</div>
									</div>
								</li>
								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">Can you handle both small and large-scale excavation projects?
										<div class="icon fa fa-plus"></div>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Absolutely. Precision Excavation Service is equipped to handle projects of all sizes, from small residential excavations to large-scale commercial and industrial projects. Our experienced team can tailor our services to meet the specific requirements of each project.</div>
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
