@extends('frontend.layouts.master')
@section('content')
    <div class="nk-main">
        <div class="container">
            <div class="nk-gap-3"></div>
            <div class="row vertical-gap">
                <div class="col-lg-3">
                    <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Profile</span> Settings</span></h4>
                            <div class="nk-widget-content">
                                <ul class="nk-widget-categories">
                                    <li class="d-flex align-items-center">
                                        <i class="fa-solid fa-user"></i>
                                        <a class="mx-3" href="{{ route('profile') }}">Profile</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fa-solid fa-arrow-up-short-wide"></i>
                                        <a class="mx-3" href="{{ route('user-orders') }}">Orders</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fa-solid fa-lock"></i>
                                        <a class="mx-3" href="{{ route('change-password') }}">Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <!-- END: Sidebar -->
                </div>
                <div class="col-lg-9">
                    <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Change</span> Password</span></h4>
                            <div class="nk-widget-content ">
                                <form action="{{ route('update-password', Auth::user()->id) }}" method="POST">
                                    @csrf
                                    <div class="row vertical-gap sm-gap">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control required" name="old_password"
                                                placeholder="Old Password">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control required" name="new_password"
                                                placeholder="New Password">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control required"
                                                name="new_password_confirmation" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="nk-gap-1"></div>
                                    <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-2">
                                        <span>Submit</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
        <div class="nk-gap-4"></div>
        @include('frontend.layouts.footer')
    </div>
    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top-3.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" alt="">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            })
        });
    </script>
@endsection
