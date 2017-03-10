@extends('layouts.app')
@section('content')
<h1>{{$article->title}}</h1>
<article>
    {{$article->body}}
</article>
<div class="container">
  <h2>Posts That Related to this Article </h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Post id</th>
        <th>Post Body</th>

      </tr>
    </thead>
    <tbody>
@foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->body }}</td>
        <td> <a href="{{ url('/posts', $post->id) }}" class="btn btn-info">View this Post</a></td>
        <td><a href="{{  route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a></td>
        <td>{!! Form::open( [ 'method'  => 'delete', 'route' => [ 'posts.destroy', $post->id ] ])!!}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}</td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
  <h1>write New Post</h1>
<hr>
{!! Form::open(['url' => 'posts/store']) !!}
{!! Form::hidden('user_id',Auth::user( )->id)!!}
{!! Form::hidden('article_id',$article->id)!!}
<div class="form-group">
{!! Form::label('body','Body:') !!}
{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

</div>
<div class="form-group">
{!! Form::submit('Add Post',['class'=>'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@stop