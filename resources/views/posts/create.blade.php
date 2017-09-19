@extends('layouts.app')
@section('title', 'Post')
@section('stylesheets')
	{!! Html::style('css/parsley.css') !!}
	{!! Html::style('css/select2.min.css') !!}
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=k68wm0y3gwhb8et2ujmo30sr8hz35s7c21bds26dcu5lgkak"></script>
	<script>
	tinymce.init({
		selector:'textarea',
		plugin: 'link code',
		menubar: false
	});
	</script>
@endsection

@section('content')

						<section>
								<div class="pagetop">
			<img src="/images/banner.jpg" alt="" />
			<div class="pagetop-inner">
				<div class="container">
					<h1> Blog Post</h1>
					<ul class="breadcrumbs">
						<li><a href="#" ><i class="fa fa-home"></i> Home</a></li>
						<li>Create Post</li>
					</ul>
				</div>
			</div>
		</div><!-- PageTop -->

							<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="registration-page">
			
									<h2>Create New Post</h2>
								</div>

								{!! Form::open(['route' => 'posts.store' , 'data-persley-validate' => '', 'files' => true ]) !!}
									<div class="row">
									<div class="col-md-12">
										{!! Form::label('title', 'Title:') !!}
										{!! Form::text('title', null, 
																		array('class'=>'form-control','required'=>'')) !!}
											</div>
										<div class="col-md-12">
										{!! Form::label('slug', 'Slug:') !!}
										{{ Form::text('slug', null, 
										array('class'=>'form-control',
									 'required'=>'' , 'minlength'=>'5')) }}
										</div>

										<div class="col-md-12">
										{{Form::label('categories', 'Category:')}}
											<select class="form-control" name="category_id">
											@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
											@endforeach
										</select>
											</div>

										<div class="col-md-12">
										{!! Form::label('tags', 'Tags:') !!}
										   <select class = "form-control select2-multi" name="tags[]" multiple = "multiple" >
											@foreach($tags as $tag)
											<option value ='{{ $tag->id }}'>{{ $tag->name }}</option>
											@endforeach
										</select>
											</div>

											<div class="col-md-12">
											{{Form::label('feature_image
											', 'Upload Featured Image:')}}
											{!! Form::file('featured_image')!!}
										    </div>


										<div class="col-md-12">
											{{Form::label('post', 'Message body:')}}
											{!! Form::textarea('body', null, 
																		array( 
																								'class'=>'form-control', 
																								'placeholder'=>'Your message', 'required'=>'')) !!}
										</div>
										
										<div class="col-md-12">
												{!! Form::submit('Create New Post!', 
													array('class'=>'button btn-success')) !!}
										</div>
									</div>
									{!! Form::close() !!}
									</div><!-- Form Block -->
								</div>
		</section>
	
@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}
	<script type="text/javascript">
		$(".select2-multi").select2({
			
		});

	</script>
@endsection
@endsection
