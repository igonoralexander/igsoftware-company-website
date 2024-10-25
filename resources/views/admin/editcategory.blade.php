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
                            <form method = "POST" action = "{{ route ('categories.update', $category->id) }}"  enctype = "multipart/form-data">
                                @method ('PUT')    
                                @csrf

                                <h6 class="mb-2"> Edit Category </h6>
                                    <div class="mb-4">
                                        <label for="formFileSm" class="form-label"> Name </label>
                                        <input type="text" class="form-control" name = "name" id="product_name" value="{{ $category->name }}" aria-describedby="emailHelp">
                                    </div>

                                <div class="mb-4">
                                    <label for="formFileSm" class="form-label"> Slug </label>
                                    <input type="text" class="form-control" name = "slug" id="slug" value="{{ $category->slug }}" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-2">
                                    <label for="formFileSm" class="form-label"> Description </label>
                                    <textarea class="form-control" name = "description"
                                        id="floatingTextarea" value="{{ $category->description }}" style="height: 150px;">{{ $category->description }} </textarea>
                                            @error('description')
											<span class = "text-danger"> {{ $message}} </span>
											@enderror
                                </div>

                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Status</label>
                                    <input type="checkbox" {{ $category->status == "1" ? 'checked' : '' }} name = "status">
                                    
                                    <label for="exampleInputEmail1" class="form-label">     </label>
                                    <label for="exampleInputEmail1" class="form-label">     </label>

                                    <label for="exampleInputEmail1" class="form-label"> Popular` </label>
                                    <input type="checkbox" {{ $category->popular == "1" ? 'checked' : '' }} name = "popular">      
                                </div>

                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label"> Meta Title </label>
                                    <input type="text" class="form-control" name = "meta_title" id="meta_title"
                                    value="{{ $category->meta_title }}" aria-describedby="emailHelp">
                                            @error('meta_title')
											<span class = "text-danger"> {{ $message}} </span>
											@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> Meta Description </label>
                                    <textarea class="form-control" name = "meta_descp"
                                        id="floatingTextarea" value="{{ $category->meta_descp }}" style="height: 150px;">{{ $category->meta_descp }} </textarea>
                                        @error('meta_descp')
											<span class = "text-danger"> {{ $message}} </span>
										@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> Meta Keywords </label>
                                    <textarea class="form-control" name = "meta_keywords"
                                        id="floatingTextarea" style="height: 150px;">{{ $category->meta_keywords }}</textarea>
                                        @error('meta_keywords')
											<span class = "text-danger"> {{ $message}} </span>
										@enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Image </label>
                                    <input class="form-control-sm bg-dark" name = "image" id="image" type="file">
                                    @if($category->image)
                                        <img src="{{ asset ($category->image) }} " style = "width: 100px; height: 100px;" alt = "">
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