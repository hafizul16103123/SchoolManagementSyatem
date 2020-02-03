<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{


    use ResetsPasswords;


    protected $redirectTo = 'academic/home';


    public function __construct()
    {
        $this->middleware('guest:academic');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('academic.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    protected function guard()
    {
        return Auth::guard('academic');
    }

    public function broker()
    {
        return Password::broker('academics');
    }
}
