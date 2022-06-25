@extends('layouts.master')
@section('title','Home Page')
{{--Home Page
@endsection--}}

@section('content')
@if (session('postCreate'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>{{session('postCreate')}}</p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session('postEdit'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>{{session('postEdit')}}</p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('postDelete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>{{session('postDelete')}}</p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card mt-5 border-0">

	@foreach ($posts as $post)
	<div class="card-title ">
		<div class="card-header pt-5 mt-5 border-info">
			<h1>{{$post->title}}</h1>
			@if(Auth::check())
				<p class="fw-bold">Posted By {{Auth::user()->name}}</p>
			
			@endif
			<span class="fw-normal"> At {{$post->created_at->diffForHumans()}}</span>
		
		</div>
	<a class="text-decoration-none text-black" href="/post/{{$post->id}}">
		<div class="card-body">
			<p class="fs-3">{{$post->body}}</p>
		</div>
	</a>
	@auth
		<div class="card-footer my-5">
			<p>Post Update At  {{$post->updated_at->format('d M,Y')}}</p>
			<form action="/post/{{$post->id}}" method="POST">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure?')">DELETE</button>
			</form>
			<a class="btn btn-primary mt-3" href="/post/{{$post->id}}/edit">Edit</a>
		</div>
	@endauth
	</div>
	@endforeach
	{{$posts->links()}}
</div>

@endsection