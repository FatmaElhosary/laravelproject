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
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Article id</th>
        <th>Article Title</th>
        <th>Article Body</th>
          <th>username</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
      <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->body}}</td>
         <td> fatma </td>
         <td> <input type="button" value="Edit Aricle" /> <input type="button" value="DeleteAricle"/> &nbsp;&nbsp;<input type="checkbox"value="published"/></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <form>
	 <h3>Add new article </h3>
	 <input id="in" type="text" placeholder="ArticleTitle*"> 
	 <br></br>
     <textarea placeholder="ArticleBody*"></textarea>
	 </br><br>
         <input type="button" value="Add Aricle" />
      </form>
</div>
         
            
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </body>
</html>