<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Throwable;

use App\Models\User;
use App\Models\UserRole;
use App\Models\VerificationCode;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthUserController extends Controller
{
    public $data = [];
    public $session;


    public function __construct()
    {
        $this->data['title'] = "Default Title";
        $this->session = session();
    }

    public function switch_role(Request $request)
    {
        $this->data['title'] = 'Switch Role';
        return view('user.switch_role', $this->data);
    }

    public function post_switch_role(Request $request)
    {
        dd("DSfdsf");
    }
}
