<!--@extends('app')-->
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
<div class="checkbox">
                                    <label>
  <input type="checkbox" name="published" {{ old('published') ? 'checked' : ''}}> Published
                                    </label>
                                </div>
<!--{{Form::checkbox('published', 1,['class'=>'form-control']) }}-->
</div>
<div class="form-group">
{!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
@include('errors.list')
@stop