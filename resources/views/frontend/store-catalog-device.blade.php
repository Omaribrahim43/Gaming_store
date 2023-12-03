@extends('frontend.layouts.master')
@section('content')
    <div class="nk-main">
        <div class="nk-gap-2"></div>

        <div class="container">
            <!-- START: Breadcrumbs -->
            <div class="nk-gap-1"></div>
            <div class="container">
                <ul class="nk-breadcrumbs">


                    <li><a href="index.html">Home</a></li>


                    <li><span class="fa fa-angle-right"></span></li>

                    <li><a href="store.html">Store</a></li>


                    <li><span class="fa fa-angle-right"></span></li>

                    <li><span>All {{ $deviceType }} Games</span></li>

                </ul>
            </div>
            <div class="nk-gap-1"></div>
            <!-- END: Breadcrumbs -->

            <div class="nk-gap-2"></div>
            <!-- START: Products -->
            <div class="row vertical-gap">

                @foreach ($products as $product)
                    <div class="col-lg-6">
                        <div class="nk-product-cat-2">
                            <a class="nk-product-image" href="{{ route('store.single', $product->id) }}">
                                <img src="{{ asset($product->image) }}">
                            </a>
                            <div class="nk-product-cont">
                                <h3 class="nk-product-title h5"><a
                                        href="{{ route('store.single', $product->id) }}">{{ $product->name }}</a></h3>
                                <div class="nk-gap-1"></div>
                                <div class="nk-product-rating" data-rating="{{ $product->averageRating }}">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $product->averageRating)
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div> <small>(Reviews: {{ $product->reviews }})</small>
                                <div class="nk-gap-1"></div>
                                {{ $product->description }}
                                <div class="nk-gap-2"></div>
                                <div class="nk-product-price">{{ "$product->price JOD" }}</div>
                                <div class="nk-gap-1"></div>
                                <a href="{{ route('store.add-to-cart', $product->id) }}"
                                    class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- END: Products -->
            <div class="nk-gap-3"></div>
        </div>
        <div class="nk-gap-2"></div>
        @include('frontend.layouts.footer')
    </div>




    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top-4.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" alt="">
@endsection
