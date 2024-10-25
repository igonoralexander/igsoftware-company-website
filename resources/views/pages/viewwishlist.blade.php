@extends('../layouts/main')

@section('head')
	<title> Xander-Store | Saved Items </title>	
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
				Saved Items
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
									<th class="column-1"></th>
									<th class="column-2">Product</th>
									<th class="column-3">Price</th>
								</tr>

                                @foreach($whishlist as $item)
                                    <tr class="table_row">
                                        
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="{{ asset ($item->products->product_img1) }}" alt="{{ $item->products->product_name }}">
                                                </div>
                                            </td>
                                            
                                            <td class="column-2">{{ $item->products->product_name }}</td>
                                            <td class="column-3">${{ $item->products->product_sellingprice }}</td>
                                            </td>
                                            <td class="column-4">
                                                <a href = "{{ route ('vsprod', $item->prod_id) }}">
                                                    <button type = "submit" style = "font-size: 12px; font-weight: 600;" class="cl0 m-r-10 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                        BUY NOW
                                                    <button>
                                                </a>
                                            </td>

                                            <td class="column-5">
                                                <form action="{{ route ('remove-saved-item', $item->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type = "submit" style = "font-size: 12px; font-weight: 600;" class="cl0 m-r-10 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                            <i class = "fa fa-trash"></i>  Remove
                                                    <button>
                                                </form>
                                            </td>
								         </tr>            
                                @endforeach
							</table>
						</div>
				</div>
                      
					</div>
				</div>
			</div>
		</div>
@endsection