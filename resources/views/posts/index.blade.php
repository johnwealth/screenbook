
@extends('layouts.app')
@section('title', 'Blog')
@section('content')

		<div class="pagetop">
			<img src="/images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1> Blog Post</h1>
					<ul class="breadcrumbs">
						<li><a href="#" title=""><i class="fa fa-home"></i> Home</a></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->

		<section>
		<div class="container" style="margin-top:40px; ">
		<div class="row">
			<div class="col-md-8 col-md-offset-1">	
				<h2>All Posts</h2>
			</div>
			<div class="col-md-2 ">	
				<a href = "{{ route('posts.create') }}" class = "btn btn-lg btn-primary">Create New Post</a>
				</div>	
        
		     <!--  <div class ="col-md-12">
		      	<hr>
		      </div> -->
		      <div class="row">
		       <div class="col-md-9 col-md-offset-1">
				<table class= "table table-hover">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>Body</th>
						<th>Created_at</th>
					</thead>
					<tbody>
					@foreach ($posts as $post)
					 <tr>
						<td>{{ $post->id }}</td>
						<td>{{ $post->title }}</td> 
						<td>{{ substr(strip_tags($post->body), 0 , 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : ""}}</td>
						<td> {{ Date('F j, Y ', strtotime($post->created_at)) }} </td>
						<td>
							<a href="{{ route('posts.show', $post->id) }}" class = "btn btn-default  btn-sm" >view</a>

					    	<a href="{{ route('posts.edit', $post->id)}}" class = "btn btn-primary btn-sm
					    	" >edit</a>
						</td>	
					</tr>
					@endforeach
		            </tbody>
				   </table>
					</div>
				</div>
				</section>		
								
				<ul class="pagination">
					{!! $posts->links(); !!}
				</ul>

				<!-- Pagination -->
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection

