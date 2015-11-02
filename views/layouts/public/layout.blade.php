<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>{{ $data['name'] }}</title>

    <meta name="description" content="{{ $data['description'] }}">
    <meta name="author" content="Angel Kurten">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">-->
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{ asset_theme('platform/css/bootstrap.min.css') }}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{ asset_theme('platform/css/plugins.css') }}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{ asset_theme('platform/css/main.css') }}">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{ asset_theme('platform/css/themes.css') }}">
    <!-- END Stylesheets -->

    @yield('css')

            <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="{{ asset_theme('platform/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js') }}"></script>
</head>
<body class="page-loading">
<!-- Preloader -->
<!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
<div class="preloader themed-background">
    <h1 class="push-top-bottom text-light text-center">{{ $data['name'] }}</h1>
    <div class="inner">
        <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Cargando...</strong></h3>
        <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
    </div>
</div>
<!-- END Preloader -->

<!-- Page Container -->
<div id="page-container" class="sidebar-no-animations footer-fixed">
    <!-- Main Container -->
    <div id="main-container">

        @include(view_path('layouts.public.header'))

                <!-- Page content -->
        <div id="page-content">
            @yield('content')
        </div>
        <!-- END Page Content -->

        <!-- Footer -->
        <footer class="clearfix">
            <div class="pull-right">
                Desarrollado con <i class="fa fa-heart text-danger"></i> por <a href="https://www.facebook.com/angel.kurten" target="_blank">Angel Kurten</a>
            </div>
            <div class="pull-left">
                <span id="year-copy"></span> &copy; <a href="https://www.facebook.com/angel.kurten" target="_blank">{{ $data['name'] }}</a>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="{{ asset_theme('platform/js/vendor/jquery-1.11.1.min.js') }}"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="{{ asset_theme('platform/js/vendor/jquery-1.11.1.min.js') }}"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="{{ asset_theme('platform/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset_theme('platform/js/plugins.js') }}"></script>
<script src="{{ asset_theme('platform/js/app.js') }}"></script>

@yield('scripts')
</body>
</html>