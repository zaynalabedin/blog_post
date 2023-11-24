<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class Super_adminController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('super_admin');
    // }
    public function dashboard(){
        return view('superAdmin.superAdminDashboard');
    }
    public function index(){
        $posts= Post::all();
        return view('superAdmin.index', compact(['posts']));
    }
    public function edit($id){
        $posts = Post::where('id', $id)->first();
        return view('superAdmin.review', compact(['posts']));
    }
    public function Update(Request $request, $id){

        $post= Post::find($id);

        $post->title= $request->input('title');
        $post->content= $request->input('content');
        $post->is_approved= $request->is_approved;
        
        
        $post->save();
        return redirect('all-posts');
    }
}
