<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class Home extends Controller {

    //public $data;

    public function index() {

        $about_us = DB::table('about_us')->where('status', 1)->first();
        $service = DB::table('service')->where('status', 1)->get();
        $our_team = DB::table('our_team')->where('status', 1)->get();
        $portfolio = DB::table('portfolio')->where('status', 1)->get();
        $slider = DB::table('slider')->where('status', 1)->get();
        $desService = DB::table('short_description')->where('title', 'service')->first();
        $desfortfolio = DB::table('short_description')->where('title', 'portfolio')->first();
        $desOurTeam = DB::table('short_description')->where('title', 'our_team')->first();
        $desContact = DB::table('short_description')->where('title', 'contact_us')->first();

        $data = array(
            'service' => $service,
            'our_team' => $our_team,
            'portfolio' => $portfolio,
            'about_us' => $about_us,
            'slider' => $slider,
            'serviceDes' => $desService->short_description,
            'fortfolioDes' => $desfortfolio->short_description,
            'ourteamDes' => $desOurTeam->short_description,
            'contactDes' => $desContact->short_description,
        );

        return view('template.home', $data);
    }

    public function sendEmail(Request $request) {

        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        Mail::send(['text' => 'mail'], $data, function($message) use ($data) {
            $message->to('shahincsebu@gmail.com', 'Admin')->subject('User contact info');
            $message->from($data['email']);
        });
        
        ///session::flash('success', 'Data send successfully');
        return redirect('/')->with('success', 'Data send successfully');
    }

}
