<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Plan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.plan.index', compact('plans'));
        } else {
            return Redirect::to('/admins')->send();
        }
        // return view('admin.plan.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.plan.create');
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.plan.create');
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
        $plan = new Plan;
        $plan->id = $request->plan;
        $plan->title = $request->title;
        $plan->subtitle = $request->subtitle;
        $plan->price = $request->price;
        $plan->unit = $request->unit;
        $plan->input1 = $request->input1;
        $plan->input2 = $request->input2;
        $plan->input3 = $request->input3;
        $plan->input4 = $request->input4;
        $plan->mobile_no = $request->mobile_no;

        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $plan->save();
        return redirect()->back()->with('message', 'New Plan Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Plan $plan)
    {
        if ($plan->status == 1) {
            $plan->update(['status' => 0]);
        } else {
            $plan->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        return view('admin.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $update = $plan->update([

            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'price' => $request->price,
            'unit' => $request->unit,
            'input1' => $request->input1,
            'input2' => $request->input2,
            'input3' => $request->input3,
            'input4' => $request->input4,
            'mobile_no' => $request->mobile_no,
        ]);
        if ($update) {
            return redirect('/plans')->with('message', ' Plan has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Plan $plan)
    {

        $delete = $plan->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Plan has been removed successfully');
        }
    }
}
