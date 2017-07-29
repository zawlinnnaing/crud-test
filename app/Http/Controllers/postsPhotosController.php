<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Photos;
use App\Post;

class postsPhotosController extends Controller
{
  public function index(){
    $photos=Photos::orderBy('id','desc')->get();
    return view('photos.index',['photos'=> $photos]);
  }

  public function details($id){
    $photo=Photos::find($id);
    return view('photos.details',['photo' => $photo]);
  }

  public function add(){
    return view('photos.add');
  }

  public function  insert(Request $request){
    $this->validate($request,['img_dir'=>'required','name' => 'required','post_id' => 'required']);
   $photoData=$request->all();

   Photos::create($photoData);
    Session::flash('success_msg','Photo added Successfully');
    return redirect()->route('photos.index');
  }

  public function edit($id){
    $photo=Photo::find($id);
    return view('photos.edit',['photo' => $photo]);
  }

  public function update($id,Request $request){
    $this->validate($request,[
      'img_dir'=>'required',
      'name'=>'required'
    ]);
    $photoData=$request->all();
    Photos::find($id)->update($photoData);
    Session::flash('success_msg','Photo updated Successfully');
    return redirect()->route('photos.index');
  }

  public function delete($id){
    Photos::find($id)->delete();
    Session::flash('success_msg','Photo delected successfully');
    return redirect()->route('photos.index');
  }
}
