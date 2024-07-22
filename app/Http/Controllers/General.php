<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('guest.about_us', $this->data);
    }

    public function how_it_works(Request $request)
    {
        $this->data['title'] = "How it works";
        return view('guest.how_it_works', $this->data);
    }
    public function subscriptions(Request $request)
    {
        $this->data['title'] = "Subscriptions";
        return view('guest.subscriptions', $this->data);
    }
    public function contact_us(Request $request)
    {
        $this->data['title'] = "Contact Us";
        return view('guest.contact_us', $this->data);
    }
    public function register(Request $request)
    {
        $this->data['title'] = "Register";
        return view('guest.register', $this->data);
    }
    public function login(Request $request)
    {
        $this->data['title'] = "Register";
        return view('guest.login', $this->data);
    }
    public function verify_otp(Request $request)
    {
        $this->data['title'] = "Verify OTP";

        if (!($this->data['otp_telephone'] = $request->session()->get('otp_telephone'))) {
            return redirect()->route('login')->with('error', 'Please try to login');
        }

        $this->data['otp_user_id'] = $request->session()->get('otp_user_id');
        $this->data['otp_digits'] = $request->session()->get('otp_digits');

        return view('guest.verify_otp', $this->data);
    }
    public function terms_and_conditions(Request $request)
    {
        $this->data['title'] = "Terms and condtions";
        return view('guest.terms_and_conditions', $this->data);
    }
    public function thanks(Request $request)
    {
        $this->data['title'] = "Thanks";
        return view('guest.thanks', $this->data);
    }
    public function testimonials(Request $request)
    {
        $this->data['title'] = "Testimonials";
        return view('guest.testimonials', $this->data);
    }
    public function services(Request $request)
    {
        $this->data['title'] = "Services";
        return view('guest.services', $this->data);
    }
    public function blogs(Request $request)
    {
        $this->data['title'] = "Services";
        return view('guest.blogs', $this->data);
    }
    public function support(Request $request)
    {
        $this->data['title'] = "Services";
        return view('guest.support', $this->data);
    }
    public function sitemap(Request $request)
    {
        $this->data['title'] = "Services";
        return view('guest.sitemap', $this->data);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login')->with('success', 'logout successfully');
    }
}
