<?php

namespace App\Http\Controllers;

use App\Models\TutorInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Throwable;

class TutorController extends UserController
{
    public function index(Request $request)
    {
        return $this->dashboard($request);
    }

    public function dashboard(Request $request)
    {
        $this->data['title'] = "Tutor Dashboard";
        return view('tutor.dashboard', $this->data);
    }
    public function courses(Request $request)
    {
        $this->data['title'] = "courses";
        return view('tutor.dashboard', $this->data);
    }

    public function profile_qualification()
    {
        $this->data['title'] = "Profile";

        $this->data['options'] = [
            'qualification' => [
                'UG',
                'PG'
            ],
            'skills' => [
                'Critical thinking skills',
                'Patience',
                'Communication skills',
                'Organization skills',
            ],
            'experience' => [
                'Fresher',
                '1 Year',
                '2 Year',
                'More than 3 Years',
            ],
            'teach' => [
                'English',
                'Tamil',
                'Social',
                'Science',
            ],

        ];
        $this->data['tutorinfo'] = TutorInfo::find($this->user->id);
        return view('tutor.profile_qualification', $this->data);
    }

    public function update_qualification(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'qualification' => 'required|string',
                    'skills' => 'required|string',
                    'experience' => 'required|string',
                    'teaching' => 'required|string',
                    'info' => 'required|string',
                ]
            );

            if ($validator->fails()) {

                return redirect()->back()->withErrors($validator)->withInput();
            }
            $info = TutorInfo::find($this->user->id);

            $tutor_info = [
                'user_id' => $this->user->id,
                'qualification' => $request->qualification,
                'skills' => $request->skills,
                'experience' => $request->experience,
                'teaching' => $request->teaching,
                'info' => $request->info,

            ];

            $info ? TutorInfo::where('user_id', $this->user->id)->update($tutor_info) : TutorInfo::insert($tutor_info);


            return redirect()->back()->with('success', 'Tutor Qualification updated');
        } catch (Throwable $e) {

            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
