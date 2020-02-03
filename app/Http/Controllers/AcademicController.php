<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:academic');
    }

    public function index()
    {
        return view('academic.home');
    }
}