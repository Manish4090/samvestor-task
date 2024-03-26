<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Jobs\SendNewPostNotification;
use Auth;

class RequestPostsController extends Controller
{
    public function index(Request $request){
        $getUserPost = Post::where('status', Post::DRAFTED)->orderBy('id', 'desc')->get();
        return view('user-jobs.index', compact('getUserPost'));
    }

    public function requestJobs(Request $request){
        return view('user-jobs.request-post');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
       

        $post = Post::create(['title'=>$request->title, 'description'=>$request->description, 'users_id'=> \Auth::user()->id]);
        SendNewPostNotification::dispatch($post);

        return redirect()->route('user.applied-post')->with('success', 'Post successfully added!');
    }
}
