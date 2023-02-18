<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{   

    public function index()
    {
        $header = Header::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.header.index', compact('header'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function create()
    {
        // return view('admin.team.create');
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.header.create');
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function store(Request $request)
    {   
        DB::table('headers')->truncate(); 
        $header = new Header;
        $header->id = $request->header;
        $header->phone = $request->phone;
        $header->email = $request->email;
         

        if ($request->hasFile('image')) {
            $header->image = $request->image->store('header');
        }
        $header->save();
        return redirect()->back()->with('message', 'New Header Info Has Successfully Updated');
    }
    public function delete(Header $header)
    {
        if ($header->image) {
            unlink(storage_path('app/public/' . $header->image));
        }
        $delete = $header->delete();
        if ($delete) {
            return redirect()->back()->with('message', ' This header info has been removed successfully');
        }
    }
}
