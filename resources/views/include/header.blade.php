

<!DOCTYPE HTML>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


<!-- Basic Page Needs -->
<meta charset="utf-8">
<!--[if IE]-->
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<!--[endif]-->
<title>ISA - CAR SELLER COMPANY

</title>
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- Theme Style -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/style.css') }}">

<!-- Favicon and Touch Icons  -->
<link href="{{ URL::asset('/imag/icon/favicon.png') }}" rel="shortcut icon">
<link href="{{ URL::asset('/imag/icon/apple-touch-icon-158-precomposed.png') }}" rel="apple-touch-icon-precomposed">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]-->
<!-- <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
<!--[endif]-->
<link rel="stylesheet" href="css">

    <!-- ==== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<!--Bootstrap -->
<link rel="stylesheet" href="{{URL::asset('/CSS/bootstrap.min.css')}}" type="text/css">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('/CSS/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/CSS/su/style.css') }}">

<link rel="stylesheet" href="{{URL::asset('/CSS/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{URL::asset('/CSS/owl.transitions.css')}}" type="text/css">
<link rel="stylesheet" href="{{URL::asset('/CSS/slick.css')}}">
<link rel="stylesheet" href="{{URL::asset('/CSS/bootstrap-slider.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('/CSS/font-awesome.min.css')}}">

<link rel="stylesheet" id="switcher-css" type="text/css" href="{{ URL::asset('/switcher/css/switcher.css') }}" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('/switcher/css/red.css') }} " title="red" media="all" data-default-color="true" />
<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('/switcher/css/orange.css') }}" title="orange" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('/switcher/css/blue.css') }}" title="blue" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('/switcher/css/pink.css') }}" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('/switcher/css/green.css') }}" title="green" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ URL::asset('/switcher/css/purple.css') }}" title="purple" media="all" />


<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('/images/favicon-icon/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('/images/favicon-icon/apple-touch-icon-114-precomposed.html') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('/images/favicon-icon/apple-touch-icon-72-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('/images/favicon-icon/apple-touch-icon-57-precomposed.png') }}">

<link rel="shortcut icon" href="{{ url::asset('/images/favicon-icon/favicon.png') }}">
<link href="{{ url::asset('https://fonts.googleapis.com/css?family=Lato:300,400,700,90" rel="stylesheet') }}">


<link rel="stylesheet" href="{{URL::asset('/CSS/animsition.css')}}">
<link rel="stylesheet" href="{{URL::asset('/CSS/animate.css')}}">



<!-- Font awesome -->
<link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
<!-- Sandstone Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
<!-- Bootstrap Datatables -->
<link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap.min.css') }}">
<!-- Bootstrap social button library -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap-social.css') }}">
<!-- Bootstrap select -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap-select.css') }}">
<!-- Bootstrap file input -->
<link rel="stylesheet" href="{{ asset('admin/css/fileinput.min.css') }}">
<!-- Awesome Bootstrap checkbox -->
<link rel="stylesheet" href="{{ asset('admin/css/awesome-bootstrap-checkbox.css') }}">
<!-- Admin Stye -->
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">




<body>
    <div class="animsition">
        <div class="site-wrapper header-top-with">
            <!-- header-area -->
            <header id="header" class="main-header fullwidth">
                <div class="header-top">
                    <div class="container">
                        <div class="top-left">
                            <ul class="clearfix">
                                <li>
                                    ISA is your reliable vehicle purchase!
                                </li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <p><i class="fa fa-phone"></i>+967 734 050 875</p>
                            <div class="social">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <a class="main-logo" href="index.php">
                        <img src="{{ '/icon/logo.png'}}" alt="autoshow">
                    </a>
                    <ul class="header-buttons">
                        <li>
                            <a class="search-trigger">Search<span></span></a>
                        </li>
                        <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                        @endguest
                    </ul>

        </nav>
                        <li>
                            <a class="nav-trigger">Menu<span></span></a>
                        </li>
                    </ul>
                    <nav class="nav">
                        <ul id="primary-nav" class="primary-nav is-fixed">
                            <li class="">
                                <a href="index.php#cars">Models</a>
                            <li>
                                        <a href="pages-contact.php">Contact</a>
                            </li>
                            <li class="has-children">
                                <a>Pages</a>
                                <ul class="dropdown-nav is-hidden">
                                    <li class="go-back">
                                        <a href="#0">Menu</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}">Sign In &amp; Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-contact.php">Contact</a>
                                    </li>
                                    <li>
                                        <a href="pages-about.php">About Us</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages-about.php">About</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="search" class="search">
                        <form>
                            <input type="search" placeholder="Search keywords">
                        </form>
                    </div>
                </div>
            </header>


