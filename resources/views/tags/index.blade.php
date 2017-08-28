@extends('layouts.app')
@section('title', 'All Tages')
@section('content')


	<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1> Blog Post</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Tags</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->


	<section>
		<div class="container" style="margin-top:40px; ">
		<div class="row">
		  <div class="col-md-4 col-md-offset-2 ">
				<table class= "table table-striped table-hover">
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
					<tbody>
					@foreach ($tags as $tag)
					<tr>
						<td>{{ $tag->id }}</td>
						<td><a href="{{route('tags.show', $tag->id)}}">{{ $tag->name }}</a> </td>
					</tr>
					@endforeach
		            </tbody>
				   </table>
			</div> 

	
			<div class = " well col-md-3 col-md-offset-2">
				         <h4>New Tag</h4> 
					{!! Form::open(['route'=>['tags.index', $tag->id ],'method'=>'Post']) !!}

					{!! Form::text('name', null, ['class'=>'form-control']) !!}

					 <button class="btn btn-primary btn-block" type="submit">Create New Tag</button>
					{!! Form::close() !!}
				  </div>
			</div>
		</div>
		</div>
	</section>

@endsection

