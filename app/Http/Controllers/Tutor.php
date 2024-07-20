<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Tutor extends Controller
{
    public $data = [];

    public function index(Request $request)
    {
        return $this->dashboard($request);
    }
    public function dashboard(Request $request)
    {
        $this->data['title'] = "Home";
        return view('tutor.dashboard', $this->data);
    }

    
    // public function 

}
