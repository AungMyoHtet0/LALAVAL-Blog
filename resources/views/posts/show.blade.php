<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Detail</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-title">
						<div class="card-header">
							<h3>{{$post->title}}</h3>
						</div>
						<div class="card-body">
							<p>{{$post->body}}</p>
						</div>
						<div class="card-footer">
							<p>{{$post->created_at}}</p>
							<p>{{$post->updated_at}}</p>
							<a class="btn btn-success" href="/post">Go Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>