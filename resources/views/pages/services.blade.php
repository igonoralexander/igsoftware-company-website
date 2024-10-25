@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Our Services')

@section('style')
	<style>

	</style>
@endsection

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-sec py-5">
        <div class="container">
            <div class="row align-items-center py-2">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 pr-lg-5">
                <h1 class="mb-4 text-center">WHAT WE DO?</h1>
                    <div class="col-lg-12 p-0 pt-5 pt-lg-0">
                        <div class="owl-carousel service-carousel position-relative">

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Website Development</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Website Design</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Digital Marketing</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Mobile App Development</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">SEO Optimization</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Logo Design</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Video Editing</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Email Marketing</h5>
                                <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                            </div>

                            <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                                <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                                <h5 class="mb-3">Mock Ups Design</h5>
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
                    </ul>
                    <a href="/contact" class="btn btn-primary mt-3 py-2 px-4">GET IN TOUCH</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="{{ asset ('design/img/feature.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

       <!-- Page Header Start -->
       <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Looking for exclusive digital services?</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/contact">LET'S TALK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
@endsection