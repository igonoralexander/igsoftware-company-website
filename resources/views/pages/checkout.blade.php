@extends('../layouts/main')

@section('head')
	<title> Xander-Store | CheckOut </title>	
@endsection

@section('content')
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
            <a href="/viewcart" class="stext-109 cl8 hov-cl1 trans-04">
				View
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				Check Out
			</span>
		</div>
	</div>
		
	<!-- Shoping Cart -->
		<div class="container m-t-20">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1"></th>
									<th class="column-2">Product Name</th>
									<th class="column-3">Price</th>
									<th class="">Qty</th>
									<th class="column-5"></th>
								</tr>

                                @php $tot = 0; $subtotal = 0; $totalprice = 0; @endphp

                                @foreach($cartitems as $item)
                                    <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="{{ asset ($item->products->product_img1) }}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{ $item->products->product_name }}</td>
                                            <td class="column-3">${{ $item->products->product_sellingprice }}</td>
                                            <td class="">{{ $item->prod_qty }}
                                                @php $tot = $item->products->product_sellingprice * $item->prod_qty; @endphp
                                            </td>
								         </tr>
                                         @php $subtotal += $item->products->product_sellingprice * $item->prod_qty; @endphp              
                                @endforeach
							</table>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">

                    <form method = "POST" action = "{{route ('place-order') }}">
                        @csrf

                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-20">
                                Order Details
                            </h4>

                            <div class="flex-w flex-t bor12 p-t-10 p-b-30">
                                <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Address:
                                    </span>
                                </div>

                                <!-- <a href = "">
                                    <span class="stext-110 cl2">
                                        Change
                                    </span>
                                </a> -->
                                
                                @foreach ($prof as $profile)
                                    <p class="mtext-100 cl2 p-t-4">
                                        {{$profile->fullname}}
                                        <br>
                                        {{$profile->mobileno}}
                                        <br>
                                        {{$profile->address}}, {{$profile->city}}, {{$profile->state}}, {{$profile->country}}.
                                    </p>

                                    <textarea style="display:none;" name ="address_details"> {{$profile->address}}, {{$profile->city}}, {{$profile->state}}, {{$profile->country}}. </textarea>
                                @endforeach
                            </div>

                            <div class="flex-w flex-t bor12 p-b-13">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Subtotal:
                                    </span>
                                </div>

                                <div class="size-209">
                                    <span class="mtext-110 cl2" >
                                        $ {{$subtotal}}
                                    </span>
                                    <input type = "hidden" name = "subtotal" value = "{{$subtotal}}">
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Delivery Fee: 
                                    </span>
                                </div> 

                                <div class="size-209">
                                    <span class="mtext-110 cl2">
                                        $ 10.00
                                    </span>
                                    <input type = "hidden" name = "delivery_fee" value = "10.00">
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-10 p-b-30">
                                <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Payment Method:
                                    </span>
                                </div>
                                <!-- <input type = "radio" name = "payment_method"><span class="mtext-110 cl2">
                                        Online Payment </span> <br>
                                <input type = "radio" name = "payment_method"><span class="mtext-110 cl2">
                                        Payment on Delivery </span> -->

                                <p class="mtext-100 cl2 p-t-2">
                                    Payment on Delivery
                                </p>
                                 <input type = "hidden" name = "payment_method" value = "Payment on Delivery">
                            </div>

                            <div class="flex-w flex-t bor12 p-t-10 p-b-30">
                                <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Delivery Method:
                                    </span>
                                </div>
                                    
                                <p class="mtext-100 cl2 p-t-2">
                                    Door Delivery
                                </p>
                                <input type = "hidden" name = "delivery_method" value = "Door Delivery">
                            </div>

                            @php $totalprice = $subtotal  + 10.00; @endphp

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total Price: 
                                    </span>
                                </div>

                                <div class="size-209 p-t-2">
                                    <span class="mtext-110 cl2">
                                         $ {{$totalprice}}
                                    </span>
                                    <input type = "hidden" name = "total_price" value = "{{$totalprice}}">
                                </div>
                            </div>

                            <button type = "submit" style = "font-size: 16px; font-weight: 600;" class="flex-c-m cl0 m-r-10 stext-101 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                PLACE ORDER
                            </button>
                        </div>
                    </form>

				</div>
			</div>
		</div>

@endsection