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
         <form class="form-horizontal" role="form" method="POST" action="{{route('articles.destroy', $article->id) }}">
                        {{ csrf_field() }}
   
<button type="submit" class="btn btn-primary">
                                    Delete Article
                            </button>
                          </form>  
    </p>
    <hr>
</article>
@endforeach
@stop
<!--articles///{{$article->id}}-->
<!--        action(//'ArticlesController@show',[$article->id])-->
