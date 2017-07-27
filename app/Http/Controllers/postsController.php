<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Post;

class postsController extends Controller
{
  public function index(){
    $posts=Post::orderBy('created_at','desc')->get();
    return view('posts.index',['posts'=> $posts]);
  }

  public function details($id){
    $post=Post::find($id);
    return view('posts.details',['post' => $post]);
  }

  public function add(){
    return view('posts.add');
  }

  public function  insert(Request $request){
    $this->validate($request,['title'=>'required','content' => 'required']);
    $postData=$request->all();
    Post::create($postData);
    Session::flash('success_msg','Post added Successfully');
    return redirect()->route('posts.index');
  }

  public function edit($id){
    $post=Post::find($id);
    return view('posts.edit',['post' => $post]);
  }

  public function update($id,Request $request){
    $this->validate($request,[
      'title'=>'required',
      'content'=>'required'
    ]);
    $postData=$request->all();
    Post::find($id)->update($postData);
    Session::flash('success_msg','Post updated Successfully');
    return redirect()->route('posts.index');
  }

  public function delete($id){
    Post::find($id)->delete();
    Session::flash('success_msg','Post delected successfully');
    return redirect()->route('posts.index');
  }
}
