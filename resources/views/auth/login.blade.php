@extends('frontend.layouts.master')
@section('content')
    <div class="nk-main">
        <div class="container">
            <div class="nk-gap-4"></div>
            <div class="col-md-6 mx-auto">
                <div class="nk-widget">
                    <h4 class="nk-widget-title text-center"><span class="text-main-1">Login</span> With Us</h4>
                    <div class="nk-widget-content">
                        <form action="{{ route('login') }}" method="POST" class="nk-form">
                            @csrf
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-12">
                                    <input type="text" class="form-control required" name="email" placeholder="Email *"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="col-md-12">
                                    <input type="password" class="form-control required" name="password"
                                        placeholder="password *">
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('register') }}">Create A New Account?
                                </a>
                            </div>
                            <div class="nk-gap-1"></div>
                            <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-2">
                                <span>Login</span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                            <a class="nk-btn nk-btn-rounded nk-btn-color-main-2" href="{{ url('login/google') }}">Login With
                                Google</a>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">Forgot Password ?
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
        @include('frontend.layouts.footer')
    </div>
    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top-3.png') }}" alt="">
    {{-- <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" alt=""> --}}

    <!-- END: Page Background -->
@endsection
