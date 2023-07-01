<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Auth;
use Str;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'title' => 'Home page',
        ];
        return view('guest.home', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'About us',
        ];
        return view('guest.about', $data);
    }
    
    public function services()
    {
        $data = [
            'title' => 'Services us',
        ];
        return view('guest.services', $data);
    }
    
    public function appointment()
    {
        $data = [
            'title' => 'Appointment',
        ];
        return view('guest.appointment', $data);
    }
    
    public function appointment_post(Request $request)
    {
        //1. Validate request.
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|integer|between:1,10',
            'phone' => 'required|integer|between:1,10',
        ]);

        //2. Capture inputs.
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');
        //User data.
        $user_data = Auth::user();
        $username = $user_data->username;

        //Add appointment operation.
        $appointment = new Appointment;
        // $appointment->code = uniqid();
        $appointment->code = 'PCDC' . Str::random(5);
        $appointment->name = $name;
        $appointment->address = $address;
        $appointment->phone = $phone;
        $result = $appointment->save();
    
        //7. Validate result.
        if($result){
            // logToDB("create_appointment_success", "Appointment #{$appointment->code} successful.", NULL, NULL, $username, "user", 1);
            return back()->with("success", "Appointment submitted successfully.");
        }else{
            // logToDB("create_appointment_error", "Appointment #{$appointment->code} unsuccessful.", NULL, NULL, $username, "user", 1);
            return back()->with("error", "Appointment unsuccessful.");
        }

    }
    
    public function contact()
    {
        $data = [
            'title' => 'Contact us',
        ];
        return view('guest.contact', $data);
    }
    
}
