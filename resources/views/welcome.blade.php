@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Home')

@section('style')
	<style>

	</style>
@endsection


@section('content')

@include('layouts.frontend.inc.undernav')

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset ('design/img/first.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">grow your business online with our </h4>
                            <h3 class="display-3 text-white mb-md-4">Website Development and Design</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset ('design/img/second.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">achieve your online goals by</h4>
                            <h3 class="display-3 text-white mb-md-4">Getting your Desired Software Develop</h3>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 py-5 px-3">
                        <img class="" width = "300px" height = "300px" src="{{ asset ('design/img/about_1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">We Are A Web Development and Design Firm</h1>
                    <p>IG Software Nig is a website development and design firm that is dedicated to helping other business grow online and reach their desired goals through our comprehensive suite of services. IG Software Nig is growing to become one of the leading providers of website development and design solutions.<div class="row py-2">
                      <div class="col-sm-6 mb-4">
                           <a href="/aboutus" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                           </div>
                           
                        <div class="col-sm-12">
                            <h3 class="mb-4">Our Core Values</h3>
                        </div>
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


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">Website Design and Development</h1>
                    <p>We design all types of websites such as Business/Company, Personal/Portfolio, Church/Organization, Ecommerce. We also develop various manamgement system such as Hotel Management System, School Management Syste e.t.c</p>
                    <a href="/services" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">SEO Optimization</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Content Writing</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>

						<div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Copywriting</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>

                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Mobile App Development</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light">
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
                <div class="col-lg-5 mt-5 py-5 pr-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center overflow-hidden">
                        <img class="" width = "300px" height = "300px" src="{{ asset ('design/img/about_1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Projects</h6>
                    <h1 class="mb-4">Some Of Our Projects</h1>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
				@foreach ($project as $item)
					<div class="mb-4 col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
						<div class="position-relative overflow-hidden">
							<a class="btn btn-outline-primary m-1" href="{{$item->link}}"><i class="fa fa-link"></i>
								<h4 class="mb-4" style = "color: black;">{{$item->project_name}}</h4>
								<div class="portfolio-img d-flex align-items-center justify-content-center">
									<img class="img-fluid" src="{{asset ($item->image) }}" alt="">
								</div>
								<div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
								    
									<h4 class="mb-4" style = "color: white;">Click to view website</h4>
									<div class="d-flex align-items-center justify-content-center">
									</div>
								</div>
							</a>
						</div>
					</div>
				@endforeach
            </div>
            <a href="/projects" class="btn btn-primary mt-3 py-2 px-4">View More</a>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Testimonial Start -->
        <div class="container-fluid pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 py-5 pr-md-5">
                        <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonials</h6>
                        <h1 class="mb-4 section-title">What Our Clients Say</h1>
                        <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
    						@foreach ($testimonial as $test)
    							<div class="d-flex flex-column">
    								<div class="d-flex align-items-center mb-3">
    									<img class="img-fluid rounded-circle" src="{{asset ($test->image) }}" style="width: 60px; height: 60px;" alt="{{$test->client_name}}">
    									<div class="ml-3">
    										<h5>{{$test->client_name}}</h5>
    										<i>Profession</i>
    									</div>
    								</div>
    								<p>{{$test->content}}</p>
    							</div>
    						@endforeach
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex flex-column align-items-center justify-content-center overflow-hidden">
                            <img class="h-100" src="{{asset ('design/img/testimonial.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                    <h1 class="mb-4">Read Our Articles</h1>
                </div>
            </div>
            
            <div class="row pb-3">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-2">
                        <a href="{{ route ('single-blog', $blog->id) }}">  
                            <div class="card border-0 mb-2">
                                <img class="card-img-top" src="{{ asset ($blog->image) }}" alt="">
                                <div class="card-body bg-white p-4">
                                    <div class="d-flex align-items-center mb-3">
                                    <h5 class="m-0 text">{{ $blog->title }}</h5>
                                    </div>
                                        <p>{!! substr(strip_tags($blog->content), 0, 150) !!}</p>
                                        <div class="d-flex">
                                            <small class="mr-3"><i class="fa fa-user text-primary"></i> By Admin</small>
                                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                        </div>
                                    </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="/blog" class="btn btn-primary py-2 px-4">View More Blogs</a>
            {!! $blogs->links() !!}
        </div>
    </div>
    <!-- Blog End -->

@endsection

  


  