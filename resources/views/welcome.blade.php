@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-info">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                        <img src="http://schoobeebd.com/sca/sca_dhaka_abdullapur/app/asset/custom/upload/web/image/slider1.jpg" width="1000">
                        </div>
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8 bg-light" style="height:300px; margin:5px">--}}

                                {{--<div class="card text-white bg-primary mb-3" style="max-width: 40rem;  margin:10px">--}}
                                    {{--<div class="card-header">Notice</div>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<h5 class="card-title">Primary card title</h5>--}}
                                        {{--<a href="#" class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</a>--}}
                                        {{--<a href="#" class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</a>--}}
                                        {{--<a href="#" class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</a>--}}
                                        {{--<a href="#" class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-3 bg-light" style="height:300px;margin: 5px">--}}

                                {{--<div class="card text-white bg-primary mb-3" style="max-width: 18rem;  margin:10px">--}}
                                    {{--<div class="card-header">Teacher Information</div>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<h5 class="card-title">Primary card title</h5>--}}
                                        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-8 bg-light" style="height:300px; margin:5px">--}}

                                    {{--<div class="card text-white bg-primary mb-3" style="max-width: 40rem;  margin:10px">--}}
                                        {{--<div class="card-header">Founding chairman speech</div>--}}
                                        {{--<div class="card-body">--}}
                                            {{--<h5 class="card-title">Primary card title</h5>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 bg-light" style="height:300px;margin: 5px">--}}

                                    {{--<div class="card text-white bg-primary mb-3" style="max-width: 18rem;  margin:10px">--}}
                                        {{--<div class="card-header">Teacher Information</div>--}}
                                        {{--<div class="card-body">--}}
                                            {{--<h5 class="card-title">Primary card title</h5>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-8 bg-light" style="height:300px; margin:5px">--}}

                                    {{--<div class="card text-white bg-primary mb-3" style="max-width: 40rem;  margin:10px">--}}
                                        {{--<div class="card-header">Management manager speech</div>--}}
                                        {{--<div class="card-body">--}}
                                            {{--<h5 class="card-title">Primary card title</h5>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 bg-light" style="height:300px;margin: 5px">--}}

                                    {{--<div class="card text-white bg-primary mb-3" style="max-width: 18rem;  margin:10px">--}}
                                        {{--<div class="card-header">Academic information</div>--}}
                                        {{--<div class="card-body">--}}
                                            {{--<h5 class="card-title">Primary card title</h5>--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12 bg-light" style="height:300px; margin:5px">--}}
                                    {{--<h1>Feedback from guardian</h1>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin-left:30px">--}}
                                                {{--<div class="card-header">Header</div>--}}
                                                {{--<div class="card-body">--}}
                                                    {{--<h5 class="card-title">Primary card title</h5>--}}
                                                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="card text-white bg-primary mb-3" style="max-width: 18rem;  margin-left:30px">--}}
                                                {{--<div class="card-header">Header</div>--}}
                                                {{--<div class="card-body">--}}
                                                    {{--<h5 class="card-title">Primary card title</h5>--}}
                                                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="card text-white bg-primary mb-3" style="max-width: 18rem;  margin-left:30px">--}}
                                                {{--<div class="card-header">Header</div>--}}
                                                {{--<div class="card-body">--}}
                                                    {{--<h5 class="card-title">Primary card title</h5>--}}
                                                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                {{--</div>--}}


                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection