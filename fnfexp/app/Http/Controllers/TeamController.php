<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Team;

class TeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.team.index', compact('teams'));
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
            return view('admin.team.create');
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
        $team = new Team;
        $team->id = $request->team;
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->fb_url = $request->fb_url; 
        $team->image = $request->image->store('team');
        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $team->save();
        return redirect()->back()->with('message', 'Team Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Team $team)
    {
        if ($team->status == 1) {
            $team->update(['status' => 0]);
        } else {
            $team->update(['status' => 1]);
        }
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $update = $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'fb_url' => $request->fb_url, 
            'image' => $request->file('image')->store('team')
        ]);
        if ($update) {
            return redirect('/teams')->with('message', 'Team has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Team $team)
    {
        unlink(storage_path('app/public/' . $team->image));
        $delete = $team->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Team has removed successfully');
        }
    }
}
