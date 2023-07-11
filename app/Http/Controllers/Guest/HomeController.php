<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Message;
// use Auth;
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
    
        public function vision()
        {
            $data = [
                'title' => 'Our vision',
            ];
            return view('guest.about.vision', $data);
        }
        public function mission()
        {
            $data = [
                'title' => 'Our mission',
            ];
            return view('guest.about.mission', $data);
        }
        public function values()
        {
            $data = [
                'title' => 'Core values',
            ];
            return view('guest.about.values', $data);
        }
        public function sustainability()
        {
            $data = [
                'title' => 'Sustainability report',
            ];
            return view('guest.about.sustainability', $data);
        }
        public function csr()
        {
            $data = [
                'title' => 'CSR',
            ];
            return view('guest.about.csr', $data);
        }
        
    public function services()
    {
        $data = [
            'title' => 'Our services',
        ];
        return view('guest.services', $data);
    }
    
    public function dental_checkup()
    {
        $data = [
            'title' => 'Dental checkup',
        ];
        return view('guest.services.dental-checkup', $data);
    }
    
    public function oral_disease_prevention()
    {
        $data = [
            'title' => 'Oral disease prevention',
        ];
        return view('guest.services.oral-disease-prevention', $data);
    }
    
    public function dental_fillings()
    {
        $data = [
            'title' => 'Dental fillings',
        ];
        return view('guest.services.dental-fillings', $data);
    }
    
    public function general_dentistry()
    {
        $data = [
            'title' => 'General dentistry',
        ];
        return view('guest.services.general-dentistry', $data);
    }
    
    public function airflow_treatment()
    {
        $data = [
            'title' => 'Airflow treatment',
        ];
        return view('guest.services.airflow-treatment', $data);
    }
    
    public function oral_surgery()
    {
        $data = [
            'title' => 'Oral surgery',
        ];
        return view('guest.services.oral-surgery', $data);
    }
    
    public function pediatric_dentistry()
    {
        $data = [
            'title' => 'Pediatric dentistry',
        ];
        return view('guest.services.pediatric-dentistry', $data);
    }
    
    public function dental_hygiene()
    {
        $data = [
            'title' => 'Dental hygiene',
        ];
        return view('guest.services.dental-hygiene', $data);
    }
    
    public function veneers()
    {
        $data = [
            'title' => 'Veneers',
        ];
        return view('guest.services.veneers', $data);
    }
    
    public function glass_ceramic_restorations()
    {
        $data = [
            'title' => 'Glass ceramic restorations',
        ];
        return view('guest.services.glass-ceramic-restorations', $data);
    }
    
    public function inlays_onlays()
    {
        $data = [
            'title' => 'Inlays onlays',
        ];
        return view('guest.services.inlays-onlays', $data);
    }
    
    public function crowns()
    {
        $data = [
            'title' => 'Crowns',
        ];
        return view('guest.services.crowns', $data);
    }
    
    public function bridge()
    {
        $data = [
            'title' => 'Bridge',
        ];
        return view('guest.services.bridge', $data);
    }
    
    public function dental_implant()
    {
        $data = [
            'title' => 'Dental implant',
        ];
        return view('guest.services.dental-implant', $data);
    }
    
    public function braces()
    {
        $data = [
            'title' => 'Braces',
        ];
        return view('guest.services.braces', $data);
    }
    
    public function clear_aligners_invisalign()
    {
        $data = [
            'title' => 'Clear aligners/invisalign',
        ];
        return view('guest.services.clear-aligners-invisalign', $data);
    }
    
    public function teeth_straightening()
    {
        $data = [
            'title' => 'Teeth straightening',
        ];
        return view('guest.services.teeth-straightening', $data);
    }
    
    public function teeth_whitening()
    {
        $data = [
            'title' => 'Teeth whitening',
        ];
        return view('guest.services.teeth-whitening', $data);
    }
    
    public function space_maintainers()
    {
        $data = [
            'title' => 'Space maintainers',
        ];
        return view('guest.services.space-maintainers', $data);
    }
    
    public function root_canal_treatment()
    {
        $data = [
            'title' => 'Root canal treatment',
        ];
        return view('guest.services.root-canal-treatment', $data);
    }
    
    public function gum_reshaping()
    {
        $data = [
            'title' => 'Gum reshaping',
        ];
        return view('guest.services.gum-reshaping', $data);
    }
    
    public function mouthwash()
    {
        $data = [
            'title' => 'Mouthwash',
        ];
        return view('guest.services.mouthwash', $data);
    }
    
    public function teeth_cleaning()
    {
        $data = [
            'title' => 'Teeth cleaning',
        ];
        return view('guest.services.teeth-cleaning', $data);
    }
    
    public function digital_dental_xrays()
    {
        $data = [
            'title' => 'Digital dental xrays',
        ];
        return view('guest.services.digital-dental-xrays', $data);
    }
    
    public function intraoral_camera()
    {
        $data = [
            'title' => 'Intraoral camera',
        ];
        return view('guest.services.intraoral-camera', $data);
    }
    
    public function root_planing()
    {
        $data = [
            'title' => 'Root planing',
        ];
        return view('guest.services.root-planing', $data);
    }
    
    public function wisdom_molar_extraction()
    {
        $data = [
            'title' => 'Wisdom molar extraction',
        ];
        return view('guest.services.wisdom-molar-extraction', $data);
    }
    
    public function sinus_lift()
    {
        $data = [
            'title' => 'Sinus lift',
        ];
        return view('guest.services.sinus-lift', $data);
    }
    
    public function topical_fluoride_treatment()
    {
        $data = [
            'title' => 'Topical fluoride treatment',
        ];
        return view('guest.services.topical-fluoride-treatment', $data);
    }
    
    public function bad_breath()
    {
        $data = [
            'title' => 'Bad breath',
        ];
        return view('guest.services.bad-breath', $data);
    }
    
    public function team()
    {
        $data = [
            'title' => 'Meet our team',
        ];
        return view('guest.team', $data);
    }
    
    public function timetable()
    {
        $data = [
            'title' => 'Doctors timetable',
        ];
        return view('guest.timetable', $data);
    }

    public function partnerships()
    {
        $data = [
            'title' => 'Corporate partnerships',
        ];
        return view('guest.partnerships', $data);
    }

    public function insurance()
    {
        $data = [
            'title' => 'Dental insurance',
        ];
        return view('guest.insurance', $data);
    }
    
    public function technology()
    {
        $data = [
            'title' => 'Our technology',
        ];
        return view('guest.technology', $data);
    }
    
    public function appointment()
    {
        $data = [
            'title' => 'Appointment',
        ];
        return view('guest.appointment', $data);
    }
    
    public function careers()
    {
        $data = [
            'title' => 'Careers',
        ];
        return view('guest.careers', $data);
    }
    
    public function appointment_post(Request $request)
    {
        //1. Validate request.
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);

        //2. Capture inputs.
        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');

        //Add appointment operation.
        $appointment = new Appointment;
        $appointment->code = 'PCAPP' . Str::random(5);
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
    
    public function contact_post(Request $request)
    {
        //1. Validate request.
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        //2. Capture inputs.
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');

        //Add contact message operation.
        $contact = new Message;
        $contact->code = 'PCMSG' . Str::random(5);
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->subject = $subject;
        $contact->description = $message;
        $result = $contact->save();
    
        //7. Validate result.
        if($result){
            // logToDB("create_contact_success", "Contact #{$contact->code} successful.", NULL, NULL, $username, "user", 1);
            return back()->with("success", "Contact submitted successfully.");
        }else{
            // logToDB("create_contact_error", "Contact #{$contact->code} unsuccessful.", NULL, NULL, $username, "user", 1);
            return back()->with("error", "Contact unsuccessful.");
        }

    }
    
}
