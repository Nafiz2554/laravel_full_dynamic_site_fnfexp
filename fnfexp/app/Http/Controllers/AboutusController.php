<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Aboutus;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutuses = Aboutus::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.aboutus.index',compact('aboutuses'));
        } else {
            return Redirect::to('/admins')->send();
        }
        // return view('admin.aboutus.index',compact('aboutuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.aboutus.create');
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.aboutus.create');
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
        $aboutus = new Aboutus;
        $aboutus->id = $request->aboutus;
        $aboutus->name = $request->name;
        $aboutus->designation = $request->designation;
        $aboutus->desc = $request->desc;
        $aboutus->image = $request->image->store('aboutus');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $aboutus->save();
        return redirect()->back()->with('message', 'Person Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Aboutus $aboutus)
    {
        if ($aboutus->status == 1) {
            $aboutus->update(['status' => 0]);
        } else {
            $aboutus->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutus $aboutus)
    {
        return view('admin.aboutus.edit', compact('aboutus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutus $aboutus)
    {
        $update = $aboutus->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'desc' => $request->desc,
            'image' => $request->file('image')->store('aboutus')
        ]);
        if ($update) {
            return redirect('/aboutuses')->with('message', 'Category updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Aboutus $aboutus)
    {
        unlink(storage_path('app/public/' . $aboutus->image));
        $delete = $aboutus->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Person is removed successfully');
        }
    }
}
