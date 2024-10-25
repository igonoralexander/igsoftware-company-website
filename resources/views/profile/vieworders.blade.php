@extends('../layouts/profmain')

@section('head')
	<title> Profile | My Orders </title>	
@endsection

@section('content')
           <!-- partial -->
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                  </div>
                </div>
              </div>
            </div>

            <div class = "row">
             <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order Details</h4>
                            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h5 class="mb-3">Order No: {{$myorders->tracking_id}} </h5>
                                    <p class="text-muted mb-2">Items Total: {{$total}} Items </p>
                                    <p class="text-muted mb-2">Placed on: {{date ('d-m-Y', strtotime ($myorders->created_at)) }}</p>
                                    <p class="text-muted mb-2">Total Price: ${{$myorders->total_price}}</p>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">ITEMS IN YOUR ORDER</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        @foreach($myorders->orderitems as $item)
                            <div class="preview-list">
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumnail">
                                        <div class="preview-icon bg-primary">
                                            <img src="{{asset ($item->products->product_img1) }}" width = "100px" height = "100px" alt="{{ ($item->products->product_name) }}"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow">
                                        <div class="flex-grow">
                                            <h4 class="preview-subject">{{$item->products->product_name }}</h4>
                                            <p class="text-muted mb-3">Qty: {{$item->qty }}</p>
                                            <p class="text-muted mb-0">Price: ${{$item->price}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
             
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Payment Information</h4>
                            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h5 class="mb-3">Payment Method</h5>
                                    <p class="text-muted mb-2">{{ $myorders->payment_method }}</p>
                                </div>
                            </div>
                            
                            <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                <div class="text-md-center text-xl-left">
                                    <h5 class="mb-3">Payment Details</h5>
                                    <p class="text-muted mb-2">Items Total: ${{$myorders->subtotal}}</p>
                                    <p class="text-muted mb-2">Delivery Fee: {{$myorders->delivery_fee}}</p>
                                    <p class="text-muted mb-2">Total Price: ${{$myorders->total_price}}</p>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Delivery Information</h4>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                            <div class="preview-item border-bottom">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h5 class="preview-subject mb-2">Delivery Method</h5>
                                    <p class="text-muted mb-2">{{$myorders->delivery_method}}</p>
                                </div>
                                </div>
                            </div>
                            <div class="preview-item border-bottom">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h5 class="preview-subject mb-2">Shipping Address:</h5>
                                        <p class="text-muted mb-2">{{$data->fullname}}</p>
                                        <p class="text-muted mb-2">{{$myorders->address_details}}</p>
                                        <p class="text-muted mb-2">{{$data->mobileno }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="preview-item">
                                <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                        <h5 class="preview-subject">Delivered On:</h5>
                                        <p class="text-muted mb-0">New project discussion</p>
                                    </div>
                                    </div>
                            </div>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
@endsection