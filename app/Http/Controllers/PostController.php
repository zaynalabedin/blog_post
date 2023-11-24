<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }

    // public function dashboard(){
    //     if (auth()->user()->role === 'superAdmin') {
    //         // Admin dashboard logic
    //         // $data= User::get();
    //         return view('superAdmin.superAdminDashboard');
    //     } else {
    //         // User dashboard logic
    //         return view('adminDashboard');
    //     }
    //     // return view('adminDashboard');
    // }

    public function dashboard(){
        return view('adminDashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }


    public function index(){
        $posts= Post::all();
        return view('post.index', compact(['posts']));
        // dd($data);
    }
    public function createPost(){
        return view('post.create');
    }

    public function postStore(Request $request){
        $request->validate([
            'title'=> 'required|unique:posts',
            'content'=>'required',


        ]);
        $posts = New Post();
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');

        $posts->save();
        // return back();
        return redirect('posts');
    }
    public function postEdit($id){
        $posts = Post::where('id', $id)->first();
        // dd($project);
        return view('post.edit', compact('posts'));

    }

    public function postUpdate(Request $request, $id){

        $post= Post::find($id);

        $post->title= $request->input('title');
        $post->content= $request->input('content');
        
        
        $post->save();
        return redirect('posts');
    }
    public function destroy($id){
        $post = Post::find($id);

        $post->delete();
        return back();

    }
    
}
