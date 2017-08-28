@extends('layouts.app')
@section('title', 'DELETE COMMENT?')
@section('content')


<div class="row">
<div class="col-md-8 col-md-offset-2">
<h3>DELETE THIS COMMENT?</h3>
<p>
<strong>Name:</strong>{{$comment->name }} <br>
<strong>Email :</strong>{{$comment->email }} <br>
<strong>Comment :</strong>{{$comment->comment }} 
</p>
{!! Form::open(['route'=>['comments.destroy', $comment->id], 'method'=>'DELETE']) !!}

<button class="btn btn-danger btn-block" type="DELETE">YES DELETE THIS COMMENT</button>
    <hr>
</div>
{!! Form::close()!!}
							
</div>
</div>











@endsection