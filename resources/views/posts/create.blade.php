@extends('layouts.app')

@section('content')
	<h1>Create Post</h1>
	{!! Form::open(array('action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
		<div class="form-grpup">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title'])}}
		</div>
		<div class="form-grpup">
			{{Form::label('body', 'Body')}}
			{{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'body text...', 'id' => 'article-ckeditor'])}}
		</div>
		<div class="form-group">
			{{Form::file('cover_image')}}
		</div>
		{{ Form::submit('Submit!', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection