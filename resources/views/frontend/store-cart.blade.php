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

                <li><span>Cart</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>
        <!-- END: Breadcrumbs -->
        <div class="container">
            <div class="nk-store nk-store-cart">
                <div class="table-responsive">
                    <!-- START: Products in Cart -->
                    <table class="table nk-store-cart-products">
                        @if (Cart::count() == 0)
                            <tbody>
                                <tr>
                                    <td class="nk-product-cart-thumb">
                                        <h3 class="text-center">The cart is empty!</h3>
                                    </td>
                                </tr>
                            </tbody>
                        @endif
                        <tbody>
                            @foreach (Cart::content() as $product)
                                <tr>
                                    <td class="nk-product-cart-thumb">
                                        <a href="{{ route('store.single', $product->id) }}"
                                            class="nk-image-box-1 nk-post-image">
                                            <img src="{{ asset($product->options->image) }}" alt="However, I have reason"
                                                width="115">
                                        </a>
                                    </td>
                                    <td class="nk-product-cart-title">
                                        <h5 class="h6">Product:</h5>
                                        <div class="nk-gap-1"></div>
                                        <h2 class="nk-post-title h4">
                                            <a href="{{ route('store.single', $product->id) }}">{{ $product->name }}</a>
                                        </h2>
                                    </td>
                                    <td class="nk-product-cart-price">
                                        <h5 class="h6">Price:</h5>
                                        <div class="nk-gap-1"></div>
                                        <strong>{{ "$product->price JOD" }}</strong>
                                    </td>
                                    <td class="nk-product-cart-quantity">
                                        <h5 class="h6">Quantity:</h5>
                                        <div class="nk-gap-1"></div>
                                        <div class="d-flex">
                                            <a href="{{ route('qty-decrement', $product->rowId) }}"
                                                class="nk-btn nk-btn-rounded nk-btn-color-main-1 mx-2">
                                                &#8722
                                            </a>
                                            <input style="width:50px" type="text" class="form-control"
                                                value="{{ $product->qty }}" min="1" max="21">
                                            <a href="{{ route('qty-increment', $product->rowId) }}"
                                                class="nk-btn nk-btn-rounded nk-btn-color-main-1 mx-2">
                                                &#43
                                            </a>
                                        </div>
                                    </td>
                                    <td class="nk-product-cart-total">
                                        <h5 class="h6">Total:</h5>
                                        <div class="nk-gap-1"></div>

                                        <strong>{{ $product->price * $product->qty }} JOD</strong>
                                    </td>
                                    <td class="nk-product-cart-remove">
                                        <a href="{{ route('remove-product', $product->rowId) }}">
                                            <span class="ion-android-close">
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- END: Products in Cart -->
                </div>
                <div class="nk-gap-1"></div>
                <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="{{ route('store') }}">Update Cart</a>
                <div class="clearfix"></div>
                <div class="nk-gap-2"></div>
                <div class="row vertical-gap">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <!-- START: Cart Totals -->
                        <h3 class="nk-title h4">Cart Totals</h3>
                        <table class="nk-table nk-table-sm">
                            <tbody>
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
                                        {{ Cart::priceTotal() }} JOD
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END: Cart Totals -->
                    </div>
                </div>
                <div class="nk-gap-2"></div>
                <a class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right"
                    href="{{ route('store.checkout') }}">Proceed to
                    Checkout</a>
                <div class="clearfix"></div>
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
