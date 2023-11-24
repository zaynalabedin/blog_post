<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Super_adminController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Home
Route::get('/', [HomeController::class, 'index'])->name('index');



// Admin 
Route::get('/admin/dashboard', [PostController::class, 'dashboard'])->name('adminDashboard')->middleware('admin');
Route::get('/logout', [PostController::class, 'logout']);





Route::get('/posts', [PostController::class, 'index'])->name('post.index')->middleware('admin');
Route::get('/post-create', [PostController::class, 'createPost'])->name('post.create')->middleware('admin');
Route::post('/post-store', [PostController::class, 'postStore'])->name('post-store')->middleware('admin');
Route::get('/post/edit/{id}', [PostController::class, 'postEdit'])->name('post.edit')->middleware('admin');
Route::post('/post/update/{id}', [PostController::class, 'postUpdate'])->name('post-update')->middleware('admin');
Route::delete('/post/{destroy}', [PostController::class, 'destroy'])->name('post.destroy')->middleware('admin');

//super Admin
Route::get('/superAdmin/dashboard', [Super_adminController::class, 'dashboard'])->name('superAdmin.superAdminDashboard')->middleware('super_admin');
Route::get('/all-posts', [Super_adminController::class, 'index'])->name('superAdmin.index')->middleware('super_admin');
Route::get('/post/review/{id}', [Super_adminController::class, 'edit'])->name('superAdmin.review')->middleware('super_admin');
Route::post('/all-post/update/{id}', [Super_adminController::class, 'update'])->name('superAdmin.update')->middleware('super_admin');