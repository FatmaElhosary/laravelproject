@extends('app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        <hr>
        {!! Form::open(array(['url' => 'Posts']))!!}
        {{Form::label('body',"post body")}}
        {{Form::textarea('body',null,array('class'=>'form-control'))}}
        
    </div>
</div>