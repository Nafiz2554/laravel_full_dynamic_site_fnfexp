<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $testimonials= Testimonial::all(); 
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.testimonial.index',compact('testimonials'));
          } else {
              return Redirect::to('/admins')->send();
          }
        //return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // return view('admin.testimonial.create');
      $admin_id = Session()->get('admin_id');
      if ($admin_id) {
        return view('admin.testimonial.create');
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
         $testimonial=new Testimonial;
         $testimonial->id= $request->testimonial;
         $testimonial->heading= $request->heading;
         $testimonial->description= $request->description;
         $testimonial->client_name= $request->client_name;
         $testimonial->client_address= $request->client_address; 
         $testimonial->image= $request->image->store('testimonial');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
         $testimonial->save();
         return redirect()->back()->with('message','Testimonial Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Testimonial $testimonial)
    {
        if($testimonial->status==1){
            $testimonial->update(['status'=>0]);
        }else{
            $testimonial->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
         return view('admin.testimonial.edit',compact('testimonial')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $update=$testimonial->update([
            'heading'=>$request->heading,
            'description'=>$request->description,
            'client_name'=>$request->client_name,
            'client_address'=>$request->client_address, 
            'image'=>$request->file('image')->store('testimonial')
        ]);
        if($update){
            return redirect('/testimonials')->with('message','Testimonial has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Testimonial $testimonial)
    {
        unlink(storage_path('app/public/'.$testimonial->image));
        $delete=$testimonial->delete();
        if($delete){
            return redirect()->back()->with('message','Testimonial has removed successfully');
        }
    }
}
