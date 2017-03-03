@extends('app')

@section('content')
<h1>Articles</h1>
@foreach($articles as $article)
<article>
    <h2>
        <!--articles/{{$article->id}}-->
<!--        action('ArticlesController@show',[$article->id])-->

<a href="{{url('/articles',$article->id)}}">{{$article->title}}
        </a>
    </h2>
    <div class="body">{{$article->body}}</div>
    <hr>
    <p>
        <a href="{{ url('/articles', $article->id) }}" class="btn btn-info">View Article</a>
        <a href="{{  route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
        <a href="{{action('ArticlesController@destroy',$article->id)}}" class="btn btn-danger">Delete this task</a>
    </p>
    <hr>
</article>
@endforeach
@stop

