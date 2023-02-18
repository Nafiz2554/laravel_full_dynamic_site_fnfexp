<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\CompanyProfile;

class CompanyprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_profiles = CompanyProfile::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.company_profile.index', compact('company_profiles'));
        } else {
            return Redirect::to('/admins')->send();
        }
        //return view('admin.company_profile.index',compact('company_profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.company_profile.create');
        } else {
            return Redirect::to('/admins')->send();
        }
        //return view('admin.company_profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company_profile = new CompanyProfile;
        $company_profile->id = $request->company_profile;
        $company_profile->who_we_are = $request->who_we_are;
        $company_profile->fn_express = $request->fn_express;
        $company_profile->mission = $request->mission;
        $company_profile->vission = $request->vission;
        $company_profile->customers = $request->customers;
        $company_profile->experience = $request->experience;
        $company_profile->percel_delivery = $request->percel_delivery;
        $company_profile->image = $request->image->store('company_profile');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $company_profile->save();
        return redirect()->back()->with('message', 'Profile Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(CompanyProfile $company_profile)
    {
        if ($company_profile->status == 1) {
            $company_profile->update(['status' => 0]);
        } else {
            $company_profile->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyProfile $company_profile)
    {
        return view('admin.company_profile.edit', compact('company_profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyProfile $company_profile)
    {
        $update = $company_profile->update([

            'who_we_are' => $request->who_we_are,
            'fn_express' => $request->fn_express,
            'mission' => $request->mission,
            'vission' => $request->vission,
            'customers' => $request->customers,
            'experience' => $request->experience,
            'percel_delivery' => $request->percel_delivery,
            'image' => $request->file('image')->store('company_profile')
        ]);
        if ($update) {
            return redirect('/company_profiles')->with('message', 'Company Profile has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(CompanyProfile $company_profile)
    {
        unlink(storage_path('app/public/' . $company_profile->image));
        $delete = $company_profile->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Informations are removed successfully');
        }
    }
}
