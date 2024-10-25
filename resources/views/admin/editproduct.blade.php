@extends('../layouts/admain')

@section('head')
<title> Admin - Edit Product </title>
@endsection

@section('content')

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form method = "POST" action = "{{ route ('products.update', $product->id) }}"  enctype = "multipart/form-data">
                                @method ('PUT')    
                                @csrf

                                <h3 class="mb-2"> Edit Products </h3>
                                <h6 class="mb-4"> Please fill all fields </h6>
                                
                                @if(session() -> has ('message') ) 
                                    <div class = "alert alert-success col-6">
                                     {{ session()->get('message') }}
                                     </div>
                                @endif
    
                                <div class="mb-4">
                                    <label  for="formFileSm" class="form-label"> Category </label>
                                    <select class="form-select" name = "cate_id" id="cate_id" aria-label="Floating label select example">
                                        <option> </option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item ->id }}">{{ $item -> name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="formFileSm" class="form-label"> Product Name </label>
                                    <input type="text" class="form-control" name = "product_name" id="product_name" value="{{ $product->product_name }}" placeholder="Product Name"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-4">
                                    <label for="formFileSm" class="form-label"> Slug </label>
                                    <input type="text" class="form-control" name = "slug" id="slug" value="{{ $product->slug }}" placeholder="Slug"
                                        aria-describedby="emailHelp">
                                </div>


                                <div class="mb-4">
                                    <label for="formFileSm" class="form-label"> Original Price </label>
                                    <input type="text" class="form-control" name = "product_originalprice" id="product_originalprice" value="{{ $product->product_originalprice }}" placeholder="Product Original Price"
                                        aria-describedby="emailHelp">

                                </div>

                                <div class="mb-4">
                                    <label for="formFileSm" class="form-label"> Selling Price </label>                                        
                                    <input type="text" class="form-control" name = "product_sellingprice" id="product_sellingprice" value="{{ $product->product_sellingprice }}" placeholder = "Product Selling Price"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-2">
                                    <label for="formFileSm" class="form-label"> Small Description </label>
                                    <textarea class="form-control" name = "product_smalldesc"
                                        id="floatingTextarea" value="{{ $product->product_smalldesc }}" style="height: 150px;"> {{ $product->product_smalldesc }} </textarea>
                                            @error('product_smalldesc')
											<span class = "text-danger"> {{ $message}} </span>
											@enderror
                                </div>

                                <div class="mb-2">
                                    <label for="formFileSm" class="form-label"> Big Description </label>
                                    <textarea class="form-control" name = "product_bigdesc"
                                        id="floatingTextarea" value="{{ $product->product_bigdesc }}" style="height: 150px;"> {{ $product->product_bigdesc }} </textarea>
                                            @error('product_bigdesc')
											<span class = "text-danger"> {{ $message}} </span>
											@enderror
                                </div>

                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Status</label>
                                    <input type="checkbox" {{ $product->status == "1" ? 'checked' : '' }} name = "status">
                                    
                                    <label for="exampleInputEmail1" class="form-label">     </label>
                                    <label for="exampleInputEmail1" class="form-label">     </label>

                                    <label for="exampleInputEmail1" class="form-label"> Trending </label>
                                    <input type="checkbox" {{ $product->trending == "1" ? 'checked' : '' }} name = "trending">      
                                </div>

                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label"> Quantity </label>
                                    <input type="number" class="form-control" name = "qty" id="qty" value = "{{ $product->qty }}">
                                </div>

                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label"> Meta Title </label>
                                    <input type="text" class="form-control" name = "meta_title" id="meta_title"
                                    value="{{ $product->meta_title }}" aria-describedby="emailHelp">
                                            @error('meta_title')
											<span class = "text-danger"> {{ $message}} </span>
											@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> Meta Description </label>
                                    <textarea class="form-control" name = "meta_descp"
                                        id="floatingTextarea" value="{{ $product->meta_descp }}" style="height: 150px;"> {{ $product->meta_descp }} </textarea>
                                        @error('meta_descp')
											<span class = "text-danger"> {{ $message}} </span>
										@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> Meta Keywords </label>
                                    <textarea class="form-control" name = "meta_keywords"
                                        id="floatingTextarea" style="height: 150px;">{{ $product->meta_keywords }}</textarea>
                                        @error('meta_keywords')
											<span class = "text-danger"> {{ $message}} </span>
										@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Image 1 </label>
                                    <input class="form-control-sm bg-dark" name = "product_img1" id="product_img1" type="file">
                                    @if($product->product_img1)
                                        <img src="{{ asset ($product->product_img1) }} " style = "width: 100px; height: 100px;" alt = "">
                                    @endif
                                </div>

                                <div class="mb-3">   
                                    <label for="formFileSm" class="form-label"> Image 2 </label>
                                    <input class="form-control-sm bg-dark" name = "product_img2" id="product_img2" type="file">
                                    @if($product->product_img2)
                                        <img src="{{ asset ($product->product_img2) }} " style = "width: 100px; height: 100px;" alt = "">
                                    @endif
                                </div>
                                
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Image 3 </label>
                                    <input class="form-control-sm bg-dark" name = "product_img3" id="product_img3" type="file">
                                    @if($product->product_img3)
                                        <img src="{{ asset ($product->product_img3) }} " style = "width: 100px; height: 100px;"alt = "">
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary"> Update </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Form End -->
@endsection