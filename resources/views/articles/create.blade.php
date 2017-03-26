@extends('layouts.app')
@section('content')
<h1>write New Article</h1>
<hr/>
{!! Form::open(['url' => 'articles']) !!}
{!! Form::hidden('user_id',Auth::user( )->id)!!}
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
{{Form::checkbox('published',1,['class'=>'form-control']) }}

</div>
<div class="form-group">
{!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
@include('errors.list')
@stop