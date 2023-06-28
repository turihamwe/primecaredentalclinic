<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    
    public function contact()
    {
        $data = [
            'title' => 'Contact us',
        ];
        return view('guest.contact', $data);
    }
    
}
