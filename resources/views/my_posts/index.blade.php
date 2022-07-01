@extends('layouts.master')

@section('title', 'My Posts')
		
@section('content')
{{--@dd($posts)--}}

@foreach ($posts as $post)
		
	<ul>
		<li>{{$post->title}}</li>
		<li>{{$post->body}}</li>
	</ul>
@endforeach
@endsection