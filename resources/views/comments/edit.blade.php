@extends('layouts.app')
@section('content')
<h1>Edit</h1>
{!! Form::model($comment, ['method'=> 'post' ,'action' => ['commentscontroller@update', $comment->id]]) !!}
<div class="form-group">
{!! Form::label('body','Body:') !!}
{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('edit comment',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@include('errors.list')
@stop