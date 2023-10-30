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
                                        <a href="{{ route('store.add-to-cart', $product->id) }}" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Add to Cart</a>
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
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-description" role="tab"
                                        data-toggle="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-reviews" role="tab" data-toggle="tab">Reviews
                                        (3)</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <!-- START: Tab Description -->
                                <div role="tabpanel" class="tab-pane fade show active" id="tab-description">
                                    <div class="nk-gap"></div>
                                    <strong class="text-white">Release Date: 24/05/2018</strong>
                                    <div class="nk-gap"></div>
                                    <p>She gave my mother such a turn, that I have always been convinced I am indebted
                                        to Miss Betsey for having been born on a Friday. The word was appropriate to the
                                        moment. My mother was so much worse that Peggotty, coming in with the teaboard
                                        and candles, and seeing at a glance how ill she was, - as Miss Betsey might have
                                        done sooner if there had been light enough, - conveyed her upstairs to her own
                                        room with all speed; and immediately dispatched Ham Peggotty, her nephew, who
                                        had been for some days past secreted in the house, unknown to my mother, as a
                                        special messenger in case of emergency, to fetch the nurse and doctor.</p>

                                    <div class="nk-product-info-row row vertical-gap">
                                        <div class="col-md-5">
                                            <div class="nk-product-pegi">
                                                <div class="nk-gap"></div>
                                                <img src="{{ asset('frontend/assets/images/pegi-icon.jpg') }}"
                                                    alt="">
                                                <div class="nk-product-pegi-cont">
                                                    <strong class="text-white">Pegi Rating:</strong>
                                                    <div class="nk-gap"></div>
                                                    Suitable for people aged 12 and over.
                                                </div>
                                                <div class="nk-gap"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="nk-gap"></div>
                                            <strong class="text-white">Genre:</strong>
                                            <div class="nk-gap"></div>
                                            TBD
                                            <div class="nk-gap"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="nk-gap"></div>
                                            <strong class="text-white">Customer Rating:</strong>
                                            <div class="nk-gap"></div>
                                            <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fas fa-star-half"></i>
                                            </div>
                                            <div class="nk-gap"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Tab Description -->

                                <!-- START: Tab Reviews -->
                                <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
                                    <div class="nk-gap-2"></div>
                                    <!-- START: Reply -->
                                    <h3 class="h4">Add a Review</h3>
                                    <div class="nk-reply">
                                        <form action="#" class="nk-form">
                                            <div class="row vertical-gap sm-gap">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control required" name="name"
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
                                                <input type="radio" id="review-rate-5" name="review-rate"
                                                    value="5">
                                                <label for="review-rate-5">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-4" name="review-rate"
                                                    value="4">
                                                <label for="review-rate-4">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-3" name="review-rate"
                                                    value="3">
                                                <label for="review-rate-3">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-2" name="review-rate"
                                                    value="2">
                                                <label for="review-rate-2">
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </label>

                                                <input type="radio" id="review-rate-1" name="review-rate"
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
                                        <!-- START: Review -->
                                        <div class="nk-comment">
                                            <div class="nk-comment-meta">
                                                <img src="{{ asset('frontend/assets/images/avatar-2.jpg') }}"
                                                    alt="Witch Murder" class="rounded-circle" width="35"> by <a
                                                    href="#">Witch
                                                    Murder</a>
                                                in 20 September, 2018
                                                <div class="nk-review-rating" data-rating="4.5"> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="far fa-star"></i></div>
                                            </div>
                                            <div class="nk-comment-text">
                                                <p>Upon replenish great rule. Were tree, given day him night Fruit it
                                                    moveth all. First they're creature seasons and creature fill a it
                                                    have fifth, their own subdue brought above divided.</p>

                                                <p>Behold it set, seas seas and meat divided Moveth cattle forth evening
                                                    above moveth so, signs god a fruitful his after called that whose.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- END: Review -->
                                        <!-- START: Review -->
                                        <div class="nk-comment">
                                            <div class="nk-comment-meta">
                                                <img src="{{ asset('frontend/assets/images/avatar-1.jpg') }}"
                                                    alt="Hitman" class="rounded-circle" width="35"> by <a
                                                    href="#">Hitman</a> in 14
                                                Jule, 2018
                                                <div class="nk-review-rating" data-rating="0.5"> <i
                                                        class="fa fa-star"></i> <i class="far fa-star"></i> <i
                                                        class="far fa-star"></i> <i class="far fa-star"></i> <i
                                                        class="far fa-star"></i></div>
                                            </div>
                                            <div class="nk-comment-text">
                                                <p> I was awakened at daybreak by the charwoman, and having arrived at
                                                    the inn, was at first placed inside the coach. :(</p>
                                            </div>
                                        </div>
                                        <!-- END: Review -->
                                        <!-- START: Review -->
                                        <div class="nk-comment">
                                            <div class="nk-comment-meta">
                                                <img src="{{ asset('frontend/assets/images/avatar-3.jpg') }}"
                                                    alt="Wolfenstein" class="rounded-circle" width="35"> by <a
                                                    href="#">Wolfenstein</a> in
                                                27 June, 2018
                                                <div class="nk-review-rating" data-rating="3.5"> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i></div>
                                            </div>
                                            <div class="nk-comment-text">
                                                <p>Divided thing, land it evening earth winged whose great after. Were
                                                    grass night. To Air itself saw bring fly fowl. Fly years behold
                                                    spirit day greater of wherein winged and form. Seed open don't thing
                                                    midst created dry every greater divided of, be man is. Second Bring
                                                    stars fourth gathering he hath face morning fill. Living so second
                                                    darkness. Moveth were male. May creepeth. Be tree fourth.</p>
                                            </div>
                                        </div>
                                        <!-- END: Review -->
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
