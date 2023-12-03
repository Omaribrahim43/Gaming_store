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

                    <li><span>All Games</span></li>

                </ul>
            </div>
            <div class="nk-gap-1"></div>
            <!-- END: Breadcrumbs -->
            <!-- START: Products Filter -->
            <div class="row vertical-gap">
                <div class="col-lg-8">
                    <form action="{{ route('store') }}" method="GET">
                        <div class="row vertical-gap">
                            <div class="col-md-4">
                                <select name="device_type" class="form-control">
                                    <option value="" disabled selected>Select Platform</option>
                                    @foreach ($deviceTypes as $deviceType)
                                        <option value="{{ $deviceType->name }}">{{ $deviceType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <div class="nk-input-slider-inline">
                                    <div class="nk-input-slider">
                                        <div class="nk-input-slider-content text-white">
                                            PRICE:
                                            <strong class="text-main-1">JD <span
                                                    class="nk-input-slider-value-0"></span></strong>
                                            -
                                            <strong class="text-main-1">JD <span
                                                    class="nk-input-slider-value-1"></span></strong>
                                        </div>
                                        <div class="nk-input-slider-input">
                                            <input type="text" name="price-filter" data-slider-min="0"
                                                data-slider-max="200" data-slider-step="1" data-slider-value="[40, 160]"
                                                data-slider-tooltip="hide">
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="nk-btn nk-btn-rounded nk-btn-color-white">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('store') }}" method="GET" class="nk-form" novalidate="novalidate">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Type something...">
                            <button type="submit" class="nk-btn nk-btn-color-main-1"><span
                                    class="ion-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Products Filter -->

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

            @php
                $totalPages = ceil($totalItems / $itemsPerPage);
                $currentPage = request()->get('page', 1);
            @endphp

            @if ($totalPages > 1)
                <div class="nk-pagination nk-pagination-center">
                    <nav class="nk-pagination">
                        <a href="{{ $currentPage > 1 ? route('store', ['page' => $currentPage - 1]) : '#' }}"
                            class="nk-pagination-prev">
                            <span class="ion-ios-arrow-back"></span>
                        </a>
                        @for ($page = 1; $page <= $totalPages; $page++)
                            <a class="{{ $page == $currentPage ? 'nk-pagination-current' : '' }}"
                                href="{{ route('store', ['page' => $page]) }}">{{ $page }}</a>
                        @endfor
                        <a href="{{ $currentPage < $totalPages ? route('store', ['page' => $currentPage + 1]) : '#' }}"
                            class="nk-pagination-prev">
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </nav>
                </div>
            @endif

        </div>
        <div class="nk-gap-2"></div>
        @include('frontend.layouts.footer')
    </div>




    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top-4.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" alt="">
@endsection
