@extends('layouts.master')

@section('title', 'Post Detail')

@section('content')


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

@endsection