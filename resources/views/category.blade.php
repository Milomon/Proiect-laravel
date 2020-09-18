@extends('layouts.blog-home')



@section('content')


<div class="row">
    <div class="col-md-8">
    <!-- Blog Post -->


@foreach($category->posts as $post)

  <h1>{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        by {{$post->user->name}}
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

    <hr>

    <!-- Preview Image -->
    <img height="1000" class="img-responsive" src="{{$post->photo ? $post->photo->file : photoPlaceholder()}}" alt="">

    <hr>

    <!-- Post Content -->


    <a class="btn btn-primary" href="/post/{{$post->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


 @endforeach
    



   

@endsection