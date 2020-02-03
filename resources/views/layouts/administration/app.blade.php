<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
{{--custom--}}
<!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
{{--custom--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">

</head>
<body>
<div id="app" class="container-fluid">
    <nav class="navbar navbar-expand-md bg-success navbar-laravel">
        <div class="container-fluid">
            <div><img src="http://schoobeebd.com/sca/sca_dhaka_abdullapur/app/asset/custom/upload/20180309094821638088sca-logo.png" width="70px">
                <b style="font-size: xx-large">Shahid Model School And College</b>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="{{route('stu_result')}}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                Notice
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="{{route('stu_result')}}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                Admission info
                            </a>
                        </li>
                        <div class="dropdown">
                            <button style="width: 160px" class="dropbtn">Login</button>
                            <div class="dropdown-content">
                                <a href="{{route('login') }}">Login</a>
                                <a href="{{route('academic.login') }}">Academic</a>
                                <a href="{{route('administration.login')}}">Administrator</a>
                            </div>
                        </div>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="{{route('admission.index')}}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                Admission <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="{{route('employee-attendance.index')}}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                Employee Attendance <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="{{route('notice.index')}}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                Notice <span class="caret"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('class-fee.index')}}">Fee-setup</a>
                                <a class="dropdown-item" href="{{route('student-fee.index')}}">Student Fee</a>
                                <a class="dropdown-item" href="{{route('fee_check_form')}}">Fee Check</a>
                                <a class="dropdown-item" href="{{route('admission-fee.index')}}">AdmissionFee-setup</a>
                                <a class="dropdown-item" href="{{route('admission-fee-pay.index')}}">AdmissionFee</a>
                                <a class="dropdown-item" href="{{route('admission_fee_check')}}">Admission Fee Check</a>
                                <a class="dropdown-item" href="{{route('employee-fee-manage.index')}}">Employee Fee Manage</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Behind
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('employee-designation.index')}}">Employee Designation</a>
                                <a class="dropdown-item" href="{{route('employee-designation-fee.index')}}">Employee Designation Fee</a>
                                <a class="dropdown-item" href="{{route('room.index')}}">Room</a>
                                <a class="dropdown-item" href="{{route('exam-type.index')}}">Exam Type</a>
                                <a class="dropdown-item" href="{{route('student-type.index')}}">Student Type</a>
                                <a class="dropdown-item" href="{{route('subject.index')}}">Subject</a>
                                <a class="dropdown-item" href="{{route('my-class.index')}}">Class</a>
                                <a class="dropdown-item" href="{{route('section.index')}}">Section</a>
                                <a class="dropdown-item" href="{{route('my-class-section.index')}}">Class-Section</a>
                                <a class="dropdown-item" href="{{route('my-class-subject.index')}}">Class-Subject</a>
                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <div class="dropdown">
                                    <button style="width: 160px" class="dropbtn">Register</button>
                                    <div class="dropdown-content">
                                        <a href="{{route('register') }}">Student</a>
                                        <a href="{{route('academic.register') }}">Academic</a>
                                        <a href="{{route('administration.register')}}">Administrator</a>
                                    </div>
                                </div>
                            @endif
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4 bg-light" style="min-height: 660px;">
        @yield('content')
    </main>
    <nav class="navbar navbar-dark bg-success container-fluid " style="height: 70px">
        <p style="margin-left: 45% ;margin-top: 25px">&copy Md. Hafisul Islam from IUBAT</p>
    </nav>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>
