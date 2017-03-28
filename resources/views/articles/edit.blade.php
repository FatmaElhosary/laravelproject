@extends('layouts.app')
@section('content')
<h1>Edit: {!! $article->title !!}</h1>
{!! Form::model($article, ['method'=> 'PATCH' ,'action' => ['ArticlesController@update', $article->id]]) !!}
<div class="form-group">
{!! Form::label('title','Title:') !!}
{!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('body','Body:') !!}
{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('published','Published:') !!}
    <input type="hidden" name="published" value="0">
    {!! Form::checkbox('published', 1, ($article->published ==1?true:0), ['class' => 'field']) !!}

</div>
<div class="form-group">
{!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@include('errors.list')
@stop