@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Post </h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Post Body</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$post->body}}</td>
      </tr>
    </tbody>
  </table>
  <h2>comments That Related to this Post </h2>
  <table class="table table-striped">
    <thead>
      <tr>
         <th>user name</th>
        <th>Comment Body</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($comments as $comment)
      <tr>
        <td> {{ $comment->user->name }}</td>
        <td> {{ $comment->body }}</td>
        @if(Auth::user()->id==$comment->user_id || Auth::user()->role=='admin')
        <td><a href="{{  route('comments.edit', $comment->id) }}" class="btn btn-primary">Edit comment</a></td>
        <td>{!! Form::open( [ 'method'  => 'delete', 'route' => [ 'comments.destroy', $comment->id ] ])!!}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}</td>
        @endif
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
 <h1>add New comment</h1>
<hr>
{!! Form::open(['url' => 'comments/store']) !!}
{!! Form::hidden('user_id',Auth::user( )->id)!!}
{!! Form::hidden('post_id',$post->id)!!}
<div class="form-group">
{!! Form::label('body','Body:') !!}
{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

</div>
<div class="form-group">
{!! Form::submit('Add comment',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@stop