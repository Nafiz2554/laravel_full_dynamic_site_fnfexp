<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Facades\Redirect;

class FooterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.footer.index', compact('footers'));
        } else {
            return Redirect::to('/admins')->send();
        }
        //return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.team.create');
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.footer.create');
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
        $footer = new Footer;
        $footer->id = $request->footer;
        $footer->phone = $request->phone; 
        $footer->image = $request->image->store('footer');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $footer->save();
        return redirect()->back()->with('message', 'Footer Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Footer $footer)
    {
        if ($footer->status == 1) {
            $footer->update(['status' => 0]);
        } else {
            $footer->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $update = $footer->update([
            'phone' => $request->phone,
            
            'image' => $request->file('image')->store('footer')
        ]);
        if ($update) {
            return redirect('/footers')->with('message', 'Footer has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Footer $footer)
    {
        unlink(storage_path('app/public/' . $footer->image));
        $delete = $footer->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Footer info has removed successfully');
        }
    }
}
