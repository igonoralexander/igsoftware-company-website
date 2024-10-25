@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Our Projects')

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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Projects</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Our Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h1 class="mb-4">Our Projects</h1>
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
        </div>
    </div>
    <!-- Projects End -->

      <!-- Page Header Start -->
      <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">FEEL LIKE WORKING WITH US?</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/contact">GET IN TOUCH</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
@endsection