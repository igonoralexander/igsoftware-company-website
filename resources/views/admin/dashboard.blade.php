@extends('layouts.adbase')

@section('head')
<title> Admin - Add Products </title>
@endsection

@section('content')
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form method = "POST" action = "{{ route ('add-testimonial') }}"  enctype = "multipart/form-data">
                                @csrf

                                <h6 class="mb-4"> Add Testimonial </h6>


                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Client's Name </label>
                                    <input class="form-control" name = "client_name" id="image" value="{{ old('image') }}" type="text">
                                </div>

                                <div class="mb-2">
                                    <label for="formFileSm" class="form-label"> Content </label>
                                    <textarea class="form-control" name = "content" value="{{ old('content') }}" id="floatingTextarea" style="height: 150px;"></textarea>
                                            @error('content')
											<span class = "text-danger"> {{ $message}} </span>
											@enderror
                                </div>


                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Image </label>
                                    <input class="form-control-sm bg-dark" name = "image" id="image" value="{{ old('image') }}" type="file">
                                </div>

                                <button type="submit" class="btn btn-primary"> Add </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form method = "POST" action = "{{ route ('add-project') }}"  enctype = "multipart/form-data">
                                @csrf

                                <h6 class="mb-4"> Add Projects </h6>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Project Name </label>
                                    <input class="form-control" name = "project_name" id="link" value="{{ old('project_name') }}" type="text">
                                </div>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Link </label>
                                    <input class="form-control" name = "link" id="link" value="{{ old('link') }}" type="text">
                                </div>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Image </label>
                                    <input class="form-control-sm bg-dark" name = "image" id="image" value="{{ old('image') }}" type="file">
                                </div>

                                <button type="submit" class="btn btn-primary"> Add </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection

