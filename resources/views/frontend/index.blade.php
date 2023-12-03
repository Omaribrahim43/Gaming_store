@extends('frontend.layouts.master')
@section('content')
    <div class="nk-main">
        <!-- START: Breadcrumbs -->
        <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-breadcrumbs">
                <li><a href="{{ route('home') }}">Home</a></li>

                <li><span class="fa fa-angle-right"></span></li>

                <li><span>Store</span></li>
            </ul>
        </div>
        <div class="nk-gap-1"></div>
        <!-- END: Breadcrumbs -->

        <div class="container">
            <!-- START: Categories -->
            <div class="row vertical-gap">
                @foreach ($deviceTypes as $deviceType)
                    <div class="col-lg-4">
                        <div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img src="{{ asset($deviceType->image) }}" />
                            </div>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title"><a
                                        href="{{ route('store.device', ['deviceType' => $deviceType->name]) }}">{{ $deviceType->name }}</a>
                                </h3>
                                <h3 class="nk-feature-title text-main-1">
                                    <a href="{{ route('store.device', ['deviceType' => $deviceType->name]) }}">View
                                        Games</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- END: Categories -->

            <!-- START: Some Products -->
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-md-6 col-lg-4">
                    <div class="nk-gallery-item-box">
                        <a href="store-product.html" class="nk-gallery-item">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{{ asset('frontend/assets/images/product-4-lg.jpg') }}" alt="She was bouncing" />
                        </a>
                        <div class="nk-gallery-item-label">
                            <h4 class="mb-0">She was bouncing</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 order-lg-3">
                    <div class="nk-gallery-item-box">
                        <a href="store-product.html" class="nk-gallery-item">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="{{ asset('frontend/assets/images/product-2-lg.jpg') }}"
                                alt="However, I have reason" />
                        </a>
                        <div class="nk-gallery-item-label">
                            <h4 class="mb-0">However, I have reason</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <div class="nk-gallery-item-box">
                                <a href="store-product.html" class="nk-gallery-item">
                                    <span class="nk-gallery-item-overlay"><span><span
                                                class="nk-icon-circles"></span></span></span>
                                    <img src="{{ asset('frontend/assets/images/product-3-lg.jpg') }}"
                                        alt="It was some time before" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-gallery-item-box">
                                <a href="store-product.html" class="nk-gallery-item">
                                    <span class="nk-gallery-item-overlay"><span><span
                                                class="nk-icon-circles"></span></span></span>
                                    <img src="{{ asset('frontend/assets/images/product-1-lg.jpg') }}"
                                        alt="So saying he unbuckled" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-gallery-item-box">
                                <a href="store-product.html" class="nk-gallery-item">
                                    <span class="nk-gallery-item-overlay"><span><span
                                                class="nk-icon-circles"></span></span></span>
                                    <img src="{{ asset('frontend/assets/images/product-5-lg.jpg') }}"
                                        alt="In all revolutions of" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="nk-gallery-item-box">
                                <a href="store-product.html" class="nk-gallery-item">
                                    <span class="nk-gallery-item-overlay"><span><span
                                                class="nk-icon-circles"></span></span></span>
                                    <img src="{{ asset('frontend/assets/images/product-6-lg.jpg') }}"
                                        alt="Just then her head " />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Some Products -->

            <!-- START: Top 10 Best Sellers -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2">
                <span><span class="text-main-1">Top 10</span> Best Sellers</span>
            </h3>
            <div class="nk-gap"></div>
            <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left"
                data-arrows="true">
                <div class="nk-carousel-inner">
                    @for ($i = 0; $i <= count($topSellingItems) - 1; $i++)
                        <div>
                            <div class="pl-5 pr-5">
                                <div class="nk-product-cat-3">
                                    <a class="nk-product-image"
                                        href="{{ route('store.single', $topSellingItems[$i]->id) }}">
                                        <img src="{{ $topSellingItems[$i]->image }}"
                                            alt="{{ $topSellingItems[$i]->name }}" />
                                    </a>
                                    <div class="nk-product-cont">
                                        <div class="nk-gap-1"></div>
                                        <h3 class="nk-product-title h5">
                                            <a
                                                href="{{ route('store.single', $topSellingItems[$i]->id) }}">{{ $topSellingItems[$i]->name }}</a>
                                        </h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">{{ $topSellingItems[$i]->price }} JD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <!-- END: Top 10 Best Sellers -->

            <!-- START: Featured Games -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2">
                <span><span class="text-main-1">Featured</span> Games</span>
            </h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                @for ($i = 0; $i <= 3; $i++)
                    <div class="col-lg-6">
                        <div class="nk-product-cat-2">
                            <a class="nk-product-image" href="{{ route('store.single', $topSellingItems[$i]->id) }}">
                                <img src="{{ $topSellingItems[$i]->image }}" alt="{{ $topSellingItems[$i]->name }}" />
                            </a>
                            <div class="nk-product-cont">
                                <h3 class="nk-product-title h5">
                                    <a
                                        href="{{ route('store.single', $topSellingItems[$i]->id) }}">{{ $topSellingItems[$i]->name }}</a>
                                </h3>
                                <div class="nk-gap-1"></div>
                                <div class="nk-product-rating" data-rating="{{ $topSellingItems[$i]->averageRating }}">
                                    @php
                                        $averageRating = $topSellingItems[$i]->averageRating;
                                        $integerPart = floor($averageRating);
                                        $hasHalfStar = $averageRating - $integerPart >= 0.5;
                                    @endphp

                                    @for ($j = 1; $j <= 5; $j++)
                                        @if ($j <= $integerPart)
                                            <i class="fa fa-star"></i>
                                        @elseif ($hasHalfStar && $j == $integerPart + 1)
                                            <i class="fas fa-star-half"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <div class="nk-gap-1"></div>
                                {{ $topSellingItems[$i]->description }}
                                <div class="nk-gap-2"></div>
                                <div class="nk-product-price">{{ $topSellingItems[$i]->price }} JD</div>
                                <div class="nk-gap-1"></div>
                                <a href="{{ route('store.add-to-cart', $topSellingItems[$i]->id) }}"
                                    class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- END: Featured Games -->

            <!-- START: Most Popular -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2">
                <span><span class="text-main-1">Most</span> Popular</span>
            </h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                @for ($i = 0; $i <= count($popularGames) - 1; $i++)
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-product-cat">
                            <a class="nk-product-image" href="{{ route('store.single', $popularGames[$i]->id) }}">
                                <img src="{{ $popularGames[$i]->image }}" alt="{{ $popularGames[$i]->name }}" />
                            </a>
                            <div class="nk-product-cont">
                                <h3 class="nk-product-title h5">
                                    <a
                                        href="{{ route('store.single', $popularGames[$i]->id) }}">{{ $popularGames[$i]->name }}</a>
                                </h3>
                                <div class="nk-gap-1"></div>
                                <div class="nk-product-rating" data-rating="4">
                                    @php
                                        $averageRating = $topSellingItems[$i]->averageRating;
                                        $integerPart = floor($averageRating);
                                        $hasHalfStar = $averageRating - $integerPart >= 0.5;
                                    @endphp

                                    @for ($j = 1; $j <= 5; $j++)
                                        @if ($j <= $integerPart)
                                            <i class="fa fa-star"></i>
                                        @elseif ($hasHalfStar && $j == $integerPart + 1)
                                            <i class="fas fa-star-half"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <div class="nk-gap-1"></div>
                                <div class="nk-product-price">{{ $popularGames[$i]->price }} JD</div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- END: Most Popular -->
        </div>

        <div class="nk-gap-2"></div>
        @include('frontend.layouts.footer')
    </div>

    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top-4.png') }}" />
    <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" />

    <!-- END: Page Background -->
@endsection
