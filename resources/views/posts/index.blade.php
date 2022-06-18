@extends('layouts.master')
@section('title','Home Page')
{{--Home Page
@endsection--}}
@section('content')
<div class="card mt-5">
	@foreach ($posts as $post)
	<div class="card-title">
		<div class="card-header">
			<h3>{{$post->title}}</h3>
		</div>
	<a class="text-decoration-none text-black" href="/post/{{$post->id}}">
		<div class="card-body">
			<p>{{$post->body}}</p>
		</div>
	</a>
		<div class="card-footer">
			<p>{{$post->updated_at}}</p>
			<form action="/post/{{$post->id}}" method="POST">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure?')">DELETE</button>
			</form>
			<a class="btn btn-primary mt-3" href="/post/{{$post->id}}/edit">Edit</a>
		</div>
	</div>
	@endforeach
</div>
@endsection