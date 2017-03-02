@extends('app')
@section('content')
<!--@include('view.home')-->
<h1>{{$article->title}}</h1>
<article>
    {{$article->body}}
</article>
@stop