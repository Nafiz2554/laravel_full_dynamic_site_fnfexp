<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Redirect;

class FaqController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.faq.index', compact('faqs'));
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
            return view('admin.faq.create');
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
        $faq = new Faq;
        $faq->id = $request->faq;
        $faq->ques = $request->ques;
        $faq->ans = $request->ans;
        
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $faq->save();
        return redirect()->back()->with('message', 'FaQ Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Faq $faq)
    {
        if ($faq->status == 1) {
            $faq->update(['status' => 0]);
        } else {
            $faq->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $update = $faq->update([
            'ques' => $request->ques,
            'ans' => $request->ans
             
        ]);
        if ($update) {
            return redirect('/faqs')->with('message', 'FaQ has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Faq $faq)
    {
        
        $delete = $faq->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'FaQ has removed successfully');
        }
    }
}
