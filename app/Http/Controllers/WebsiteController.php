<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WebsiteServiceAppointment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    public function aboutUs()
    {
        return view('website.about-us');
    }

    public function services()
    {
        return view('website.services');
    }

    public function contactUs()
    {
        return view('website.contact-us');
    }
    public function storeAppointment(Request $request)
    {
        $appointment =  new WebsiteServiceAppointment();
        $appointment->customerName = $request->customerName;
        $appointment->phoneNumber = $request->phoneNumber;
        $appointment->customerEmail = $request->customerEmail;
        $appointment->service_type = $request->service_type;
        $appointment->comment = $request->comment;
        $appointment->save();
        
        return redirect()->route('contact.us')->with('success','Appointment sent successfully');
    }

}
