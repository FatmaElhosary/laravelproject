<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\post;
use App\comment;
use App\Article;


class PostController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $posts = Post::all();
        return view('articles.show', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $posts = post::all();
        return view('posts.create')->withPosts($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    
//    
public function store(Request $request) {
//         Post::create($request->all());
        $article_id = $request->all()['article_id'];
        post::create($request->all());
        $article=Article::findOrFail($article_id);
        $posts = post::where('article_id' , $article_id)->get()->all();
//       Auth::user()->article()->save($article);
       return view('articles.show',['article' => $article,'posts' => $posts]);
        //return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post=Post::findOrFail($id);
        $comments = comment::where('post_id' , $id)->get()->all();
return view('posts.show',['post' => $post,'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
           $post=post::findOrFail($id);
       return view('posts.edit',compact('post'));
    }

    public function update(Request $request,$id  ) {
        $post=post::findOrFail($id);
        $post->update($request->all());
        //return redirect('articles');
         $comments = comment::where('post_id' , $id)->get()->all();
        return view('posts.show',['post' => $post,'comments' => $comments]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
       post::destroy($id);
       return redirect('articles');
    }

}
