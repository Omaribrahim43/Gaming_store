<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>GoodGames | 404</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store" />
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium" />
    <meta name="author" content="_nK" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

<!--
    Additional Classes:
        .nk-page-boxed
-->

<body>
    <div class="nk-main">
        <div class="nk-fullscreen-block">
            <div class="nk-fullscreen-block-top">
                <div class="text-center">
                    <div class="nk-gap-4"></div>
                    <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" /></a>
                    <div class="nk-gap-2"></div>
                </div>
            </div>
            <div class="nk-fullscreen-block-middle">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                            <h1 class="text-main-1" style="font-size: 150px">404</h1>

                            <div class="nk-gap"></div>
                            <h2 class="h4">You chose the wrong path!</h2>

                            <div>
                                Or such a page just doesn't exist... <br />
                                Would you like to go back to the homepage?
                            </div>
                            <div class="nk-gap-3"></div>

                            <a href="{{ route('home') }}" class="nk-btn nk-btn-rounded nk-btn-color-white">Return to
                                Homepage</a>
                        </div>
                    </div>
                    <div class="nk-gap-3"></div>
                </div>
            </div>
            <div class="nk-fullscreen-block-bottom">
                <div class="nk-gap-2"></div>
                <ul class="nk-social-links-2 nk-social-links-center">
                    <li>
                        <a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a>
                    </li>
                    <li>
                        <a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a>
                    </li>
                    <li>
                        <a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a>
                    </li>
                    <li>
                        <a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a>
                    </li>
                    <li>
                        <a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a>
                    </li>
                    <li>
                        <a class="nk-social-twitter" href="#" target="_blank"><span
                                class="fab fa-twitter"></span></a>
                    </li>
                    <li>
                        <a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a>
                    </li>
                </ul>
                <div class="nk-gap-2"></div>
            </div>
        </div>
    </div>

    <!-- START: Page Background -->

    <div class="nk-page-background-fixed"
        style="background-image: url('{{ asset('frontend/assets/images/bg-fixed-2.jpg') }}')"></div>

    <!-- END: Page Background -->


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

    <!-- GoodGames -->
    <script src="{{ asset('frontend/assets/js/goodgames.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/goodgames-init.js') }}"></script>
    <!-- END: Scripts -->
</body>

</html>
