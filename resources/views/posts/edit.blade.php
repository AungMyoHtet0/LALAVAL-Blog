@extends('layouts.master')


@section('title', 'Post Edit')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto mt-5">
			<form class="from-control" method="POST" action="/post/{{$post->id}}">
				@csrf
				@method('PUT')
				<div class="card">
					<div class="card-title">
						<div class="card-header">
							<h1>Post Edit</h1>
						</div>
						<div class="card-body">
							<div class="form-floating mt-2">
								<input class="form-control" type="text" name='title' value="{{old('title')}}">
							</div>
							<div>
								@error('title')
										<p class="text-danger">{{$message}}</p>
								@enderror
							</div>
							<div class="form-floating mt-3">
								<textarea class="form-control " name="body" rows="5">{{old('body')}}</textarea>
							</div>
							<div>
								@error('body')
										<p class="text-danger">{{$message}}</p>
								@enderror
							</div>
						</div>
						<div class="card-footer">
							<input class="btn btn-primary" type="submit" value="Update">
							<a class="btn btn-secondary" href="/post">Back</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection