<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{


    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest:academic');
    }

    public function showLinkRequestForm()
    {
        return view('academic.passwords.email');
    }

    public function broker()
    {
        return Password::broker('academics');
    }
}
