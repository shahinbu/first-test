<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class Home extends Controller {

    public function index() {

        $about_us = DB::table('about_us')->where('status', 1)->first();
        $service = DB::table('service')->where('status', 1)->get();
        $our_team = DB::table('our_team')->where('status', 1)->get();
        $portfolio = DB::table('portfolio')->where('status', 1)->get();
        $slider = DB::table('slider')->where('status', 1)->get();

        $data = array(
            'service' => $service,
            'our_team' => $our_team,
            'portfolio' => $portfolio,
            'about_us' => $about_us,
            'slider' => $slider,
        );

        return view('template.home', $data);
    }

    public function sendEmail(Request $request) {

        $email = $request->email;
        $data['message'] = $request->message;
        Mail::send(['text' => 'mail'], $data, function($message) {
            $message->to('shahincsebu@gmail.com', 'Admin')->subject('User contact info');
            $message->from($email);
        });
    }

}
