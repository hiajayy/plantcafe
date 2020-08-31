<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Plant Cafe is a E-commerce dummy template build and designed by Deepart.">

    <meta property="og:image" content="{{asset('images/plantcafe_square.jpg')}}">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Plant Cafe">
    <meta name="twitter:image" content="{{asset('images/plantcafe_square.jpg')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Plant Cafe is a E-commerce dummy template designed by Deepart.">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicons/favicon_16px.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicons/favicon_32px.png')}}">
    <link rel="icon" type="image/png" sizes="180x180" href="{{asset('images/favicons/favicon_180px.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/favicons/favicon_192px.png')}}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset('images/favicons/favicon_512px.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- theme color -->
    <meta name="theme-color" content="#587330">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css"> -->
    
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body id="top" class="@yield('body-class')">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- loader -->
    {{-- <div class="pre-loader">
        <div class="pre-loader-icon anim-rotate">
        <span></span>
        <span class="circle"></span>
        </div>
    </div> --}}

    <!-- start header -->
    @include('inc.header')
    <!-- end header -->

    <!-- start nav -->
    <nav class="d-lg-none" id="mainNav">
        <div class="container position-relative">
            <div class="d-flex cm-flex-center mob-menu-logo">
                <a class="site-logo link" href="index.html">
                    <img src="{{asset('images/plantcafe.png')}}" alt="plantcafe">
                </a>
                <button class="close-menu no-btn d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <ul class="primary-menu">
                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Placements
                        <i class="fas fa-sort-down d-none d-lg-inline-block"></i>
                        <div class="child-menu"><i class="fas fa-caret-up"></i></div>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Bathroom</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Bed Room</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Hanging</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Living Room</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Office Desk</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Terrace & Balcony</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Type
                        <i class="fas fa-sort-down d-none d-lg-inline-block"></i>
                        <div class="child-menu"><i class="fas fa-caret-up"></i></div>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Lucky Bamboo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Air Purifying Plants</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Bonsai Plants</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Flowering Plants</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Money Plants</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Terrariums</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Indoor Plants</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Outdoor Plants</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#">Seeds</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Hurbs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Garden Art</a></li> -->
                <li class="nav-item"><a class="nav-link" href="all-pots.html">Pots</a></li>
            </ul>
            <ul class="more-option list-inline d-none d-lg-block">
                <li>
                    <a href="#" data-link="search">
                        <i class="fas fa-search"></i>
                        <span class="sr-only"> Search</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-link="cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="sr-only">Cart</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-link="wishlist">
                        <i class="fas fa-heart"></i>
                        <span class="sr-only">Wishlist</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span class="sr-only">My Account</span>
                    </a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- end nav -->

    <!-- start search-container -->
    <div class="search_container_wrapper">
        <div class="container position-relative">
            <form class="search_container" autocomplete="off">
                <input type="search" name="search" id="searh-field" placeholder="Search...">
                <button class="" type="submit"><i class="fas fa-search"></i> <span class="sr-only">Search</span></button>
            </form>
            <button class="close-icon no-btn"></button>
        </div>
    </div>
    <!-- end search-container -->

    <!-- start mobile option -->
    <ul class="more-option list-inline fixed-bottom more-sm-option d-md-none">
        <li>
            <a href="#" class="my-option">
                <i class="fas fa-user"></i>
                <span class="sr-only">My Account</span>
            </a>
        </li>
        <li>
            <a href="wishlist.html" class="wishlist">
                <i class="fas fa-heart"></i>
                <span class="sr-only">Wishlist</span>
            </a>
        </li>
        <li>
            <a href="my-cart.html" class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span class="sr-only">Cart</span>
            </a>
        </li>
    </ul>
    <!-- end mobile option -->

    <!-- start user form section -->
    <div id="form-wrapper" class="modal fade user-form" tabindex="-1" role="dialog" aria-labelledby="form-modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="modal-content col-md-6 m-auto">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="form-modal">Welcome to Plant Cafe</h5>
                        <button type="button" class="close no-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- login form -->
                        <div class="form-container" id="login-form-wrapper">
                            <form id="login-form" class="mb-3">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter User Name">
                                    <div class="invalid-feedback">Username can't be empty.</div>
                                    <!-- <div class="valid-feedback"></div> -->
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter password">
                                    <div class="invalid-feedback">Password can't be empty.</div>
                                    <!-- <div class="valid-feedback"></div> -->
                                </div>
                                <div class="form-group checkbox-group">
                                    <label for="remember-me">
                                        <input type="checkbox" value="checkbox" class="custome-checkbox"
                                            id="remember-me">
                                        <span class="checkbox-button"></span> Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="button btn-block">Login</button>
                            </form>
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a class="no-btn"
                                        href="sign-up.html">Sign Up</a></p>
                                <p class="mb-0"><a class="no-btn" href="forget-password.html"> Forget
                                        Password?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end user form section -->
    @yield('breadcrumb')
    <!-- start banner -->
    {{-- @yield('banner-area') --}}
    @section('banner-area')
    @show
    <!-- end banner -->

    <!-- start my accout mobile option -->
    <div class="my-account-wrapper d-md-none">
        <div class="my-account-header cm-flex-center d-md-none">
            <div class="close"><i class="fas fa-chevron-left"></i></div>
            <h5 class="m-0"><strong>My Account</strong></h5>
            <div class="close"><i class="fas fa-times"></i></div>
        </div>
        <hr>
        <ul class="my-account-options">
            <li><a href="my-profile.html"><i class="fas fa-user mr-2"></i> My Profile</a></li>
            <li><a href="my-orders.html"><i class="fas fa-folder mr-2"></i> My Order(s)</a></li>
            <li><a href="address.html"><i class="fas fa-home mr-2"></i> Address</a></li>
            <li><a href="notifications.html"><i class="fas fa-bell mr-2"></i> Notification</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt mr-2"></i> Log Out</a></li>
        </ul>
    </div>
    <!-- end my accout mobile option -->

    <!-- start main -->
    <main>
        @yield('main')
    </main>
    
    <!-- end main -->



    <!-- back-to-top -->
    <a href="#top" id="back-to-top"><span class="sr-only">Back to Top</span><i class="fas fa-caret-up"></i></a>

    <!-- start footer -->
    @include('inc.footer')
    <!-- end footer -->


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    @yield('js')

</body>

</html>

{{-- 
rating js include
all-pots
all-plants
offers
product
search --}}

{{-- layout image problem because of body class --}}
