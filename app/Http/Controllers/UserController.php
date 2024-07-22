<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Throwable;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\VerificationCode;
use App\Rules\UniqueByConnection;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public $data = [];
    public $user;
    public $userinfo;
    public $session;


    public function __construct()
    {
        $this->data['title'] = "Default Title";
        $this->user = $this->data['user'] = Auth::user();
        $this->userinfo = $this->data['userinfo'] = call_user_func([$this->user, 'get_role']);
        $this->session = session();
    }

    public function switch_role(Request $request)
    {
        $this->data['title'] = 'Switch Role';
        return view('user.switch_role', $this->data);
    }

    public function post_switch_role(Request $request)
    {

        try {
            // $user_info = $user->get_role();
            $user_info = call_user_func([$this->user, 'get_role']);
            $validator = Validator::make(
                $request->all(),
                [
                    'role' => 'required|exists:roles,id',
                ]
            );

            if ($validator->fails()) {

                return redirect()->back()->withErrors($validator)->withInput();
            }

            $user_info->role_id = (int)$request->role;
            $user_info->save();

            return redirect()->route('user.redirect-dashboard');
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }
    }

    public function redirect_dashboard()
    {
        try {
            switch ($this->userinfo->role_id) {
                case 1:
                    return redirect()->route('tutor.dashboard');
                    break;
                case 2:
                    return redirect()->route('institute.dashboard');
                    break;
                case 3:
                    return redirect()->route('warden.dashboard');
                    break;
                case 4:
                    return redirect()->route('parent.dashboard');
                    break;
                case 5:
                    return redirect()->route('student.dashboard');
                    break;
                case 6:
                    return redirect()->route('hosteller.dashboard');
                    break;
                default:
                    return redirect()->route('student.dashboard');
                    break;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function profile_info()
    {
        $this->data['title'] = "Profile";
        return view('user.profile.info', $this->data);
    }
    public function profile_address()
    {
        $this->data['title'] = "Profile Address";
        return view('user.profile.address', $this->data);
    }


    public function save_profile_info(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'first_name' => 'required|string',
                    'last_name' => 'required',
                    'email' => ['required', 'email', new UniqueByConnection('second_db', 'whowe_users', 'email', $this->user->id)],
                    'dob' => 'required|date',
                ]
            );

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $user = User::find($this->user->id);

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->dob = $request->dob;
            $user->save();


            return redirect()->back()->with('success', 'Profile info updated');
        } catch (Throwable $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
    public function save_profile_address(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'primary_address' => 'required|string|max:200',
                    'secondary_address' => 'required|string|max:200',
                    'city' => 'required|string|max:50',
                    'state' => 'required|string|max:50',
                    'country' => 'required|string|max:50',
                    'zipcode' => 'required|string|max:6',
                ]
            );
            

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $userinfo = UserInfo::where('user_id',$this->user->id)->first();

            $userinfo->primary_address = $request->primary_address;
            $userinfo->secondary_address = $request->secondary_address;
            $userinfo->city = $request->city;
            $userinfo->state = $request->state;
            $userinfo->country = $request->country;
            $userinfo->zipcode = $request->zipcode;
            $userinfo->save();


            return redirect()->back()->with('success', 'Profile Address updated');
        } catch (Throwable $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
