
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ isset( $page_title) ?  $page_title .' |  '.config('app.name') : 'Ohram' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ isset($page_meta_description) ? $page_meta_description : $system_settings->meta_description }}">
    <meta name="keywords" content="{{ isset($system_settings->meta_tag_keywords) ? $system_settings->meta_tag_keywords : 'cleanse,detox,flattummy,flattummy tea ng,slimming tea' }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="http://oluremiabimbola.com">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/css/theme.css?version={{ str_random(6) }}" rel="stylesheet" type="text/css" />
    <link href="/css/skins/skin-default.css?version={{ str_random(6) }}" rel="stylesheet" type="text/css" />
    @yield('page-css')
    <link href="/css/custom.css?version={{ str_random(6) }}" rel="stylesheet" type="text/css" />
    <meta property="og:site_name" content="oluremiabimbola">
    <meta property="og:url" content="http://oluremiabimbola.com">
    <meta property="og:title" content=" ">
    <meta property="og:type" content="website">
    <meta property="og:description" content="!">
    <meta property="og:image:alt" content="">
    
    <script>
      Window.auth = {!! auth()->check()  ? auth()->user() : 'null' !!}
    </script>
</head>

<body>

<div id="app">  

 



    <!-- Shop Overlay -->
    <div class="shop-overlay"></div>
    <!-- End Shop Overlay -->

    <!-- Site Wraper -->
    <div class="site-wraper">
        
        <!-- Header ('header--dark' or 'header--light', 'header--sticky')-->
            <header id="header" class="header header--sticky" data-header-hover="true">
              <messages />          
            </header>
            <div class="bg--primary"></div>
            <header id="header" class="header header--sticky" data-header-hover="true">
            <!--End Header Topbar-->
            
           
            <!--End Header Topbar-->
            <!--Header Navigation-->
            <nav id="navigation" class="header-nav border ">
                <div class="container-fluid">
                    <div class="row">
                        <!--Logo-->
                        <div class="site-logo">
                            <a href="/">
                            </a>
                        </div>
                        <!--End Logo-->
                        <!--Navigation Menu-->
                        <div class="nav-menu">
                            <ul>
                                @foreach( $global_categories   as  $category)
                                    <li class="nav-menu-item text-uppercase">
                                        <a href="{{  !$category->children->count() ? "/".$category->slug . "" : "#" }}">{{ $category->name }}</a>
                                        @if ($category->children->count())
                                        <!--Dropdown-->
                                            @include('includes.categories',['category' => $category])
                                        <!--End Dropdown-->
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End Navigation Menu-->

                        <!--Nav Icons-->
                        <div class="nav-icons">
                        <ul>
                            <li class="nav-icon-item d-lg-none">
                                <div class="nav-icon-trigger menu-mobile-btn" title="Navigation Menu"><span><i class="ti-menu"></i></span></div>
                            </li>
                        </ul>
                        </div>
                        <!--End Nav Icons-->
                    </div>
                </div>
            </nav>
            <!--End Header Navigation-->
           </header>
        <!-- End Header -->
        
        <!--Page Body Content -->
        <div class="page-container">
           @yield('content')
        </div>
        <!--End Page Body Content -->

        <!--Footer-->
        <footer class="footer bg--dark">
            <!--Footer Copyright Bar-->
            <section class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="">© Copyright Oluremilekun Stella Abimbola  {{ date('Y') }}. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!--End Footer-->
        
        </div> 
    </div>

    <!-- JS -->
    <script src="/js/app.js?version={{ str_random(6) }}" type="text/javascript"></script>
    @yield('page-scripts')
    <script src="/js/theme.js?version={{ str_random(6) }}" type="text/javascript"></script>
    <script type="text/javascript">
        @yield('inline-scripts')
    </script>
</body>
</html>














