@extends('app')

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
<!--          <th>username</th>-->

      </tr>
    </thead>
    <tbody>

      <tr>
        <td>1</td>
        <td>1</td>
      </tr>

    </tbody>
  </table>
</div>
@stop