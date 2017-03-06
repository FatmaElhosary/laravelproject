@extends('layouts.app')


@section('content')
<h1>Articles</h1>
@foreach($articles as $article)
<article>
    <h2>
        
<a href="{{url('/articles',$article->id)}}">{{$article->title}}
        </a>
    </h2>
    <div class="body">{{$article->body}}</div>
    </hr>
    <p>
        <a href="{{ url('/articles', $article->id) }}" class="btn btn-info">View Article</a>
        <a href="{{  route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
         {!! Form::open([ 'method'  => 'delete', 'route' => [ 'articles.destroy', $article->id ] ])!!}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
    </p>
    <hr>
</article>
@endforeach
@stop
<!--articles///{{$article->id}}-->
<!--        action(//'ArticlesController@show',[$article->id])-->
