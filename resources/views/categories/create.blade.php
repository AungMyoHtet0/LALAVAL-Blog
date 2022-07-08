@extends('layouts.master')

@section('title','Categories Create')
		
@section('content')


<div class="container">
	<a class="btn btn-success" href="/category">Home</a>
	<div class="row col-md-8">
		<form action="/category" method="POST">
			@csrf
			<div class="card">
				<div class="card-header">
					<div class="card-title">
						<h1>Create Category</h1>
					</div>
					<div class="card-body">
						<div class="form-floating mt-3">
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name">
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