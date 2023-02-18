<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\CompanyProfile;
use App\Models\Aboutus;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\Service;
use App\Models\Plan;
use App\Models\CompanyIntro;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Footer;
use App\Models\Header;

class HomeController extends Controller
{
    public function index()
    {
        $company_intros = CompanyIntro::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.home', compact('teams', 'company_intros','footers','testimonials','headers'));
    }

    public function company_profile()
    {
        $company_profiles = CompanyProfile::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.company_profile', compact('company_profiles', 'testimonials', 'teams','footers','headers'));
    }

    public function our_management()
    {
        $aboutuses = Aboutus::all();
        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.our_management', compact('aboutuses','footers','headers'));
    }

    public function service()
    {
        $services = Service::all();
        $plans = Plan::all();
        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.service', compact('services', 'plans','footers','headers'));
    }
    public function area_coverage()
    {   

        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.area_coverage',compact('footers','headers'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.blog', compact('blogs','footers','headers'));
    }

    public function success_story()
    {    
        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.success_story',compact('footers','headers'));
    }

    public function contact()
    {   
        $footers= Footer::all();
        $headers= Header::all();
        return view('frontend.contact',compact('footers','headers'));
    }
    public function storeMessage(Request $request)
    {
        $message = new Message;
        $message->id = $request->message;
        $message->sender = $request->sender;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->issue = $request->issue;


        //  if($request->hasFile('image')){
        //      $file=$request->file('image');
        //      $extention= $file->getClientOriginalExtension();
        //      $filename=time().'.'.$extention;
        //      $file->move('category',$filename);
        //      $category->image= $filename;
        //  }
        $message->save();
        return redirect()->back()->with('message', 'Message Successfully Sent');
    }

    public function show_message()
    {
        $messages = Message::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.message.index', compact('messages'));
        } else {
            return Redirect::to('/admins')->send();
        }
        // return view('admin.message.index', compact('messages'));
    }
    public function delete(Message $messages)
    {
        $delete = $messages->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Message deleted successfully');
        }
    }

    public function faq(){
        $footers=Footer::all();
        $headers= Header::all();
        $faqs=Faq::all();
        return view('frontend.faq',compact('footers','faqs','headers'));
    }

    public function detailView($name)
    {   
        $footers=Footer::all();
        $headers= Header::all();
        $aboutus = Aboutus::where('name', '=', $name)->get();
        return view('frontend.aboutus_details', compact('aboutus','footers','headers'));
    }
}
