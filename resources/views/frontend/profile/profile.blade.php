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
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Profile</span> Page</span></h4>
                            <div class="nk-widget-content">
                                <form action="{{ route('profile-update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row vertical-gap sm-gap">
                                        <div class="col-xl-2">
                                            <div class="mb-5">
                                                <img id="showImage" accept='image/*' width="100px"
                                                    style="border-radius: 50%"
                                                    src="{{ Auth::user()->image == null ? url('frontend/assets/images/profile-image.svg') : asset(Auth::user()->image) }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-10">
                                            <div class="mb-5">
                                                <label class="text-dark font-weight-medium" for="">Image</label>
                                                <input type="file" class="form-control" name="image" id="image"
                                                    accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-gap-1"></div>
                                    <div class="row vertical-gap sm-gap">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required" name="name"
                                                placeholder="{{ Auth::user()->name == null ? 'Name field is empty' : 'Name' }}"
                                                value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required" name="username"
                                                placeholder="{{ Auth::user()->username == null ? 'Username field is empty' : 'Username' }}"
                                                value="{{ Auth::user()->username }}">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control required" name="email"
                                                placeholder="Email *" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required" name="address"
                                                placeholder="{{ Auth::user()->address == null ? 'Address field is empty' : 'Address' }}"
                                                value="{{ Auth::user()->address }}">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control required" name="phone"
                                                placeholder="{{ Auth::user()->phone == null ? 'Phone field is empty' : 'Phone' }}"
                                                value="{{ Auth::user()->phone }}">
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
