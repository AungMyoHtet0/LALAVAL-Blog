@extends('layouts.master')

@section('title','Categories Edit')
		
@section('content')


<div class="container">
	<a class="btn btn-success" href="/category">Home</a>
	<div class="row col-md-8">
		<form action="/category/{{$category->id}}/edit" method="POST">
			@csrf
			@method('PUT')
			<div class="card">
				<div class="card-header">
					<div class="card-title">
						<h1>Edit Category</h1>
					</div>
					<div class="card-body">
						<div class="form-floating mt-3">
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name',$category->name)}}" placeholder="Name">
							<label for="name">Name</label>
						</div>
					</div>
					<div class="card-footer">
						<input class="btn btn-success" type="submit" value="Create">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection