<header class="nk-header nk-header-opaque">
    <!-- START: Top Contacts -->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-right">
                <ul class="nk-contacts-icons">
                    <li>
                        <a href="" data-toggle="modal" data-target="#modalSearch">
                            <span class="fa fa-search"></span>
                        </a>
                    </li>
                    <li>
                        @if (Cart::count() == 0)
                            <a href="{{ route('store.cart') }}">
                                <span class="fa fa-shopping-cart"></span>
                            </a>
                        @else
                            <span class="nk-cart-toggle">
                                <span class="fa fa-shopping-cart"></span>
                                <span class="nk-badge">{{ Cart::count() }}</span>
                            </span>
                        @endif
                        <div class="nk-cart-dropdown">
                            @foreach (Cart::content() as $product)
                                <div class="nk-widget-post">
                                    <a href="{{ route('store.single', $product->id) }}" class="nk-post-image">
                                        <img src="{{ asset($product->options->image) }}" alt="In all revolutions of">
                                    </a>
                                    <h3 class="nk-post-title">
                                        <a href="{{ route('remove-product', $product->rowId) }}"
                                            class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                        <a href="{{ route('store.single', $product->id) }}">{{ $product->name }}</a>
                                    </h3>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-product-price">{{ $product->price }} JOD</div>
                                </div>
                            @endforeach
                            <div class="nk-gap-2"></div>
                            <div class="text-center">
                                <a href="{{ route('store.cart') }}"
                                    class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Go To
                                    Cart</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="{{ route('home') }}" class="nk-nav-logo">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="GoodGames" width="199">
                </a>

                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    <li>
                        <a href="{{ route('store') }}">
                            Store
                        </a>
                    </li>
                    @if (Auth::user())
                        <li class="nk-drop-item">
                            <a href="">
                                My Account
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('profile') }}">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout_handler') }}"
                                        onclick="event.preventDefault();document.getElementById('LogoutForm').submit();">
                                        Logout
                                    </a>
                                    <form action="{{ route('logout') }}" id="LogoutForm" method="POST">
                                        @csrf</form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="nk-btn nk-btn-rounded nk-btn-color-main-2">Join
                                Us</a>
                        </li>
                    @endif
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>
