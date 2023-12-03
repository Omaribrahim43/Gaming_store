@extends('frontend.layouts.master')
@section('content')
    <div class="nk-main">
        <div class="container">
            <div class="nk-gap-4"></div>
            <div class="col-md-6 mx-auto">
                <div class="nk-widget">
                    <h4 class="nk-widget-title text-center"><span class="text-main-1">Reset</span> Your Password</h4>
                    <small>Forgot your password? No problem. Just let us know your email address and we will email you a
                        password reset link that will allow you to choose a new one.</small>
                    <div class="nk-gap-1"></div>
                    <div class="nk-widget-content">
                        <form action="{{ route('password.email') }}" method="POST" class="nk-form">
                            @csrf
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-12">
                                    <input type="text" class="form-control required" name="email" placeholder="Email *"
                                        value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="nk-gap-1"></div>
                            <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-2">
                                <span>Email Password Reset Link</span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
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
