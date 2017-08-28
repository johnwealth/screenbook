@extends('layouts.app')
@section('title', 'details')
@section('content')


		<div class="pagetop">
			<img src= "images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1>Blog </h1>
					<ul class="breadcrumbs">
						<li><a href="index.html" title=""><i class="fa fa-home"></i> Home</a></li>
						<li><a href="blog.html" title=""> Blog</a></li>
						<li>Blog Details</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->


		<section>
				<div class="container" style="margin-top:40px; ">
		           <div class="row">
		           <img src ="{{asset('images/'.$post->image)}}"/>
					<div class="col-md-8">
					
					<h1>{{ $post->title }}</h1>
					<p class = "lead">{!! $post->body !!}</p>
						<hr>
						</div>
				
					<div class="tags">
						@foreach($post->tags as $tag)
						<span class ="label label-default">{{ $tag->name }}</span>
						@endforeach
					</div>




					<div class="backend-comment col-md-7 ">
					<h3><small>Comment {{ $post->comments()->count()}} total</small></h3>
					<table class= "table table-hover">
					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Comment</th>
					</thead>
					<tbody>
					@foreach ($post->comments  as $comment)
					 <tr>
					     <td>{{ $comment->id }}</td>
						<td>{{ $comment->name }}</td>
						<td>{{ $comment->email }}</td> 
						<td>{{ substr($comment->comment, 0 , 50)}}{{strlen($post->body) > 50 ? "..." : ""}}</td>
						<td> {{ Date('F j, Y ', strtotime($post->created_at)) }} </td>
						<td>
							<a href="{{ route('comments.edit', $comment->id) }}" class = "btn btn-primary  btn-xs" ><span class ="glyphicon glyphicon-pencil"></span></a>

					    	<a href="{{ route('comments.delete', $comment->id) }}" class = "btn btn-danger btn-xs
					    	" ><span class ="glyphicon glyphicon-trash"></span></a>
						</td>	
					</tr>
					@endforeach
		            </tbody>
				   </table>
				</div>



					<div class= "col-md-3 col-md-offset-1">
						<div class="well">
						<dl class="dl-horizontal">
						<label>Url:</label>
						<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
						</dl>
							<dl class="dl-horizontal">
							<label>Category:</label>
							<p>{{ $post->category->name}}</p>
                        </dl>
							<dl class="dl-horizontal">
								<label>Created At:</label>
								<p>{{$post->created_at}}</p>
							 </dl>
							 <dl class="dl-horizontal">
								<label>Updated At:</label>   
								<p>{{$post->updated_at}}</p>
							<hr>
							</dl>

			
						<div class="row">
							<div class="col-sm-6">
                             {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
							</div>
								<div class="col-sm-6">
						{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}

								    <button class="btn btn-danger btn-block" type="DELETE">Delete</button>
								       <hr>
								    </div>
							{!! Form::close()!!}
							
							</div><dl class="dl-horizontal">
                           <a class = "btn btn-default btn-block" href="{{ route('posts.index') }}"> <<<  See All Post </a>
					      </dl>	
						</div>
					</div>								
		</section>

@endsection
