<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.blog.index', compact('blogs'));
        } else {
            return Redirect::to('/admins')->send();
        }
        // return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.blog.create');
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.blog.create');
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->id = $request->blog;
        $blog->tag1 = $request->tag1;
        $blog->tag2 = $request->tag2;
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->date = $request->date;
        $blog->image = $request->image->store('blog');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $blog->save();
        return redirect()->back()->with('message', 'Blog Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Blog $blog)
    {
        if ($blog->status == 1) {
            $blog->update(['status' => 0]);
        } else {
            $blog->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $update = $blog->update([
            'tag1' => $request->tag1,
            'tag2' => $request->tag2,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $request->file('image')->store('blog')
        ]);
        if ($update) {
            return redirect('/blogs')->with('message', 'Blog has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Blog $blog)
    {
        unlink(storage_path('app/public/' . $blog->image));
        $delete = $blog->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Blog has removed successfully');
        }
    }
}
