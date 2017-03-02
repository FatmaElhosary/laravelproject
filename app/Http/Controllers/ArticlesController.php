<?php

namespace App\Http\Controllers;
use App\Article;
//use Illuminate\Http\Request;
//use App\Http\Requests;
 use App\Http\Controllers\Controller;
 //use Illuminate\Routing\Controller as BaseController;
 //use App\User;
 use Carbon\Carbon;
use Request;

//use Illuminate\Http\Request;

class ArticlesController extends Controller
{
   public function index()
   {
$articles=Article::latest()->get();
return view('articles.index',compact('articles'));
        
        
   }
    
 public function show($id)
   {
$article=Article::findOrFail($id);
return view('articles.show',compact('article'));
        
   //return $article;     
   }
   public function create()
   {
return view('articles.create' );
        

   }

    public function store()
   {
        //$input = $request->only(['title', 'body']);
       $input= Request::all();     
      //$input['published_at']= Carbon::now(); 
      Article::create($input);
       return redirect('articles');
        

   }
//    public function store(Reqest $request)
//{
//$title=$request->get('title');
//$body=$request->get('body');
//$article=['title'=>$title,'body'=>$body];
//Article::create($article);
//}
   
   
   }

 