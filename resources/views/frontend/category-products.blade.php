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

                <li><span>{{ $category->name }} Games</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>
        <!-- END: Breadcrumbs -->
        <div class="container">

            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-lg-8">
                    <!-- START: Products -->
                    <div class="row vertical-gap">
                        @foreach ($products as $product)
                            <div class="col-md-6">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="{{ route('store.single', $product->id) }}">
                                        <img src="{{ asset($product->image) }}" alt="So saying he unbuckled">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a
                                                href="{{ route('store.single', $product->id) }}">{{ $product->name }}</a>
                                        </h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">{{ $product->price }} JOD</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="#"
                                            class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                            to Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- END: Products -->

                    <!-- START: Pagination -->
                    <div class="nk-gap-3"></div>
                    <div class="nk-pagination nk-pagination-center">
                        <a href="#" class="nk-pagination-prev">
                            <span class="ion-ios-arrow-back"></span>
                        </a>
                        <nav>
                            <a class="nk-pagination-current" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <span>...</span>
                            <a href="#">14</a>
                        </nav>
                        <a href="#" class="nk-pagination-next">
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                    <!-- END: Pagination -->
                </div>
                <div class="col-lg-4">
                    <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                        <div class="nk-widget">
                            <div class="nk-widget-content">
                                <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type something...">
                                        <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Category</span> Menu</span></h4>
                            <div class="nk-widget-content">
                                <ul class="nk-widget-categories">
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('store.category', $category->id) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Price</span> Filter</span></h4>
                            <div class="nk-widget-content">
                                <div class="nk-input-slider">
                                    <input type="text" name="price-filter" data-slider-min="0" data-slider-max="1800"
                                        data-slider-step="1" data-slider-value="[200, 1200]" data-slider-tooltip="hide">
                                    <div class="nk-gap"></div>
                                    <div>
                                        <div class="text-white mt-4 float-left">
                                            PRICE:
                                            <strong class="text-main-1">€ <span
                                                    class="nk-input-slider-value-0"></span></strong>
                                            -
                                            <strong class="text-main-1">€ <span
                                                    class="nk-input-slider-value-1"></span></strong>
                                        </div>
                                        <a href="#"
                                            class="nk-btn nk-btn-rounded nk-btn-color-white float-right">Apply</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- END: Sidebar -->
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        @include('frontend.layouts.footer')
    </div>

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top-4.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" alt="">
@endsection
