<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Post;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Controllers\Controller;


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
                    return $row->title ? $row->title : 'N/A';
                })
                ->addColumn('description', function ($row) {
                    return $row->description ? $row->description : 'N/A';
                })
                ->addColumn('status', function ($row) {
                    return $row->status ? $row->status : 'N/A';
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at ? $row->created_at : 'N/A';
                })
                
                ->addColumn('action', function ($row) {
                    $btn = '';
                    // $url =  route('admin.user.destroy');
                    // $btn .= '<a href=" ' . route('admin.user.show') .'/' .  \App\Helpers::encrypt($row->id) . ' " class="btn btn-primary btn-sm">View</a>';
                    // if(\Auth::user()->role_type == 1){
                    //     $btn .= '<a href="' . route('admin.user.edit', \App\Helpers::encrypt($row->id)) . '" class="btn btn-warning" title="Edit"><i class="mdi mdi-pencil"></i></a>
                    //         <a onclick="deleteUersItems(this)" data-url ="'.$url.'" data-id="'.\App\Helpers::encrypt($row->id).'" class="btn btn-danger" title="Delete"><i class="mdi mdi-delete"></i></a>';
                    // }        
                    return $btn;
                })
                ->rawColumns(['action'])
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
    public function edit(Post $post)
    {
        // if(\Auth::guard('admin')->user()->id == $post->admin_id){
        //     return view('admin.posts.edit',['post'=>$post]);
        // }

        // if(\Auth::guard('admin')->user()->can('view',$post)){
        //     return view('admin.posts.edit',['post'=>$post]);            
        // }
        
        $this->authorize('view',$post);
        return view('admin.posts.edit',['post'=>$post]);            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update',$post);
        $post->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->back();
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