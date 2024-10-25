@extends('../layouts/admain')

@section('head')
<title> Admin - User Details </title>
@endsection

@section('content')
           <!-- Recent Sales Start -->
           <div class="container-fluid pt-4 px-4">
            <div class="row g-4">

                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">User Details</h6>
                                <a href="Back">Back</a>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <!-- <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-2">Full Name:</h6>
                                    </div>
                                    <span> {{$users->fullname}}</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <!-- <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-2">Mobile No:</h6>
                                    </div>
                                    <span>{{$users->mobileno}}</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-center border-bottom py-3">
                                <!-- <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-2">Email Address:</h6>
                                    </div>
                                    <span>{{$users->email}}</span>
                                </div>
                            </div>

                            @foreach($prof->profiles as $pro)
                                <div class="d-flex align-items-center border-bottom py-3">
                                    <!-- <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-2">Gender: </h6>
                                        </div>
                                        <span> {{ $pro->gender}} </span>
                                    </div>
                                </div>  

                                <div class="d-flex align-items-center border-bottom py-3">
                                    <!-- <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-2">Date of Birth: </h6>
                                        </div>
                                        <span> {{ $pro->dob}} </span>
                                    </div>
                                </div>  

                            @endforeach

                                <div class="d-flex align-items-center pt-3">
                                    <!-- <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-3">Address</h6>
                                        </div>
                                        @foreach($prof->profiles as $pro)
                                            <p>{{ $pro->address}}, {{ $pro->city }}, {{ $pro->state }}, {{ $pro->country }}.</p>
                                        @endforeach

                                    </div>
                                </div>  
                            </div>
                    </div>

                </div>
            </div>
@endsection