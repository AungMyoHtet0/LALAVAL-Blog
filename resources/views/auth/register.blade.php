@extends('layouts.master')

@section('title','Register')
		
@section('content')

<div class="col-md-6 mx-auto mt-5">
	<form class="from" method="POST" action="/login">
		@csrf
		<div class="card">
			<div class="card-title">
				<div class="card-header">
					<h1>Register Here</h1>
				</div>
				<div class="card-body">
					<div class="form-floating mt-2">
						<input class="form-control" type="text" name='name' placeholder="Enter Your Name">
						<label for="name">Enter Your Name</label>
						<div>
							@error('name')
									<p class="text-danger">{{$message}}</p>
							@enderror
						</div>
					</div>
					<div class="form-floating mt-3">
						<input class="form-control" type="email" name="email" placeholder="Enter Your Email">
						<label for="email">Enter Your Email</label>
					</div>
					<div>
						@error('email')
								<p class="text-danger">{{$message}}</p>
						@enderror
					</div>
					<div class="form-floating mt-3">
						<input class="form-control" type="password" name="password" placeholder="Enter Your Password">
						<label for="password">Enter Your Password</label>
					</div>
					<div>
						@error('password')
								<p class="text-danger">{{$message}}</p>
						@enderror
					</div>
				</div>
				<div class="card-footer">
					<input class="btn btn-primary" type="submit" value="Register Now">
					<span>|</span>
					<a  href="/login">Already Have Account Login</a>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection