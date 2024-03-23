<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('admin.dashboard');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        Post::where('id', $id)->update(['title' => $request->title, 'description' => $request->description, 'status' => $request->status]);
         return redirect()->route('admin.posts')->with('success', 'Post successfully updated!');
    }

    public function adminTest()
    {
        // if(\Auth::guard('admin')->user()->hasRole('admin')){
        //     dd('only admin allowed');
        // }
        
        if(\Gate::forUser(\Auth::guard('admin')->user())->allows('admin')){
            dd('only admin allowed');
        }
        abort(403);
    }

    public function editorTest()
    {
        if(\Auth::guard('admin')->user()->hasRole('editor')){
            dd('only editor allowed');
        }
        abort(403);
    }

}