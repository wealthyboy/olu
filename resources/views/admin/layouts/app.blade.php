@inject('helper', 'App\Http\Helper')

<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/asset/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="/asset/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ Config('app.name')}} | Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet"/>
    @yield('pagespecificstyles')
	<!--     Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CMaterial+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>


<body >
 
  <!-- End Google Tag Manager (noscript) -->

	<div  class="wrapper">

	    <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="/assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->

    <div class="logo">
        <a href="#" class="simple-text logo-mini">
             
        </a>

        <a href="{{ route('admin_home') }}" class="simple-text logo-normal">
             {{ Config('app.name') }} 
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="/store/img/default_img.png" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#" class="collapsed">
                    <span>
                    @if (Auth::check() )
                      {{ Auth::user()->name }}
                    @endif
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    
                </div>
            </div>
        </div>
        <ul class="nav">

            <li>
                <a href="/admin">
                <i class="fa fa-dashboard"></i>
                    <p> Dashboard </p>
                </a>
            </li>

            <li class="{{ $helper->active_link(['maintainance']) }} ">
                <a href="{{ route('maintainance') }}">
                <i class="fa fa-circle"></i>
                    <p> Disable/Enable Site
                    </p>
                </a>
            </li>

            <li class="{{ $helper->active_link(['pictures']) }} ">
                <a href="{{ route('pictures.index') }}">
                <i class="fa fa-circle"></i>
                    <p> Pictures
                    </p>
                </a>
            </li>


            <li class="{{ $helper->active_link(['videos']) }} ">
            <a href="{{ route('videos.index') }}">
                <i class="fa fa-circle"></i>
                    <p> Videos </p>
                </a>
            </li>

            <li class="{{ $helper->active_link(['consolations']) }} ">
                <a href="{{ route('consolations.index') }}">
                <i class="fa fa-circle"></i>
                    <p> Consolations </p>
                </a>
            </li>

            <li class="{{ $helper->active_link(['salutations']) }} ">
                <a href="{{ route('salutations.index') }}">
                <i class="fa fa-circle"></i>
                    <p> Tributes </p>
                </a>
            </li>

            <li class="{{ $helper->active_link(['contacts']) }} ">
                <a href="{{ route('contacts.index') }}">
                <i class="fa fa-info-circle" aria-hidden="true"></i>  
                    <p> Contacts </p>
                </a>
            </li>

            <li class="{{ $helper->active_link(['Category']) }} ">
                <a href="{{ route('category.index') }}">
                <i class="fa fa-info-circle" aria-hidden="true"></i>  
                    <p> Category </p>
                </a>
            </li>
          
            <li class="{{ $helper->active_link(['media']) }} ">
                <a href="{{ route('media.index') }}">
                <i class="fa fa-info-circle" aria-hidden="true"></i>  
                    <p> Media</p>
                </a>
            </li>


            <li class="{{ $helper->active_link(['media']) }} ">
                <a href="{{ route('settings.index') }}">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>  
                    <p> Settings</p>
                </a>
            </li>
            <li class="{{ $helper->active_link(['banners']) }} ">
                <a data-toggle="collapse" href="dashboard.html#Design">
                <i class="fa fa-paint-brush"></i> <p> Design 
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse {{ $helper->active_link(['design']) }}  ? 'in' : ''}}" id="Design">
                    <ul class="nav">
                         <li class="{{ $helper->active_link(['banners']) }} ">
                            <a href="{{ route('banners.index') }}">
                            <span class="sidebar-mini"><i class="fa fa-circle"></i></span>
                            <span class="sidebar-normal">  Banners</span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li>

            <li class="{{ $helper->active_link(['users','customers']) }} ">
                <a data-toggle="collapse" href="dashboard.html#users">
                <i class="fa fa-user fw"></i> <p> Users 
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav">
                        <li class="{{ $helper->active_link(['users']) }} ">
                            <a href="{{ route('admin.users.index') }}">
                                <span class="sidebar-mini"><i class="fa fa-circle"></i></span>
                                <span class="sidebar-normal"> Admin </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
          
          
        </ul>
    </div>
</div>


	<div class="main-panel">

	<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons visible-on-sidebar-mini">view_list</i>
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"> View Site </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="notification">0</span>
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <!-- <ul class="dropdown-menu">
                        <li><a href="dashboard.html#">Mike John responded to your email</a></li>
                        <li><a href="dashboard.html#">You have 5 new tasks</a></li>
                        <li><a href="dashboard.html#">You're now friend with Andrew</a></li>
                        <li><a href="dashboard.html#">Another Notification</a></li>
                        <li><a href="dashboard.html#">Another One</a></li>
                    </ul> -->
                </li>
                @if (Auth::check() )
                     <li class="dropdown">
                    <a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout
                                </a>
                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                </li>
                @endif
                <li class="separator hidden-lg hidden-md"></li>
            </ul>

        </div>
    </div>
</nav>


			
<div  class="content">
    <div id="app" class="container-fluid">
        @yield('content')
    </div>
</div>
    
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
           
        </nav>
        <p class="copyright pull-right">
            &copy; 2020<a href="/"> {{ Config('app.name')}} </a>
        </p>
    </div>
    </footer>			
  </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('store/js/jquery.min.js?version='.mt_rand(1000000, 9999999) ) }}" type="text/javascript"></script>
<script src="{{ asset('store/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('store/js/jquery.datatables.js') }}"></script>
<script src="{{ asset('js/dashboard.js?version='.mt_rand(1000000, 9999999) )  }}" type="text/javascript"></script>
@yield('page-scripts')
    <script type="text/javascript">
        @yield('inline-scripts')
    </script>
</body>
  

</html>
