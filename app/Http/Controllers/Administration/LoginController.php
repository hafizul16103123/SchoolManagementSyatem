<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;


    protected $redirectTo = 'administration/home';


    public function __construct()
    {
        $this->middleware('guest:administration')->except('logout');
    }

    public function showLoginForm()
    {
        return view('administration.login');
    }

    protected function guard()
    {
        return Auth::guard('administration');
    }
}
