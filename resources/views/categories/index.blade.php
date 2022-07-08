@extends('layouts.master')

@section('title','Categories Lists')
		
@section('content')


<div class="container">
	<a class="btn btn-success" href="/category/crteate">Create Category</a>
	<div class="row col-md-8">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@if(count($categories)>0)
					@foreach ($categories as $category)
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>{{$category->created_at->DaffforHumans()}}</td>
					<td>
						<div class="d-flex">
							<a class="btn btn-info" href="/category/{{$category->id}}/edit">Edit</a>
							<form action="/category/{{$category->id}}" method="POST">
								@csrf
								@method('delete')
								<button onclick="return confirm('Are You Sure)" class="btn btn-danger mx-3" type="submit">Delete</button>
							</form>
						</div>
					</td>
					@endforeach
					@else
					No Result
					@endif
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection