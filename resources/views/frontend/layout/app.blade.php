

<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<!--Bootstrap -->



    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]-->
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <!--[endif]-->
    <title>     | @yield('title')
    </title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- Theme Style -->
    <link href="{{ asset('CSS/style.css') }}" rel="stylesheet">
    <!-- Favicon and Touch Icons  -->
    <link href="{{ asset('icon/favicon.png') }}" rel="shortcut icon">
    <link href="{{ asset('icon/apple-touch-icon-158-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]-->
    <!-- <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    <!--[endif]-->
</head>

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
                        <img src="assets/icon/logo.png" alt="autoshow">
                    </a>
                    <ul class="header-buttons">


                        <li>
                            <a class="search-trigger">Search<span></span></a>
                        </li>
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
                                        <a href="login.php">Sign In &amp; Register</a>
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
<body>

        <main>
            @yield('content')
        </main>
</body>
</html>
