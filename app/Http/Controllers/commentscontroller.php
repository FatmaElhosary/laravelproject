<?php

namespace App\Http\Controllers;
use App\comment;
use App\Article;
use App\post;
use Illuminate\Http\Request;

class commentscontroller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
     public function index() {
        $comments = comment::all();
        //var_dump($comments);die;
        return view('posts.show', compact('comments'));
    }
     public function store(Request $request) {
        $post_id = $request->all()['post_id'];
        comment::create($request->all());
        $post=post::findOrFail($post_id);
        $comments = comment::where('post_id' , $post_id)->get()->all();
       return view('posts.show',['post' => $post,'comments' => $comments]);

//       Auth::user()->article()->save($article);
       ///return redirect('articles');
        //return redirect()->back();
    }
     public function show($id) {
        $comment=comment::findOrFail($id);
        //var_dump($comments);die;
//$posts = post::where('article_id' , $id)->get()->all();
//,'posts' => $posts
return view('posts.show',['comment' => $comment]);
    }
      public function edit($id) {
           $comment=comment::findOrFail($id);
           return view('comments.edit',compact('comment'));
    }

    public function update(Request $request,$id  ) {
               // $post_id = $request->all()['post_id'];

        $comment=comment::findOrFail($id);
        $comment->update($request->all());
        //$post=post::findOrFail($post_id);
        //$comments = comment::where('post_id' , $post_id)->get()->all();
       //return view('posts.show',['post' => $post,'comments' => $comments]);
        //var_dump($comments);die;
      return redirect('articles');
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
      comment::destroy($id);
       return redirect('articles');
    }
}
