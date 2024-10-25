@extends('../layouts/admain')

@section('head')
<title> Admin - All Orders </title>
@endsection

@section('content')
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    @foreach($myorders->orderitems as $item)
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="bg-secondary rounded-top p-4"> 
                                    <div class="mb-3">
                                        <h6 for="formFileSm" class="form-label"> Order Item </h6>
                                    </div>
                                    <div class="mb-2">
                                        <img src="{{ asset($item->products->product_img1) }}" alt="{{$item->title}}" width="100" height="100">
                                    </div>
                                    <div class="mb-2">
                                        <p> {{ $item->products->product_name }} </p> 
                                        <p> Qty: {{ $item->qty }} </p> <p> Price: ${{ $item->price }} </p>
                                    </div>
                                 </div>
                        </div>
                    @endforeach

                    <div class="col-sm-12 col-xl-8">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Order Status</h6>
                                <form method = "POST" action = "{{ route ('update-order', $myorders->id) }}">
                                    @method ('PUT')    
                                    @csrf
                                    <select class="form-select form-select-sm mb-4" name = "order_status" aria-label=".form-select-sm example">
                                        <option selected>Open this select menu</option>
                                        <option {{ $myorders->status == '0' ? 'selected':'' }} value="0"> Pending</option>
                                        <option {{ $myorders->status == '1' ? 'selected':'' }} value="1">Delivered</option>
                                    </select>
                                        <button type="submit" class="btn btn-primary btn-sm">  Update </button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>


                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="h-100 bg-secondary rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="mb-0">Payment Information</h6>
                                </div>
                                <div class="d-flex align-items-center border-bottom py-3">
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-2">Payment Method</h6>
                                        </div>
                                        <span>{{$myorders->payment_method}}</span>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center pt-3">
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Payment Details</h6>
                                        </div>
                                            <span>Items Total: ${{$myorders->subtotal}}</span>
                                            <p> Delivery Fee: ${{$myorders->delivery_fee}}</p>
                                            <span>Total Price: ${{$myorders->total_price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="h-100 bg-secondary rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="mb-0">Delivery Information</h6>
                                </div>
                                <div class="d-flex align-items-center border-bottom py-3">
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-2">Delivery Method</h6>
                                        </div>
                                        <span>{{$myorders->delivery_method}}</span>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center pt-3">
                                    <div class="w-100 ms-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Shipping Details</h6>
                                        </div>
                                            <span>Items Total: ${{$myorders->address_details}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Widgets End -->
@endsection