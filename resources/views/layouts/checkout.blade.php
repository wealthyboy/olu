<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ isset( $page_title) ?  $page_title .' |  '.config('app.name') : 'Ohram' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ isset($page_meta_description) ? $page_meta_description : '' }}">
    <meta name="keywords" content="{{ isset($settings->meta_tag_keywords) ? $settings->meta_tag_keywords : '' }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicone Icon -->
     <!-- Favicone Icon -->
     <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <link rel="apple-touch-icon" href="/img/favicon.png">

    <!-- CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/css/theme.css" rel="stylesheet" type="text/css" />
    <link href="/css/skins/skin-default.css" rel="stylesheet" type="text/css" />
    <link href="/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/css/custom.css?version={{ str_random(6) }}" rel="stylesheet" type="text/css" />
    <script>

    </script>

</head>

<body>

<div id="app">  

    <!-- Shop Overlay -->
    <!-- End Shop Overlay -->

    <!-- Site Wraper -->
    <div class="site-wraper bg--gray">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!--Logo-->
                    <div class="logo mt-5 mb-5 mb-4-xs">
                        <a href="/">
                            <img src="{{ $system_settings->logo_path() }}" height="" width="" class="logo-dark" alt=" Store Logo" />
                        </a>
                    </div>
                    <!--End Logo-->
                </div>
            </div>
        </div>
        
        <!--Page Body Content -->
        <div class="page-container">
           @yield('content')
        </div>
        <!--End Page Body Content -->
        <!--Footer-->
        <!--Footer-->
        <footer class="footer bg--dark">
            <!--Footer Copyright Bar-->
            <section class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center ">
                            <p class="">© Copyright <a href="{{ Config('app.url') }}"> {{ Config('app.name') }}</a>   {{ date('Y') }}. All rights reserved.</p>
                        </div>
                       
                    </div>
                </div>
            </section>
        </footer>
        <!--End Footer-->
        

    </div>
        <!-- Site Wraper End -->
    </div>

    <!-- JS -->
    <script src="/js/checkout.js?version={{ str_random(6) }}" type="text/javascript"></script>
</body>
</html>















