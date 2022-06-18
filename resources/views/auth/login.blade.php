@extends('layouts.master')

@section('title','Login')

@section('content')


<div class="col-md-6 mx-auto mt-5">
	<form class="from" method="POST" action="/post">
		@csrf
		<div class="card">
			<div class="card-title">
				<div class="card-header">
					<h1>Login</h1>
				</div>
				<div class="card-body">
					<div class="form-floating mt-3">
						<input class="form-control" type="email" name="email" placeholder="Enter Your Email" value="{{old('email')}}">
						<label for="email">Enter Your Email</label>
					</div>
					<div>
						@error('email')
								<p class="text-danger">{{$message}}</p>
						@enderror
					</div>
					<div class="form-floating mt-3">
						<input class="form-control" type="password" name="password" placeholder="Enter Your Password" value="{{old('password')}}">
						<label for="password">Enter Your Password</label>
					</div>
					<div>
						@error('password')
								<p class="text-danger">{{$message}}</p>
						@enderror
					</div>
				</div>
				<div class="card-footer">
					<input class="btn btn-primary" type="submit" value="Login">
					<span>|</span>
					<a href="/register">If You Not Have Account Register Here</a>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection