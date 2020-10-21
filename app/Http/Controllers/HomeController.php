<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Posts;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
	return back()->with('success','Item created successfully!');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        
    }
    public function contentPost()
    {
        
      $position = Posts::all();
      $mahasiswa = User::all();
      return view('contentpost',compact('position','mahasiswa'));
      
	return back()->with('success','Item created successfully!');

    }
    public function userlist()
    {
        
      $position = Posts::all();
      $comment1 = Comments::all();
      $mahasiswa = User::all();
      return view('userlist',compact('comment1','mahasiswa','position'));

      return back()->with('success','Item created successfully!');
    }
    public function commentguest()
    {
        $users = DB::table('users')
        ->join('posts', 'users.id', '=', 'posts.user_id')
        ->join('comments', 'posts.id', '=', 'comments.post_id')->get();
        
	return back()->with('success','Item created successfully!');
    
    }
}
