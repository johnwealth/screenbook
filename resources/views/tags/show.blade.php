@extends('layouts.app')
@section('title', 'All Tages')
@section('content')

<div class="container">
<div class ="row">
	<div class="col-md-8">
		<h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
	</div>
	<div class="col-md-2">
		<a href="{{ route('tags.edit', $tag->id)}}" class = "btn btn-primary pull-right btn-block" style="margin-top: 20px">Edit</a>
	</div>
	<div class="col-md-2">
		{{ Form::open(['route'=>['tags.destroy', $tag->id], 'method'=>'DELETE']) }}
			<button type ='Delete', class = 'btn btn-danger btn-block', style = "margin-top: 20px">Delete</button>
		{{Form::close()}}
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Tags</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($tag->posts as $post)
				<tr>
					<td>{{ $post->id }}</td>
					<td>{{ $post->title }}</td>
					<td>@foreach($post->tags as $tag) 
						<span class="label label-default">{{$tag->name}}</span>
					</td>@endforeach
					<td> <a href="{{route('posts.show', $post->id)}}" class ="btn btn-primary btn-xs">View</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection