@extends('layouts.adbase')

@section('head')
<title> Admin - Add Blog </title>
@endsection

@section('content')

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                    <div class="col-sm-12 col-xl-9">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form method = "POST" action = "{{ route ('save-blog') }}"  enctype = "multipart/form-data">
                                @csrf
                                <h6 class="mb-2"> Add blog </h6>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Title </label>
                                    <input type="text" class="form-control" name = "title" id="title" value="{{ old('title') }}" aria-describedby="emailHelp">    
                                </div>
                                
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Image </label>
                                    <input class="form-control-sm bg-dark" name = "image" id="image" type="file">                                   
                                </div>
                                
                                <!-- <div class="mb-4">
                                    <label for="formFileSm" class="form-label"> Slug </label>
                                    <input type="text" class="form-control" name = "slug" id="slug" value="{{ old('slug') }}" aria-describedby="emailHelp">
                                </div> -->

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Content </label>
                                    <textarea style = "color=black; height: 1000px;" class="form-control" id="summernote" name = "content" value="{{ old('content') }}"></textarea>
                                            @error('content')
											<span class = "text-danger"> {{ $message}} </span>
											@enderror
                                </div>

                               
                                
                               
                                <button type="submit" class="btn btn-primary"> Add </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
@endsection

@section('scripts')
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
        });
    })
    </script>
@endsection