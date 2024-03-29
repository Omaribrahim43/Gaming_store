@extends('frontend.layouts.master')
@section('content')
    <div class="nk-main">
        <div class="nk-gap-2"></div>
        <div class="container">
            <!-- START: Image Slider -->
            <div class="nk-image-slider" data-autoplay="8000">
                <div class="nk-image-slider-item">
                    <img src="{{ asset('frontend/assets/images/slide-1.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('frontend/assets/images/slide-1-thumb.jpg') }}">
                    <div class="nk-image-slider-content">
                        <h3 class="h4">As we Passed, I remarked</h3>
                        <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old
                            elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and
                            the windows shining in the sun.</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read
                            More</a>
                    </div>
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('frontend/assets/images/slide-2.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('frontend/assets/images/slide-2-thumb.jpg') }}">
                    <div class="nk-image-slider-content">
                        <h3 class="h4">He made his passenger captain of one</h3>
                        <p class="text-white">Now the races of these two have been for some ages utterly extinct, and
                            besides to discourse any further of them would not be at all to my purpose. But the concern
                            I have most at heart is for our Corporation of Poets, from whom I am preparing a petition to
                            your Highness, to be subscribed with the names of one...</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read
                            More</a>
                    </div>
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('frontend/assets/images/slide-3.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('frontend/assets/images/slide-3-thumb.jpg') }}">
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('frontend/assets/images/slide-4.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('frontend/assets/images/slide-4-thumb.jpg') }}">
                    <div class="nk-image-slider-content">
                        <h3 class="h4">At length one of them called out in a clear</h3>
                        <p class="text-white">TJust then her head struck against the roof of the hall: in fact she was
                            now more than nine feet high...</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read
                            More</a>
                    </div>
                </div>
                <div class="nk-image-slider-item">
                    <img src="{{ asset('frontend/assets/images/slide-5.jpg') }}" alt="" class="nk-image-slider-img"
                        data-thumb="{{ asset('frontend/assets/images/slide-5-thumb.jpg') }}">
                    <div class="nk-image-slider-content">
                        <h3 class="h4">For good, too though, in consequence</h3>
                        <p class="text-white">She gave my mother such a turn, that I have always been convinced I am
                            indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the
                            moment.</p>
                        <p class="text-white">My mother was so much worse that Peggotty, coming in with the teaboard
                            and candles, and seeing at a glance how ill she was, - as Miss Betsey might have done sooner
                            if there had been light enough, - conveyed her upstairs to her own room with all speed; and
                            immediately dispatched Ham Peggotty, her nephew, who had been for some days past secreted in
                            the house...</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- END: Image Slider -->

            <!-- START: Categories -->
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="{{ asset('frontend/assets/images/icon-mouse.png') }}" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">PC</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="{{ asset('frontend/assets/images/icon-gamepad.png') }}" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">PS4</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="nk-feature-1">
                        <div class="nk-feature-icon">
                            <img src="{{ asset('frontend/assets/images/icon-gamepad-2.png') }}" alt="">
                        </div>
                        <div class="nk-feature-cont">
                            <h3 class="nk-feature-title"><a href="#">Xbox</a></h3>
                            <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Categories -->
            <div class="nk-gap-2"></div>
            <div class="row vertical-gap">
                <div class="col-lg-8">
                    <!-- START: Best Selling -->
                    <div class="nk-gap-3"></div>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Best</span> Selling</span></h3>
                    <div class="nk-gap"></div>
                    <div class="row vertical-gap">


                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="{{ route('store.single', $topSellingItems[0]->id) }}"">
                                    <img src="{{ asset($topSellingItems[0]->image) }}">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a
                                            href="{{ route('store.single', $topSellingItems[0]->id) }}">{{ $topSellingItems[0]->name }}</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating"
                                        data-rating="{{ $topSellingItems[0]->averageRating }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $topSellingItems[0]->averageRating)
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div> <small>(Reviews: {{ $topSellingItems[0]->reviews }})</small>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">{{ $topSellingItems[0]->price }} JOD</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="{{ route('store.add-to-cart', $topSellingItems[0]->id) }}"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="{{ route('store.single', $topSellingItems[1]->id) }}"">
                                    <img src="{{ asset($topSellingItems[1]->image) }}">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a
                                            href="{{ route('store.single', $topSellingItems[1]->id) }}">{{ $topSellingItems[1]->name }}</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating"
                                        data-rating="{{ $topSellingItems[1]->averageRating }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $topSellingItems[1]->averageRating)
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div> <small>(Reviews: {{ $topSellingItems[1]->reviews }})</small>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">{{ $topSellingItems[1]->price }} JOD</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="{{ route('store.add-to-cart', $topSellingItems[1]->id) }}"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="{{ route('store.single', $topSellingItems[2]->id) }}"">
                                    <img src="{{ asset($topSellingItems[2]->image) }}">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a
                                            href="{{ route('store.single', $topSellingItems[2]->id) }}">{{ $topSellingItems[2]->name }}</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating"
                                        data-rating="{{ $topSellingItems[2]->averageRating }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $topSellingItems[2]->averageRating)
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div> <small>(Reviews: {{ $topSellingItems[2]->reviews }})</small>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">{{ $topSellingItems[2]->price }} JOD</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="{{ route('store.add-to-cart', $topSellingItems[2]->id) }}"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="nk-product-cat">
                                <a class="nk-product-image" href="{{ route('store.single', $topSellingItems[3]->id) }}"">
                                    <img src="{{ asset($topSellingItems[3]->image) }}">
                                </a>
                                <div class="nk-product-cont">
                                    <h3 class="nk-product-title h5"><a
                                            href="{{ route('store.single', $topSellingItems[3]->id) }}">{{ $topSellingItems[3]->name }}</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-rating"
                                        data-rating="{{ $topSellingItems[3]->averageRating }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $topSellingItems[3]->averageRating)
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div> <small>(Reviews: {{ $topSellingItems[3]->reviews }})</small>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">{{ $topSellingItems[3]->price }} JOD</div>
                                    <div class="nk-gap-1"></div>
                                    <a href="{{ route('store.add-to-cart', $topSellingItems[3]->id) }}"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add
                                        to Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END: Best Selling -->
                    <div class="nk-gap-4"></div>
                    <!-- START: Latest Posts -->
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span>
                            Posts</span></h3>
                    <div class="nk-gap"></div>
                    <div class="nk-blog-grid">
                        <div class="row">


                            <div class="col-md-6">
                                <!-- START: Post -->
                                <div class="nk-blog-post">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="{{ asset('frontend/assets/images/post-5-mid.jpg') }}"
                                            alt="He made his passenger captain of one">
                                        <span class="nk-post-comments-count">13</span>
                                    </a>
                                    <div class="nk-gap"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger
                                            captain of one</a></h2>
                                    <div class="nk-post-by">
                                        <img src="{{ asset('frontend/assets/images/avatar-3.jpg') }}" alt="Wolfenstein"
                                            class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a>
                                        in Jul 23, 2018
                                    </div>
                                    <div class="nk-gap"></div>
                                    <div class="nk-post-text">
                                        <p>Just then her head struck against the roof of the hall: in fact she was now
                                            more than nine feet high, and she at once took up the little golden key and
                                            hurried off to the garden door...</p>
                                    </div>
                                    <div class="nk-gap"></div>
                                    <a href="blog-article.html"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                        More</a>
                                </div>
                                <!-- END: Post -->
                            </div>


                            <div class="col-md-6">
                                <!-- START: Post -->
                                <div class="nk-blog-post">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="{{ asset('frontend/assets/images/post-6-mid.jpg') }}"
                                            alt="At first, for some time, I was not able to answer">
                                        <span class="nk-post-comments-count">0</span>
                                    </a>
                                    <div class="nk-gap"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time,
                                            I was not able to answer</a></h2>
                                    <div class="nk-post-by">
                                        <img src="{{ asset('frontend/assets/images/avatar-3.jpg') }}" alt="Wolfenstein"
                                            class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a>
                                        in Jul 3, 2018
                                    </div>
                                    <div class="nk-gap"></div>
                                    <div class="nk-post-text">
                                        <p>This little wandering journey, without settled place of abode, had been so
                                            unpleasant to me, that my own house, as I called it to myself, was a perfect
                                            settlement to me compared to that...</p>
                                    </div>
                                    <div class="nk-gap"></div>
                                    <a href="blog-article.html"
                                        class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                        More</a>
                                </div>
                                <!-- END: Post -->
                            </div>

                        </div>
                    </div>
                    <!-- END: Latest Posts -->
                </div>
                <div class="col-lg-4">
                    <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                        <div class="nk-widget">
                            <div class="nk-widget-content">
                                <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type something...">
                                        <button class="nk-btn nk-btn-color-main-1"><span
                                                class="ion-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Category</span> Menu</span></h4>
                            <div class="nk-widget-content">
                                <ul class="nk-widget-categories">
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="{{ route('store.category', $category->id) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="nk-widget nk-widget-highlighted">
                            <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span>
                            </h4>
                            <div class="nk-widget-content">

                                <div class="nk-widget-post">
                                    <a href="{{ route('store.single', $popularGames[0]->id) }}" class="nk-post-image">
                                        <img src="{{ asset($popularGames[0]->image) }}" alt="So saying he unbuckled">
                                    </a>
                                    <h3 class="nk-post-title"><a
                                            href="{{ route('store.single', $popularGames[0]->id) }}">{{ $popularGames[0]->name }}</a>
                                    </h3>
                                    <div class="nk-product-rating" data-rating="{{ $popularGames[0]->averageRating }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $popularGames[0]->averageRating)
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div> <small>(Reviews: {{ $popularGames[0]->reviews }})</small>
                                    <div class="nk-product-price">{{ $popularGames[0]->price }} JOD</div>
                                </div>

                                <div class="nk-widget-post">
                                    <a href="{{ route('store.single', $popularGames[1]->id) }}" class="nk-post-image">
                                        <img src="{{ asset($popularGames[1]->image) }}" alt="So saying he unbuckled">
                                    </a>
                                    <h3 class="nk-post-title"><a
                                            href="{{ route('store.single', $popularGames[1]->id) }}">{{ $popularGames[1]->name }}</a>
                                    </h3>
                                    <div class="nk-product-rating" data-rating="{{ $popularGames[1]->averageRating }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $popularGames[1]->averageRating)
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div> <small>(Reviews: {{ $popularGames[1]->reviews }})</small>
                                    <div class="nk-product-price">{{ $popularGames[1]->price }} JOD</div>
                                </div>

                                <div class="nk-widget-post">
                                    <a href="{{ route('store.single', $popularGames[2]->id) }}" class="nk-post-image">
                                        <img src="{{ asset($popularGames[2]->image) }}" alt="So saying he unbuckled">
                                    </a>
                                    <h3 class="nk-post-title"><a
                                            href="{{ route('store.single', $popularGames[2]->id) }}">{{ $popularGames[2]->name }}</a>
                                    </h3>
                                    <div class="nk-product-rating" data-rating="{{ $popularGames[2]->averageRating }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $popularGames[2]->averageRating)
                                                <i class="fa fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div> <small>(Reviews: {{ $popularGames[2]->reviews }})</small>
                                    <div class="nk-product-price">{{ $popularGames[2]->price }} JOD</div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-2"></div>
                    </aside>
                    <!-- END: Sidebar -->
                </div>
            </div>
        </div>
        @include('frontend.layouts.footer')
    </div>




    <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{ asset('frontend/assets/images/bg-top.png') }}" alt="">
    <img class="nk-page-background-bottom" src="{{ asset('frontend/assets/images/bg-bottom.png') }}" alt="">

    <!-- END: Page Background -->
@endsection
