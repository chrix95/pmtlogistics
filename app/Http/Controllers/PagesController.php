<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        return view('welcome');
    }

    public function about () {
        return view('about');
    }

    public function services () {
        return view('services');
    }

    public function servicesTemplate ($slug) {
        if ($slug == "ocean") {
            return view('services.ocean');
        }
        else if ($slug == "land") {
            return view('services.land');
        }
        else if ($slug == "air") {
            return view('services.air');
        }
        else if ($slug == "cargo") {
            return view('services.cargo');
        }
        else {
            return abort(404);
        }
        
    }

    public function testimonial () {
        return view('testimonial');
    }

    public function faqs () {
        return view('faqs');
    }
    
    public function contact () {
        return view('contact');
    }
    
    // Tracking Ref controllers
    public function tracking (Request $request) {
        $ref = $request->track;
        if ($ref == NULL) {
            return abort('404');
        }
        return redirect()->route('tracking.ref', ['trackingRef' => $ref]);
    }

    public function trackingRef ($trackingRef) {
        if ($trackingRef == "PMT-1234567890") {
            return view('trackingID', ['status' => true, 'trackingRef' => $trackingRef]);
        } else {
            return view('trackingID', ['status' => false, 'trackingRef' => $trackingRef]);
        }
    }

}
