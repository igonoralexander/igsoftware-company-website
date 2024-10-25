@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Our Blog')

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
						<h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Blog</h1>
					</div>
					<div class="col-md-6 text-center text-md-right">
						<div class="d-inline-flex align-items-center">
							<a class="btn btn-outline-primary" href="/">Home</a>
							<i class="fas fa-angle-double-right text-primary mx-2"></i>
							<a class="btn btn-outline-primary disabled" href="">All Blog</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    <!-- Page Header Start -->
    
    <!-- Blog Start -->
        <div class="container-fluid bg-light pt-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col text-center mb-4">
                        <h1 class="mb-4">Read Articles From Our Blog</h1>
                    </div>
                </div>
                <div class="row pb-3">

                <div class="row pb-3">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-4">
                    <a href="{{ route ('single-blog', $blog->id) }}"> 
                            <div class="card border-0 mb-2">
                                <img class="card-img-top" src="{{ asset ($blog->image) }}" alt="{{$blog->title}}">
                                <div class="card-body bg-white p-4">
                                    <div class="d-flex align-items-center mb-3">
                                    <h5 class="m-0 text">{{ $blog->title }}</h5>
                                    </div>
                                        <p>{!! Str::limit($blog->content, 150) !!}</p>
                                
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
            </div>
        </div>
    <!-- Blog End -->
@endsection