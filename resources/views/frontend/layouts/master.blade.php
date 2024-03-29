<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GameXperience</title>
    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet"
        type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <script defer src="{{ asset('frontend/assets/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('frontend/assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/ionicons/css/ionicons.min.css') }}">
    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/flickity/dist/flickity.min.css') }}">
    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">
    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/assets/vendor/summernote/dist/summernote-bs4.css') }}">
    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/goodgames.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    <!-- END: Styles -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="{{ asset('frontend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
</head>

<body>

    @include('frontend.layouts.header')

    @include('frontend.layouts.mobile-nav')

    @yield('content')

    <!-- START: Search Modal -->
    <div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>

                    <h4 class="mb-0">Search</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" class="nk-form nk-form-style-1">
                        <input type="text" value="" name="search" class="form-control"
                            placeholder="Type something and press Enter" autofocus>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Search Modal -->

    <!-- START: Login Modal -->
    <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-android-close"></span>
                    </button>

                    <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                    <div class="nk-gap-1"></div>
                    <form action="#" class="nk-form text-white">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                Use email and password:

                                <div class="nk-gap"></div>
                                <input type="email" value="" name="email" class=" form-control"
                                    placeholder="Email">

                                <div class="nk-gap"></div>
                                <input type="password" value="" name="password" class="required form-control"
                                    placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                Or social account:

                                <div class="nk-gap"></div>

                                <ul class="nk-social-links-2">
                                    <li><a class="nk-social-facebook" href="#"><span
                                                class="fab fa-facebook"></span></a></li>
                                    <li><a class="nk-social-google-plus" href="#"><span
                                                class="fab fa-google-plus"></span></a></li>
                                    <li><a class="nk-social-twitter" href="#"><span
                                                class="fab fa-twitter"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign
                                    In</a>
                            </div>
                            <div class="col-md-6">
                                <div class="mnt-5">
                                    <small><a href="#">Forgot your password?</a></small>
                                </div>
                                <div class="mnt-5">
                                    <small><a href="#">Not a member? Sign up</a></small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Login Modal -->

    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->
    <script src="{{ asset('frontend/assets/vendor/object-fit-images/dist/ofi.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('frontend/assets/vendor/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>

    <!-- Popper -->
    <script src="{{ asset('frontend/assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Sticky Kit -->
    <script src="{{ asset('frontend/assets/vendor/sticky-kit/dist/sticky-kit.min.js') }}"></script>

    <!-- Jarallax -->
    <script src="{{ asset('frontend/assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jarallax/dist/jarallax-video.min.js') }}"></script>

    <!-- imagesLoaded -->
    <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Flickity -->
    <script src="{{ asset('frontend/assets/vendor/flickity/dist/flickity.pkgd.min.js') }}"></script>

    <!-- Photoswipe -->
    <script src="{{ asset('frontend/assets/vendor/photoswipe/dist/photoswipe.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>

    <!-- Jquery Validation -->
    <script src="{{ asset('frontend/assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="{{ asset('frontend/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>

    <!-- Hammer.js -->
    <script src="{{ asset('frontend/assets/vendor/hammerjs/hammer.min.js') }}"></script>

    <!-- NanoSroller -->
    <script src="{{ asset('frontend/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js') }}"></script>

    <!-- SoundManager2 -->
    <script src="{{ asset('frontend/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>

    <!-- Seiyria Bootstrap Slider -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('frontend/assets/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>

    <!-- nK Share -->
    <script src="{{ asset('frontend/assets/plugins/nk-share/nk-share.js') }}"></script>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/09ce849ccf.js" crossorigin="anonymous"></script>
    <!-- GoodGames -->
    <script src="{{ asset('frontend/assets/js/goodgames.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
</body>

</html>
