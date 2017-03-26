<?php

namespace App\Http\Controllers;
use App\Article;
use App\post;
use App\user;
use Illuminate\Http\Request;
//use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\Http\Requests\CreateArticleRequest;
 //use Illuminate\Routing\Controller as BaseController;
 //use App\User;
 //use Carbon\Carbon;
use Auth;
use Symfony\Component\HttpFoundation\Session\Session;

//use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
}
   public function index()
   {
       
$articles=Article::latest()->get();
return view('articles.index',compact('articles'));
        
         
   }
    
 public function show($id)
   {  
$article=Article::findOrFail($id);
$posts = post::where('article_id' , $id)->get()->all();

return view('articles.show',['article' => $article,'posts' => $posts]);
            
   }
   public function create()
   {
       if(Auth::guest())
       {
           return redirect('articles');
       }
return view('articles.create' );
        

   }

    public function store(CreateArticleRequest $request)
   {
        //$input = $request->only(['title', 'body']);
      // $input= Request::all();     
      //$input['published_at']= Carbon::now(); 
       Article::create($request->all());
//       Auth::user()->article()->save($article);
//       \session::flash('flash_message','your article created successfully');      
      return redirect('articles');
        //Session::flash('flash_message', 'Task successfully added!');

        

   }
    public function edit($id)
   {
       
      $article=Article::findOrFail($id);
       return view('articles.edit',compact('article'));
        

   }
     public function update($id, CreateArticleRequest $request)
   {
       
      $article=Article::findOrFail($id);
      $article->update($request->all());
      return redirect('articles');
   } 

    public function destroy($id)
    {
//$article=Article::findOrFail($id);
   // $article->delete();
Article::destroy($id);
// // Session::flash('flash_message', 'Task successfully deleted!');
//return redirect()->route('articles.index')->with('alert-success','Data has been Edited!!');
        return redirect('articles');

    }
   }

 