@extends('layouts.app')
@section('title', 'Edit-Comment')
@section('content')



			<div class="container" >
                 <div class="row" >
                   	
                   <div class="col-md-8 col-md-offset-2">
                    <h4>Edit Comment</h4>
					{{ Form::model($comment, ['route'=>['comments.update', $comment->id], 'method' =>'PUT' ]) }}
					
				
					{{ Form::text('name', null , ["class"=>"form-control input-sm", "disabled"=>""]) }}

                
				    {{ Form::text('email', null , ["class"=>"form-control input-sm", "disabled"=>""]) }}

                    
					{{ Form::textarea('comment', null, ["class"=>"form-control input-sm", ]) }}
					
				    <button class="btn btn-success btn-block" type="submit" style="magin-bottom:20px">Update Comment</button>

					 {!! Form::close()!!}
					</div>
					</div>
                    <hr>
				</div>
			</div>
		</div>                             

@endsection