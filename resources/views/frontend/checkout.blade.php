@extends('frontend.layouts.master')
@section('content')
    <div class="nk-main">
        <!-- START: Breadcrumbs -->
        <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-breadcrumbs">


                <li><a href="index.html">Home</a></li>


                <li><span class="fa fa-angle-right"></span></li>

                <li><a href="store.html">Store</a></li>


                <li><span class="fa fa-angle-right"></span></li>

                <li><a href="store-cart.html">Cart</a></li>


                <li><span class="fa fa-angle-right"></span></li>

                <li><span>Checkout</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>
        <!-- END: Breadcrumbs -->
        <div class="container">
            <div class="nk-store nk-store-checkout">
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Billing</span> Details</span></h3>
                <!-- START: Billing Details -->
                <div class="nk-gap"></div>
                <form action="{{ route('place-order') }}" method="POST" class="nk-form">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id }}" name="client_id">
                    <div class="row vertical-gap">
                        <div class="col-lg-6">
                            <div class="row vertical-gap">
                                <div class="col-sm-6">
                                    <label for="fname">Name <span class="text-main-1">*</span>:</label>
                                    <input type="text" value="{{ Auth::user()->name }}" class="form-control required"
                                        name="fname" id="fname">
                                </div>
                                <div class="col-sm-6">
                                    <label for="lname">Username <span class="text-main-1">*</span>:</label>
                                    <input type="text" value="{{ Auth::user()->username }}" class="form-control required"
                                        name="lname" id="lname">
                                </div>
                            </div>
                            @php
                                $currentDateTime = new DateTime('now');
                                $currentDate = $currentDateTime->format('Y-m-d');
                            @endphp
                            <input name="date" type="hidden" value="{{ $currentDate }}">
                            <div class="nk-gap-1"></div>
                            <label for="company">Address </label>
                            <input type="text" class="form-control" name="address" id="address">

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-sm-6">
                                    <label for="email">Email Address <span class="text-main-1">*</span>:</label>
                                    <input type="email" value="{{ Auth::user()->email }}" class="form-control required"
                                        name="email" id="email">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone">Phone <span class="text-main-1">*</span>:</label>
                                    <input type="tel" value="{{ Auth::user()->phone }}" class="form-control required"
                                        name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="nk-table nk-table-sm">
                                    <thead class="thead-default">
                                        <tr>
                                            <th class="nk-product-cart-title">Product</th>
                                            <th class="nk-product-cart-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::content() as $product)
                                            <tr>
                                                <td class="nk-product-cart-title">
                                                    {{ $product->name }} &times; {{ $product->qty }}
                                                </td>
                                                <td class="nk-product-cart-total">
                                                    {{ $product->price * $product->qty }} JOD
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="nk-store-cart-totals-subtotal">
                                            <td>
                                                Subtotal
                                            </td>
                                            <td>
                                                {{ Cart::subtotal() }} JOD
                                            </td>
                                        </tr>
                                        <tr class="nk-store-cart-totals-shipping">
                                            <td>
                                                Shipping
                                            </td>
                                            <td>
                                                Free Shipping
                                            </td>
                                        </tr>
                                        <tr class="nk-store-cart-totals-total">
                                            <td>
                                                Total
                                            </td>
                                            <td>
                                                {{ Cart::total() }} JOD
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Place Order</button>
                </form>
                <!-- END: Billing Details -->
            </div>
        </div>
        <div class="nk-gap-2"></div>
        @include('frontend.layouts.footer')
    </div>

    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top-4.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" alt="">

    <!-- END: Page Background -->
@endsection
