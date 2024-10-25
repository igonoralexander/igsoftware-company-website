@extends('layouts.adbase')

@section('head')
<title> Admin - Edit Blog </title>
@endsection

@section('content')

        <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row g-4">
                            <form method = "POST" action = "{{ route('blogs.update', $blogs->id) }}"  enctype = "multipart/form-data">
                                @method ('PUT')
                        		@csrf     
                
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Image </label>
                                    <input class="form-control form-control-sm bg-dark" style = "width:40%" name = "image" type="file" value = "{{ $blogs->image }}">
                                </div>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"> Title </label>
                                    <input class="form-control form-control-sm bg-dark" style = "width:40%" name = "title" value = "{{ $blogs->title }}" type="text">
                                </div>

                                <div class="col-12 text-center text-sm-start">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h5 style="color:black;">
                                                Blog Contents
                                            </h5>
                                        </div>    

                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea style="width: 100%; height: 425px;" name = "content" id="summernote" >
                                            {{ $blogs->content }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary"> Update </button> 
                                </div>
                            </form>
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