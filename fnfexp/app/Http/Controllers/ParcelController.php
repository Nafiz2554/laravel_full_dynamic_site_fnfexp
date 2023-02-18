<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ParcelTrack;

class ParcelController extends Controller
{
    // public function list(Request $request)
    // {

    //     $parcelid = $request->input('parcel_id');

    //     echo $parcelid;
    //     $all_data = ParcelTrack::all();
    //     $parcelbyid=DB::connection('mysql2')->select('select * from parcel_tracks where parcel_id = ?',[str($request->input('parcel_id'))]);

    //     return view('frontend.parcel_track', compact('all_data','parcelbyid'));
    // }

    public function list(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            //where
            $parcel = ParcelTrack::where('parcel_id','=',$search)->get();
        } else {
            $parcel = [];
           
        }
        $footers = Footer::all();

        return view('frontend.parcel_track', compact('parcel', 'footers','search'));
    }
}
