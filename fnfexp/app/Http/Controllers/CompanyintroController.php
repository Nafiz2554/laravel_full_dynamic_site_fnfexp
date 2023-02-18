<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\CompanyIntro;

class CompanyintroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_intros = CompanyIntro::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.company_intro.index', compact('company_intros'));
        } else {
            return Redirect::to('/admins')->send();
        }
       // return view('admin.company_intro.index', compact('company_intros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //    return view('admin.company_intro.create');

        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.company_intro.create');
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
        $company_intro = new CompanyIntro;
        $company_intro->id = $request->company_intro;
        $company_intro->title = $request->title;
        $company_intro->subtitle1 = $request->subtitle1;
        $company_intro->subtitle2 = $request->subtitle2;
        $company_intro->year = $request->year;
        $company_intro->total_delivery = $request->total_delivery;
        $company_intro->employee = $request->employee;
        $company_intro->experience = $request->experience;
        $company_intro->image = $request->image->store('company_intro');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $company_intro->save();
        return redirect()->back()->with('message', 'Company Introduction has been Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(CompanyIntro $company_intro)
    {
        if ($company_intro->status == 1) {
            $company_intro->update(['status' => 0]);
        } else {
            $company_intro->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyIntro $company_intro)
    {
        return view('admin.company_intro.edit', compact('company_intro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyIntro $company_intro)
    {
        $update = $company_intro->update([

            'title' => $request->title,
            'subtitle1' => $request->subtitle1,
            'subtitle2' => $request->subtitle2,
            'year' => $request->year,
            'total_delivery' => $request->total_delivery,
            'employee' => $request->employee,
            'experience' => $request->experience,
            'image' => $request->file('image')->store('company_intro')
        ]);
        if ($update) {
            return redirect('/company_intros')->with('message', 'Company introduction has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(CompanyIntro $company_intro)
    {
        unlink(storage_path('app/public/' . $company_intro->image));
        $delete = $company_intro->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Company Introduction are removed successfully');
        }
    }
}
