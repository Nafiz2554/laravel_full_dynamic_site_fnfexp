<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.service.index', compact('services'));
        } else {
            return Redirect::to('/admins')->send();
        }
        // return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.service.create');
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.service.create');
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
        $service = new Service;
        $service->id = $request->service;
        $service->why_choose_us = $request->why_choose_us;
        $service->description = $request->description;
        $service->experience = $request->experience;
        $service->image = $request->image->store('service');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $service->save();
        return redirect()->back()->with('message', 'New Service Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Service $service)
    {
        if ($service->status == 1) {
            $service->update(['status' => 0]);
        } else {
            $service->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $update = $service->update([
            'why_choose_us' => $request->why_choose_us,
            'description' => $request->description,
            'experience' => $request->experience,
            'image' => $request->file('image')->store('service')
        ]);
        if ($update) {
            return redirect('/services')->with('message', 'Service has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Service $service)
    {
        unlink(storage_path('app/public/' . $service->image));
        $delete = $service->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Service has removed successfully');
        }
    }
}
