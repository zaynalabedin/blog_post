<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //

    public function index(){
        $posts= Post::where('is_approved', 1)->get();
        return view('index', compact(['posts']));
    }

    // public function home(){
    //     // if (auth()->user()->role === 'superAdmin') {
    //     //     // Admin dashboard logic
    //     //     // $data= User::get();
    //     //     return redirect()->route('superAdmin.superAdminDashboard');
    //     // } elseif(auth()->user()->role === 'admin') {
    //     //     // User dashboard logic
    //     //     return redirect()->route('adminDashboard');
    //     // }
    //     return view('index');
    // }
}
