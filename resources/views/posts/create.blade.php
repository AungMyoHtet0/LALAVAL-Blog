@extends('layouts.master')
@section('title','Create Post')
{{--Create Post
@endsection--}}
@section('content')
<div class="col-md-6 mx-auto mt-5">
	<form class="from" method="POST" action="/post">
		@csrf
		<div class="card">
			<div class="card-title">
				<div class="card-header">
					<h1>Create Post</h1>
				</div>
				<div class="card-body">
					<div class="form-floating mt-2">
						<input class="form-control @error('title') is-invalid @enderror" type="text" name='title' placeholder="Post Title">
						<label for="title">Post Title</label>
						<div>
							@error('title')
									<p class="text-danger">{{$message}}</p>
							@enderror
						</div>
					</div>
					<div class="form-floating mt-3">
						<textarea class="form-control @error('body') is-invalid @enderror" name="body" placeholder="Post Content"></textarea>
						<label for="body">Post Content</label>
					</div>
					<div>
						@error('body')
								<p class="text-danger">{{$message}}</p>
						@enderror
					</div>
				</div>
				<div class="card-footer">
					<input class="btn btn-primary" type="submit" value="Create">
					<a class="btn btn-secondary" href="/post">Back</a>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection