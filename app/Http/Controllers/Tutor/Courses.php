<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class Courses extends UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['title'] = 'Tutor Courses';
        return view('tutor.courses.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['title'] = 'Tutor Courses Create';
        return view('tutor.courses.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->data['title'] = 'Tutor Courses Edit';
        return view('tutor.courses.edit',$this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
