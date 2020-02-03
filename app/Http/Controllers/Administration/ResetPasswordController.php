<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{


    use ResetsPasswords;


    protected $redirectTo = 'administration/home';


    public function __construct()
    {
        $this->middleware('guest:administration');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('administration.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    protected function guard()
    {
        return Auth::guard('administration');
    }

    public function broker()
    {
        return Password::broker('administrations');
    }
}
