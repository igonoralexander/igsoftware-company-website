@extends('../layouts/main')

@section('head')
	<title> Xander-Store | Shopping Cart </title>	
@endsection

@section('content')
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		
	<!-- Shoping Cart -->
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
                                    <th class="column-6"></th>
								</tr>

                                @php $tot = 0; $subtotal = 0; $totalprice = 0; @endphp

                                @foreach($cart as $item)
                                    <tr class="table_row">
                                        
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="{{ asset ($item->products->product_img1) }}" alt="IMG">
                                                </div>
                                            </td>
                                            
                                            <td class="column-2">{{ $item->products->product_name }}</td>
                                            <td class="column-3">${{ $item->products->product_sellingprice }}</td>
                                            <td class="column-4">
                                                <form action = "{{ route ('update-cart', $item->id) }}" method = "POST">
                                                    @method ('PUT')    
                                                    @csrf

                                                        <input type = "hidden" value = "{{ $item->user_id }}" name = "user_id">
                                                        <input type = "hidden" value = "{{ $item->prod_id }}" name = "prod_id">
                                                        
                                                        @if($item->products->qty >= $item->prod_qty)
                                                            <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                            
                                                                <button type = "submit" class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                                </button>

                                                                <input class="mtext-104 cl3 txt-center num-product" type="text" name="prod_qty" value="{{ $item->prod_qty }}">

                                                                <button type = "submit" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                                </button>
                                                            </div>
                                                            
                                                            @php $tot = $item->products->product_sellingprice * $item->prod_qty; @endphp

                                                        @else

                                                        <h6> Out of Stock </h6>

                                                        @endif
      
                                                </form>
                                            </td>

                                            <td class="column-5">${{$tot}}</td>

                                            <td class="column-6">
                                                <form action="{{ route ('remove-item', $item->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type = "submit" style = "font-size: 12px; font-weight: 600;" class="cl0 m-r-10 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                            <i class = "fa fa-trash"></i>  Remove
                                                    <button>
                                                </form>
                                            </td>
								         </tr>
                                         @php $subtotal += $item->products->product_sellingprice * $item->prod_qty; @endphp              
                                @endforeach
							</table>
						</div>

                            <div class="flex-w flex-t bor12 m-t-10 p-b-13">
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

                            @php $totalprice = $subtotal  + 10.00; @endphp

                            <a href = "/checkout">
                                <button style = "font-size: 16px; font-weight: 600;" class="flex-c-m cl0 m-t-10 stext-101 size-101 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                    PROCEED TO CHECKOUT
                                </button>
                            </a>
				</div>
                      
					</div>
				</div>
			</div>
		</div>
@endsection