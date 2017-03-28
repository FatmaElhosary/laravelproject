@extends('layouts.app')
@section('content')
<h1>Edit</h1>
{!! Form::model($post, ['method'=> 'post' ,'action' => ['postController@update', $post->id]]) !!}
<div class="form-group">
{!! Form::label('body','Body:') !!}
{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Add Post',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@include('errors.list')
@stop