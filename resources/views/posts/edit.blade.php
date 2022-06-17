<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="bg-primary">
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
								<input class="form-control" type="text" name='title' value="{{$post->title}}">
							</div>
							<div>
								@error('title')
										<p class="text-danger">{{$message}}</p>
								@enderror
							</div>
							<div class="form-floating mt-3">
								<textarea class="form-control " name="body" rows="5">{{$post->body}}</textarea>
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


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>