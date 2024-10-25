@extends('layouts.adbase')

@section('head')
<title> Admin - Edit Blog </title>
@endsection

@section('content')
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    @foreach($blogs as $blog)
                        <div class="col-12">
                            <div class="bg-secondary rounded-top p-4"> 
                                    <div class="mb-3">
                                        <h1 for="formFileSm" class="form-label"> {{$blog->title}} </h1>
                                    </div>

                                    <div class="mb-3">
                                        <img src="{{ asset($blog->image) }}" alt="{{$blog->title}}" width="500" height="300">
                                    </div>
                                        <p> {!! asset($blog->content) !!} </p>
                                    <div class="mt-3 mb-3">
                                        <a href="{{ route ('blogs.edit', $blog->id) }}"><button type="submit" class="btn btn-primary"> Edit </button></a>
                                    </div>

                                    <div class="mt-3 mb-3">
                                        <form action="{{ route ('blogs.delete', $blog->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-primary"> Delete </button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    @endforeach
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