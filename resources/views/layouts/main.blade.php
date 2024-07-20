<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="hovee-atten-web" name="description">
    <meta content="hovee-atten-web" name="author">
    <meta name="keywords" content="hovee-atten-web" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>{{ env('APP_NAME', 'Hovee') }} | @yield('title')</title>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- Owl Theme css-->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

    @stack('css')

</head>

<body class="main-body">

    <!--Loader-->
    <div id="global-loader">
        <img src="{{ asset('assets/images/Double Ring@1x-1.0s-200px-200px (1).gif') }}" class="loader-img" alt>
    </div>
    @include('layouts.navbar')




    @yield('content')



    @include('layouts.footer')
    <!-- Whats up--->

    <!-- Back to top -->

    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/plugins/bootstrap-5/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-5/js/bootstrap.min.js') }}"></script>

    <!--JQuery Propertyrkline Js-->
    <script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- Circle Progress Js-->
    <script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!-- Count Down-->
    <script src="{{ asset('assets/plugins/count-down/jquery.lwtCountdown-1.0.js') }}"></script>


    <!--Counters -->
    <script src="{{ asset('assets/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counters/numeric-counter.js') }}"></script>

    <!--Owl Carousel js -->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Gallery-image-Zoom -->
    <script src="{{ asset('assets/plugins/gallery-image-zoom/RV-gallery.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery-image-zoom/main.js') }}"></script>

    <!-- Datepicker js -->
    <script src="{{ asset('assets/plugins/date-picker/spectrum.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/datepicker.js') }}"></script>

    <!-- P-scroll bar Js-->
    <script src="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.js') }}"></script>



    <!--Horizontal Menu-->
    <script src="{{ asset('assets/plugins/horizontal-menu/horizontal.js') }}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- sticky Js-->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- Cookie js -->
    <!-- <script src="{{ asset('assets/plugins/cookie/jquery.ihavecookies.js') }}"></script>
    <script src="{{ asset('assets/plugins/cookie/cookie.js') }}"></script> -->



    <!--Showmore Js-->
    <script src="{{ asset('assets/js/jquery.showmore.js') }}"></script>
    <script src="{{ asset('assets/js/showmore.js') }}"></script>


    <!-- Ion.RangeSlider -->
    <script src="{{ asset('assets/plugins/jquery-uislider/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/uislider.js') }}"></script>

    <!-- Swipe Js-->
    <script src="{{ asset('assets/js/swipe.js') }}"></script>

    <!-- Scripts Js-->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- themecolor Js-->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Custom-switcher Js-->
    <script src="{{ asset('assets/js/custom-switcher.js') }}"></script>

    <!-- Vertical scroll bar Js-->
    <script src="{{ asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js') }}"></script>
    <script src="{{ asset('assets/plugins/vertical-scroll/vertical-scroll.js') }}"></script>
    <!-- Cover-image Js-->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"
        integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?= asset('assets/css/toaster/index.css') ?>" />

    @stack('scripts')

    @if (session('error'))
        <script>
            $(document).ready(() => {
                $.toast({
                    text: `{{ session('error') }}`,
                    showHideTransition: 'fade',
                    allowToastClose: false,
                    hideAfter: 5000,
                    stack: 5,
                    position: 'bottom-center',
                    loader: false,
                    textAlign: 'center',
                    bgColor: '#000'
                });
            })
        </script>
    @endif
    @if (session('success'))
        <script>
            $(document).ready(() => {
                $.toast({
                    text: `{{ session('success') }}`,
                    showHideTransition: 'fade',
                    allowToastClose: false,
                    hideAfter: 5000,
                    stack: 5,
                    position: 'bottom-center',
                    loader: false,
                    textAlign: 'center',
                    bgColor: '#000'
                });
            })
        </script>
    @endif

</body>

</html>
