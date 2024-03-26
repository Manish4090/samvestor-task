<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Post;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Helpers;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = Post::get();
            return DataTables::of($data)
                ->addColumn('title', function ($row) {
                    return $row->title ?: 'Not Provided';
                })
                ->addColumn('description', function ($row) {
                    return $row->description ? Str::limit(ucfirst($row->description), 20) : 'Not Provided';
                })
                ->addColumn('status', function ($row) {
                    if($row->status ==1){
                        $status = 'Drafted';
                        $claseName = 'badge badge-danger';
                    }else{
                        $status = 'Published';
                        $claseName = 'badge badge-success';

                    }

                    return '<label class="'.$claseName.'">' . $status . '</label>';
                })
                ->addColumn('created_at', function ($row) {
                    return date('M d, Y', strtotime($row->created_at));
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('admin.admin-edit-post', Helpers::encrypt($row->id)) . '" class="" title="Edit"><i class="icon-pencil"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        return view('admin.posts.index');


    }

       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $post = Post::find( Helpers::decrypt($id));
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        Post::where('id', $id)->update(['title' => $request->title, 'description' => $request->description, 'status' => $request->status]);
         return redirect()->route('admin.posts')->with('success', 'Post successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}