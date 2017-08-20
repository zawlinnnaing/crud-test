<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Post;

class PageController extends Controller
{
    //
	public function index()
    {
    		return view('welcome');
    }

    public function departments()
    {
    		return view('departments');
    }

    public function research()
    {
    		return view('research');
    }
    public function academic()
    {
            return view('academic');
    }

    public function about()
    {
    		return view('about');
    }

    public function civil()
    {
    		return view('departments.civil');
    }

    public function mech()
    {
    		return view('departments.mech');
    }
    public function mecha()
    {
            return view('departments.mecha');
    }
    public function ec()
    {
            return view('departments.ec');
    }
    public function ep()
    {
            return view('departments.ep');
    }
    public function ceit()
    {
            return view('departments.ceit');
    }
    public function che()
    {
            return view('departments.che');
    }
    public function archi()
    {
            return view('departments.archi');
    }
     public function ir()
    {
            return view('departments.ir');
    }
     public function maths()
    {
            return view('departments.maths');
    }
     public function eng()
    {
            return view('departments.eng');
    }
     public function myan()
    {
            return view('departments.myan');
    }

    public function previousAnnouncements(){
        $announcements = Announcement::orderBy('created_at','desc')->get();
        return view('previous_announcements',['announcements' => $announcements]);
    }

    public function postList(){
        $posts = Post:: orderBy('created_at' , 'desc')->simplePaginate(4);
        $pageCount = $posts->count();
        $posts->withPath('postList');
        return view('postList' , array('posts' => $posts , 'pageCount' => $pageCount));
    }
}
