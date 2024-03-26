<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\RequestPostsController;
use App\Models\Post;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $posts = Post::where('users_id', Auth::user()->id)->get(); 
    return view('dashboard', compact('posts')); 
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// Admin 

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        // login route

        Route::get('login',[AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login',[AuthenticatedSessionController::class, 'store'])->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[HomeController::class, 'index'])->name('dashboard');

        //Post Route
        Route::get('posts', [PostController::class, 'index'])->name('posts');
        Route::get('admin-edit-post/{id?}',[PostController::class, 'edit'])->name('admin-edit-post');
        Route::post('user-request-post-updated/{id?}', [PostController::class, 'update'])->name('admin.user-request-post-updated');


    });
    Route::post('logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::middleware('auth')->group(function() {
    Route::get('/applied-post',[RequestPostsController::class, 'index'])->name('user.applied-post');
    Route::get('/request-post',[RequestPostsController::class, 'requestJobs'])->name('user.request-post');
    Route::any('/request-post-save',[RequestPostsController::class, 'store'])->name('user.request-post-save');
});





