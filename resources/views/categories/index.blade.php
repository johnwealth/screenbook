@extends('layouts.app')
@section('title', 'All Categories')
@section('content')

		<div class="pagetop">
			<img src="images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1>Blog</h1>
					<ul class="breadcrumbs">
						<li><a href="index.html" title=""><i class="fa fa-home"></i> Home</a></li>
						<li><a href="blog.html" title=""> Blog</a></li>
						<li>Blog Categories</li>
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
					@foreach ($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
		            </tbody>
				   </table>
			</div>     
			<div class = "col-md-3 col-md-offset-2">
				  <div class = "well">
				  <div class="row">
				  <h4>New Category</h4>
					{!!   Form::open(['route'=>'categories.store', 'method'=>'Post']) !!}

					{{ Form::text('name', null, ['class'=>'form-control']) }}


					 <button class="btn btn-primary btn-block" type="submit">Create New Category</button>

					{!! Form::close() !!}
				  </div>
				</div>
			</div>
		</div>
	</section>

@endsection

