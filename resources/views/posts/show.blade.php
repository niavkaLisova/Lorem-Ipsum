@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-dark">Go Back</a>
	<h1>{{$post->title}}</h1>
	<img class="img-fluid rounded" src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image">
	<div>{!! $post->body !!}</div>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<hr>

	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a class="btn btn-dark" href="/posts/{{$post->id}}/edit">Edit</a>

			{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'DELETE', 'class' => 'float-right']) !!}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
			{!! Form::close() !!}
		@endif
	@endif
@endsection