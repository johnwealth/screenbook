@extends('layouts.app')
@section('title', 'Edit-Post')
@section('stylesheets')
	{!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')



				<div class="container" >
					<div class="row">
					{{ Form::model($post, ['route'=>['posts.update', $post->id], 'method' =>'PUT' ,'files'=>true]) }}
					<div class="col-md-8">
					{{ Form::label('title' , "Title:") }}
					{{ Form::text('title', null , ["class"=>"form-control input-sm"] ) }}

				    {{ Form::text('slug', null , ["class"=>"form-control input-sm"]) }}

				    {{ Form::select('category_id', $categories, null, ["class"=>"form-control input-sm"]) }}

				    
				   {{ Form::label('tags', 'Tags:') }}
				   {{ Form::select('tags[]', $tags, null, ["class"=>"form-control select2-multi", "multiple" => "multiple"])  }}				
				

					{{Form::label('feature_image
					', 'Update Featured Image:')}}
					{!! Form::file('featured_image')!!}
										
					{{ Form::textarea('body', null, ["class"=>"form-control input-sm"]) }}
					</div>
					<div class= "col-md-4">
                          <div class="well">
						<dl class="dl-horizontal">
						    <dd>
							<dt>Created At:</dt>
							<dd>{{$post->created_at}}</dd>
						 </dl>
						 <dl class="dl-horizontal">
						 	<dd>
							<dt>Updated At:</dt>
							<dd>{{$post->updated_at}}</dd>
							 <hr>
						</dl>

			
						<div class="row">
												<div class="col-sm-6">
					        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
												</div>
													<div class="col-sm-6">
													  {!! Form::open(['route'=>['posts.store', $post->id], 'method'=>'PUT']) !!}

								    <button class="btn btn-success btn-block" type="submit">Save Changes</button>

								  {!! Form::close()!!}
												</div>
							</div>
						</div>
					</div>
				</div>
			</div>                             


@section('scripts')
	{!! Html::script('js/select2.min.js') !!}
	<script type="text/javascript">
	$('.select2-multi').select2();
$('.select2-multi').select2().val({!! json_encode( $post->tags()->getRawBindings()) !!}).trigger('change');
	</script>
@endsection
@endsection