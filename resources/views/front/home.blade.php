@extends('layouts.blog-home')

@section('content')

 <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- First Blog Post -->

            @if($posts)

            @foreach($posts as $post)


            <h2>
            {{$post->title}}
            </h2>
            <p class="lead">
                by {{$post->user->name}}
            </p>
            <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>
            <hr>
             <img  class="img-responsive"  src="{{$post->photo ? $post->photo->file : photoPlaceholder()}}" alt="">
            <hr>

             <hr>
            <a class="btn btn-primary" href="/post/{{$post->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
            @endforeach
      
            @endif


            <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
            {{$posts->render()}}
        </div>
    </div>
@endsection


