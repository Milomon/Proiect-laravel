@extends('layouts.blog-home')



@section('content')


<div class="row">
    <div class="col-md-8">
    <!-- Blog Post -->
  <h1>Search results:{{$query}}</h1>


<div class="row">

	@if($posts->count()>0)

		@foreach($posts as $post)


    <!-- Author -->
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

   

    <a class="btn btn-primary" href="/post/{{$post->id}}">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>



 @endforeach

    
	@else

	<h1 >

		No results found

	</h1>

	@endif
</div>




   

@endsection