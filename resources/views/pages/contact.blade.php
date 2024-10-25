@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle: 'IG Software Nig - Contact Us')

@section('style')
	<style>

	</style>
@endsection

@section('content')

    <!-- Contact Start -->
		<div class="container-fluid bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
							<div class="d-inline-flex border border-secondary p-4 mb-4">
								<h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
								<div class="d-flex flex-column">
									<h4>Our Office</h4>
									<p class="m-0 text-white">1 Igbo Elerin Field, Ojo-Okokomaiko, Lagos, Nigeria</p>
								</div>
							</div>
							<div class="d-inline-flex border border-secondary p-4 mb-4">
								<h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
								<div class="d-flex flex-column">
									<h4>Email Us</h4>
									<p class="m-0 text-white">info@igsoftware.com.ng</p>
								</div>
							</div>
							<div class="d-inline-flex border border-secondary p-4">
								<h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
								<div class="d-flex flex-column">
									<h4>Call Us</h4>
									<p class="m-0 text-white">+2349070111277</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
						<div class="contact-form">
							<div id="success"></div>

							@if(session() -> has ('message') ) 
								<div class = "alert alert-success">
								{{ session()->get('message') }}
								</div>
							@endif
							<form action="{{route('send.email') }}" method = "POST">
				              @csrf

								<div class="control-group">
									<input type="text" class="form-control p-4" name = "name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
									<p class="help-block text-danger"></p>
								</div>
								<div class="control-group">
									<input type="email" class="form-control p-4" name = "email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
									<p class="help-block text-danger"></p>
								</div>
								<div class="control-group">
									<input type="text" class="form-control p-4" name = "subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
									<p class="help-block text-danger"></p>
								</div>
								<div class="control-group">
									<textarea class="form-control p-4" rows="6" name = "content" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
									<p class="help-block text-danger"></p>
								</div>
								<div>
									<button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    <!-- Contact End -->

@endsection