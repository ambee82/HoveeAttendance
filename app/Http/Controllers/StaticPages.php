<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPages extends Controller
{
    public $data = [];

    public function index(Request $request)
    {
        $this->data['title'] = "My Title Index";
        return view('pages.index', $this->data);
    }
}
