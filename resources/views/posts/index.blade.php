
<html>
<head>
		<title>CSS Day</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
        <body>
<div class="container">
  <h2>Articles </h2>
  <p>posts that belongs to specific Category Article</p>
  
 
 @foreach($posts as $post)
  <div class="list-group">
  <a href="{{url('/posts',$post->id)}}" class="list-group-item active">
      <h4 class="list-group-item-heading">{{$post->body}}</h4></a>
 <br>
      <button class="btn btn-info" herf="#" > edit</button>
      <button class="btn btn-danger" herf="#" > delete</button> 
</div>
 @endforeach
  
</div>
            
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </body>
</html>