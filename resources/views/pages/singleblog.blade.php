@extends('layouts.frontend.frontend')
@section('pageTitle', isset($pageTitle) ? $pageTitle : $blog->title)

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
						<h1 class="mb-4 mb-md-0 text-primary text-uppercase">Blog Details</h1>
					</div>
					<div class="col-md-6 text-center text-md-right">
						<div class="d-inline-flex align-items-center">
							<a class="btn btn-outline-primary" href="/">Home</a>
							<i class="fas fa-angle-double-right text-primary mx-2"></i>
							<a class="btn btn-outline-primary disabled" href="">Blog Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    <!-- Page Header Start -->
    
    
    <!-- Detail Start -->
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h1 class="mb-4 section-title">{{$blog->title}}</h1>
                    <div class="d-index-flex mb-2">
                        <span class="mr-3"> <i class="fa fa-user text-primary"></i> By Admin</span>
                        <!-- <span class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</span> -->
                        <!-- <span class="mr-3"><i class="fa fa-comments text-primary"></i> 15</span> -->
                    </div>
                </div>

                <div class="mb-5">
                    <img class="img-fluid w-100 mb-4" src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                    <p>{!! $blog->content !!}</p>
                </div>

                <!-- <div class="mb-5 mx-n3">
                    <h3 class="mb-4 ml-3 section-title">Related Post</h3>
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="card border-0 mx-3">
                            <img class="card-img-top" src="img/blog-1.jpg" alt="">
                            <div class="card-body bg-light p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                    <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                                </div>
                                <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mx-3">
                            <img class="card-img-top" src="img/blog-2.jpg" alt="">
                            <div class="card-body bg-light p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                    <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                                </div>
                                <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mx-3">
                            <img class="card-img-top" src="img/blog-3.jpg" alt="">
                            <div class="card-body bg-light p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                    <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                                </div>
                                <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="mb-5">
                    <h3 class="mb-4 section-title">3 Comments</h3>
                    <div class="media mb-4">
                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="bg-light p-5">
                    <h3 class="mb-4 section-title">Leave a comment</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div> -->
            </div>

            <!-- <div class="col-lg-4 mt-5 mt-lg-0"> -->
                <!-- <div class="d-flex flex-column text-center bg-secondary mb-5 py-5 px-4">
                    <img src="img/user.jpg" class="img-fluid mx-auto mb-3" style="width: 100px;">
                    <h3 class="text-primary mb-3">John Doe</h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum, ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                </div>
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- <div class="mb-5">
                    <h3 class="mb-4 section-title">Categories</h3>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Design
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Development
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Online Marketing
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Keyword Research
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email Marketing
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div> -->
                <!-- <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid">
                </div> -->
                <!-- <div class="mb-5">
                    <h3 class="mb-4 section-title">Recent Post</h3>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="mb-5">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid">
                </div> -->
                <!-- <div class="mb-5">
                    <h3 class="mb-4 section-title">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>
                <div class="mb-5">
                    <img src="img/blog-3.jpg" alt="" class="img-fluid">
                </div>
                <div>
                    <h3 class="mb-4 section-title">Plain Text</h3>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.
                </div> -->
            <!-- </div> -->
        </div>
    </div>
    <!-- Detail End -->
   
@endsection