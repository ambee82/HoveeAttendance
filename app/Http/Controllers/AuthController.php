<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Throwable;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\VerificationCode;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function login(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'identifier' => 'required|string',
                ]
            );

            if ($validator->fails()) {


                return redirect()->back()->withErrors($validator)->withInput();
            }
            $identifier = $request->input('identifier');
            $user = User::where('mobile_no', $identifier)->orWhere('whowe_id', $identifier)->first();

            if (!$user) {
                return redirect()->back()->withErrors(['identifier' => 'User not found.']);
            }

            // Check if the user is active
            if ($user->is_active != 1) {

                return redirect()->back()->withErrors(['identifier' => 'Your account is currently locked. Please contact customer support for assistance.']);
            }

            $otp = $this->generateOtp($user->mobile_no);


            $request->session()->put('otp_telephone', $user->mobile_no);
            $request->session()->put('otp_user_id', $user->id);
            $request->session()->put('otp_digits', $otp->otp);


            return redirect()->route('verify-otp')->with('success', 'OTP sent for verification.');
        } catch (Throwable $e) {



            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
    public function verify_otp(Request $request)
    {
        try {

            $validator = Validator::make(
                $request->all(),
                [
                    'otp' => 'required|digits:6',
                    'user_id' => 'required',
                ]
            );

            if ($validator->fails()) {

                return redirect()->back()->withErrors($validator)->withInput();
            }
            $otp = VerificationCode::where('user_id', $request->user_id)
                ->where('otp', $request->otp)
                ->first();

            $now = Carbon::now();
            if (!$otp || $now->isAfter($otp->expire_at)) {
                return redirect()->back()->withErrors(['otp' => "Invalid or expired OTP"]);
            }
            $otp->update(['expire_at' => Carbon::now()]);
            $request->session()->forget(['otp_telephone', 'otp_user_id', 'otp_digits']);

            $user = User::find($request->user_id);

            if ($user) {

                $user_info = UserInfo::where('user_id', $user->id)->first();

                if (!$user_info) {
                    UserInfo::create([
                        'user_id' => $user->id,
                        'role_id' => 1,
                    ]);
                }
                Auth::login($user, true);

                return redirect()->route('user.switch-role')->with('success', 'Login successfully');
            } else {
                throw new Exception('User not found.');
            }
        } catch (Throwable $e) {
            throw $e;


            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }



    public function generateOtp($mobile_no)
    {
        // Retrieve the user by mobile number
        $user = User::where('mobile_no', $mobile_no)->first();

        // Check if OTP exists and is valid
        $otp = VerificationCode::where('user_id', $user->id)->latest()->first();
        $now = Carbon::now();
        if ($otp && $now->isBefore($otp->expire_at)) {
            return $otp;
        }

        // Create new OTP
        return VerificationCode::create([
            'user_id' => $user->id,
            'otp' => strval(rand(123456, 999999)),
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);
    }
}
