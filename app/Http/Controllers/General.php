<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class General extends Controller
{
    public $data = [];

    public function index(Request $request)
    {
        return $this->home($request);
    }
    public function home(Request $request)
    {
        $this->data['title'] = "Home";
        return view('guest.home', $this->data);
    }

    public function about_us(Request $request)
    {
        $this->data['title'] = "About Us";
        return view('pages.index', $this->data);
    }

    public function how_it_works(Request $request)
    {
        $this->data['title'] = "How it works";
        return view('pages.index', $this->data);
    }
    public function subscriptions(Request $request)
    {
        $this->data['title'] = "Subscriptions";
        return view('pages.index', $this->data);
    }
    public function contact_us(Request $request)
    {
        $this->data['title'] = "Contact Us";
        return view('pages.index', $this->data);
    }
    public function register(Request $request)
    {
        $this->data['title'] = "Register";
        return view('pages.index', $this->data);
    }
    public function terms_and_conditions(Request $request)
    {
        $this->data['title'] = "Terms and condtions";
        return view('pages.index', $this->data);
    }
    public function thanks(Request $request)
    {
        $this->data['title'] = "Thanks";
        return view('pages.index', $this->data);
    }
    public function testimonials(Request $request)
    {
        $this->data['title'] = "Testimonials";
        return view('pages.index', $this->data);
    }
}
