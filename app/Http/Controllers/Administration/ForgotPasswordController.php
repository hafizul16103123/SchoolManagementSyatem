<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{


    use SendsPasswordResetEmails;


    public function __construct()
    {
        $this->middleware('guest:administration');
    }

    public function showLinkRequestForm()
    {
        return view('administration.passwords.email');
    }

    public function broker()
    {
        return Password::broker('administrations');
    }
}
