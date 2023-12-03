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
                <li><a href="store-catalog.html">Action Games</a></li>
                <li><span class="fa fa-angle-right"></span></li>
                <li><span>{{ $product->name }}</span></li>
            </ul>
        </div>
        <div class="nk-gap-1"></div>
        <!-- END: Breadcrumbs -->
        <div class="container">
            <div class="row vertical-gap">
                <div class="col-lg-12">
                    <div class="nk-store-product">
                        <div class="row vertical-gap">
                            <div class="col-md-4">
                                <!-- START: Product Photos -->
                                <div class="nk-popup-gallery">
                                    <div class="nk-gallery-item-box">
                                        <a href="{{ asset($product->image) }}" class="nk-gallery-item" data-size="1200x554">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="{{ asset($product->image) }}" alt="">
                                        </a>
                                    </div>

                                    <div class="nk-gap-1"></div>
                                    <div class="row vertical-gap sm-gap">
                                        <div class="col-6 col-md-4">
                                            <div class="nk-gallery-item-box">
                                                <a href="{{ asset('frontend/assets/images/product-7.jpg') }}"
                                                    class="nk-gallery-item" data-size="622x942">
                                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span>
                                                    </div>
                                                    <img src="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="nk-gallery-item-box">
                                                <a href="{{ asset('frontend/assets/images/product-8.jpg') }}"
                                                    class="nk-gallery-item" data-size="1920x907">
                                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span>
                                                    </div>
                                                    <img src="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="nk-gallery-item-box">
                                                <a href="{{ asset('frontend/assets/images/product-9.jpg') }}"
                                                    class="nk-gallery-item" data-size="1500x750">
                                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span>
                                                    </div>
                                                    <img src="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Product Photos -->
                            </div>
                            <div class="col-md-8">

                                <h2 class="nk-product-title h3">{{ $product->name }}</h2>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option value="" disabled selected>Select Platform</option>
                                        <option value="ps4">PS4</option>
                                        <option value="xbox">Xbox 1</option>
                                        <option value="pc">PC</option>
                                    </select>
                                </div>
                                <div class="nk-product-description">
                                    <p>{{ $product->description }}</p>
                                </div>
                                <!-- START: Add to Cart -->
                                <div class="nk-gap-2"></div>
                                <form action="#" class="nk-product-addtocart">
                                    <div class="nk-product-price">{{ "$product->price JOD" }}</div>
                                    <div class="nk-gap-1"></div>
                                    <div class="input-group">
                                        <input type="number" class="form-control" value="1" min="1"
                                            max="21">
                                        <a href="{{ route('store.add-to-cart', $product->id) }}"
                                            class="nk-btn nk-btn-rounded nk-btn-color-main-1">Add to Cart</a>
                                    </div>
                                </form>
                                <div class="nk-gap-3"></div>
                                <!-- END: Add to Cart -->

                                <!-- START: Meta -->
                                <div class="nk-product-meta">
                                    <div>
                                        <strong>Categories</strong>:
                                        @foreach ($categories as $category)
                                            <a
                                                href="{{ route('store.category', $category->id) }}">{{ $category->name }}</a>,
                                        @endforeach
                                    </div>
                                </div>
                                <!-- END: Meta -->
                            </div>
                        </div>

                        <!-- START: Share -->
                        <div class="nk-gap-2"></div>
                        <div class="nk-post-share">
                            <span class="h5">Share Product:</span>
                            <ul class="nk-social-links-2">
                                <li><span class="nk-social-facebook" title="Share page on Facebook"
                                        data-share="facebook"><span class="fab fa-facebook"></span></span></li>
                                <li><span class="nk-social-google-plus" title="Share page on Google+"
                                        data-share="google-plus"><span class="fab fa-google-plus"></span></span></li>
                                <li><span class="nk-social-twitter" title="Share page on Twitter" data-share="twitter"><span
                                            class="fab fa-twitter"></span></span></li>
                                <li><span class="nk-social-pinterest" title="Share page on Pinterest"
                                        data-share="pinterest"><span class="fab fa-pinterest-p"></span></span></li>
                            </ul>
                        </div>
                        <!-- END: Share -->

                        <div class="nk-gap-2"></div>
                        <!-- START: Tabs -->
                        <div class="nk-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" href="#tab-reviews" role="tab"
                                        data-toggle="tab">Reviews
                                        (3)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- START: Tab Reviews -->
                                <div role="tabpanel" class="tab-pane fade show active" id="tab-reviews">
                                    <div class="nk-gap-2"></div>
                                    <!-- START: Reply -->
                                    <h3 class="h4">Add a Review</h3>
                                    <div class="nk-reply">
                                        <form action="{{ route('send.review') }}" method="POST" class="nk-form">
                                            @csrf
                                            <div class="row vertical-gap sm-gap">
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="user_id"
                                                        value="{{ Auth::user() ? Auth::user()->id : null }}">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="text" class="form-control required" name="name"
                                                        value="{{ Auth::user() ? Auth::user()->name : '' }}"
                                                        placeholder="Name *">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control required" name="title"
                                                        placeholder="Title *">
                                                </div>
                                            </div>
                                            <div class="nk-gap-1"></div>
                                            <textarea class="form-control required" name="message" rows="5" placeholder="Your Review *"
                                                aria-required="true"></textarea>
                                            <div class="nk-gap-1"></div>
                                            <div class="nk-rating">
                                                <input type="radio" id="review-rate-5" name="review_rate"
                                                    value="5">
                                                <label for="review-rate-5">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-4" name="review_rate"
                                                    value="4">
                                                <label for="review-rate-4">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-3" name="review_rate"
                                                    value="3">
                                                <label for="review-rate-3">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-2" name="review_rate"
                                                    value="2">
                                                <label for="review-rate-2">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-1" name="review_rate"
                                                    value="1">
                                                <label for="review-rate-1">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>
                                            </div>
                                            <button
                                                class="nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right">Submit</button>
                                        </form>
                                    </div>
                                    <!-- END: Reply -->

                                    <div class="clearfix"></div>
                                    <div class="nk-gap-2"></div>
                                    <div class="nk-comments">
                                        @foreach ($reviews as $review)
                                            <!-- START: Review -->
                                            <div class="nk-comment">
                                                <div class="nk-comment-meta">
                                                    <img src="{{ $review->user_id == null ? asset('admin/no-image.png') : asset($review->user->image) }}"
                                                        alt="Witch Murder" class="rounded-circle" width="35"> by <a
                                                        href="#">{{ $review->name }}</a>
                                                    in {{ $review->created_at }}
                                                    <div class="nk-review-rating" data-rating="{{ $review->rating }}">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $review->rating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                                <i class="far fa-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="nk-comment-text">
                                                    <p>{{ $review->review }}</p>
                                                </div>
                                            </div>
                                            <!-- END: Review -->
                                        @endforeach

                                    </div>
                                </div>
                                <!-- END: Tab Reviews -->

                            </div>
                        </div>
                        <!-- END: Tabs -->
                    </div>
                </div>
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
