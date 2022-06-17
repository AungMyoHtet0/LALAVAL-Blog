<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Post List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card-title mt-3">
			<h1>Post List</h1>
			</div>
			<div class="card-body mt-3">
				<a class="btn btn-success" href="/post/create">Create Post</a>
			</div>
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
		</div>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>