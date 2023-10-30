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
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Your</span> Orders</span></h4>
                            <div class="nk-widget-content ">
                                <div class="nk-store nk-store-cart">
                                    <div class="table-responsive">
                                        <!-- START: Products in Cart -->
                                        <table class="table nk-store-cart-products">
                                            <tbody>
                                                @if (count($userItems) > 0)
                                                    @foreach ($userItems as $orderId => $orderItems)
                                                        @foreach ($orderItems as $orderItem)
                                                            <tr>
                                                                <td class="nk-product-cart-thumb">
                                                                    <a href="" class="nk-image-box-1 nk-post-image">
                                                                        <img src="{{ asset($orderItem->product->image) }}"
                                                                            width="115">
                                                                    </a>
                                                                </td>
                                                                <td class="nk-product-cart-thumb">
                                                                    <h2 class="nk-post-title h4">
                                                                        <a href="">{{ $orderItem->product->name }}</a>
                                                                    </h2>
                                                                </td>
                                                                <td class="nk-product-cart-thumb">
                                                                    <a class="nk-btn nk-btn-outline nk-btn-rounded nk-btn-color-main-2"
                                                                        href="">Download</a>
                                                                </td>
                                                                <td class="nk-product-cart-thumb">
                                                                    <a class="nk-btn nk-btn-outline nk-btn-rounded nk-btn-color-main-2"
                                                                        href="">Genrate Code</a>
                                                                </td>
                                                                <td class="nk-product-cart-remove">
                                                                    <a href="#"><span
                                                                            class="ion-android-close"></span></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td class="nk-product-cart-thumb">
                                                            <h3 class="text-center">You have no orders at this time!
                                                            </h3>
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                        <!-- END: Products in Cart -->
                                    </div>
                                </div>
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
