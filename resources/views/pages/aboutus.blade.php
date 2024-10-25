@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - About Us')

@section('style')
	<style>

	</style>
@endsection

@section('content')

 	<!-- Page Header Start -->
 		<div class="container-fluid bg-sec py-5">
			<div class="container">
				<div class="row align-items-center py-4">
					<div class="col-md-6 text-center text-md-left">
						<h1 class="mb-4 mb-md-0 text-primary text-uppercase">About Us</h1>
					</div>
					<div class="col-md-6 text-center text-md-right">
						<div class="d-inline-flex align-items-center">
							<a class="btn btn-outline-primary" href="/">Home</a>
							<i class="fas fa-angle-double-right text-primary mx-2"></i>
							<a class="btn btn-outline-primary disabled" href="">About Us</a>
						</div>
					</div>
				</div>
			</div>
    	</div>
    <!-- Page Header Start -->

    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                <h1 class="mb-4">About Us</h1>
                    <h1 class="mb-4 section-title">We Are A Web Development and Design Firm</h1>
                    <p>
                        IG Software Nig is a website development and design firm that is dedicated to helping other business grow online and reach their desired goals through our comprehensive suite of services. IG Software Nig is growing to become one of the leading providers of website development and design solutions.
                    <p>
                        We specialize in web design and development, Search Engine Optimization. Our services are tailored to meet the specific needs of our clients, and our team takes the time to understand the unique challenges faced by our clients. We strive to create innovative and effective strategies that help build our client’s brands and deliver results.                        
                    <p>
                        IG Software Nig values clients’ opinions and feedback, and we are continually looking for ways to improve our services and solutions. We believe that our clients are our best advocates, and we strive to maintain a close relationship with them so that we can continue providing the best possible online experience.
                    <p>
                        The target audience for IG Software are the business owners who seek to operate and manage their businesses effectively and seamlessly
                    <h1 class="mb-4">Our Mission</h1>
                    <p>
                        At IG Software Nig, we are committed to helping our clients achieve their online goals. We understand the challenges that come with launching and managing a successful website, therefore our mission is to provide our clients with the quality tools and resources needed to make their online dreams a reality.
                    <h1 class="mb-4">Our Vision</h1>
                        Our vision is to work closely with our clients to develop cost-effective and innovative solutions. Our team works tirelessly to ensure that our clients are satisfied with their finished products. We understand that our client’s success is our success, and we strive to provide our clients with quality services that exceed their expectations.
                    <div class="row py-2">

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Project Planning</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">High Quality Codes</h5>
                            </div>
                        </div>
						<div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Creative Coders</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Responsive Templates</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">SEO Optimization</h5>
                            </div>
                        </div>

						<div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">24/7 Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">We Serve All Industries</h1>
                    <p class="mb-4"> We stay on top of our industry by being experts in yours. We measure our success by the results we drive for our clients.</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
						<li><h5><i class="far fa-check-square text-primary mr-3"></i>We create experiences </h5></li>
						<li><h5><i class="far fa-check-square text-primary mr-3"></i>Fast and Secure</h5></li>
						<li><h5><i class="far fa-check-square text-primary mr-3"></i>Quality and Reliability</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Stunning Flexibility</h5></li>
                    </ul>
                    <a href="/contact" class="btn btn-primary mt-3 py-2 px-4">GET IN TOUCH</a>
                </div>
                <div class="col-lg-5 py-5 pr-lg">
                    <div class="d-flex flex-column align-items-center justify-content-center overflow-hidden">
                        <img class="" width = "300px" height = "300px" src="{{ asset ('design/img/about_1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
                        <h1 class="mb-0 text-center">Meet Our Team Members</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" width = "300px" height = "250px" src="{{asset ('design/img/DSC_6367.JPG') }}" alt="">
                              <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://twitter.com/alexanderigonor"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://web.facebook.com/lexphoenix.diesel/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="https://www.linkedin.com/in/igonor-alexander-14035a262/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Igonor Alexander</h5>
                                <p class="m-0 text-white">CEO/Founder</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100"  width = "300px" height = "250px" src="{{('design/img/team-2.png')}}" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://web.facebook.com/daninton.v.melva"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="https://www.linkedin.com/in/igonor-alexander-14035a262/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Ekenobi Danon Kelechi</h5>
                                <p class="m-0 text-white">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" width = "300px" height = "250px" src="{{('design/img/mike.jpg')}}" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.facebook.com/michael.adesoji"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="https://www.linkedin.com/in/adesojimichael"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Michael Adesoji</h5>
                                <p class="m-0 text-white">Content Writer</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" width = "300px" height = "250px" src="{{('design/img/mike.jpg')}}" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Name Goes Here</h5>
                                <p class="m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection


