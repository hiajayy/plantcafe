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

    @yield('css')

    <!-- theme color -->
    <meta name="theme-color" content="#587330">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
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

    <!-- start side menu nav -->
    <nav class="d-lg-none" id="mainNav">
        <div class="container position-relative">
            <div class="d-flex justify-content-between mob-menu-logo">
                <!-- <a class="site-logo link" href="index.html">
                    <img src="{{asset('images/plantcafe.png')}}" alt="plantcafe">
                </a> -->
                
                <div class="media mb-0 mr-2">
                    <a href="/my-profile"><img src="{{asset('images/avatar/female-avatar.png')}}" alt="avatar"></a>
                    <div class="media-body">
                        <p class="mb-0">Hello, </p>
                        <h5 class="mt-0"><a href="/my-profile">Jane Doe</a></h5>
                    </div>
                </div>

                <button class="close-menu no-btn d-lg-none"></button>
            </div>
            
            <!-- start nav -->
            @include('inc.primary-nav')
            <!-- end nav -->

        </div>
    </nav>
    <!-- end side menu nav -->

    <!-- start mobile option -->
    <ul class="list-inline fixed-bottom more-sm-option d-md-none">
        <li>
            <a href="/" class="cart">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="/wishlist" class="wishlist">
                <i class="fas fa-heart"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="#" class="my-option">
                <i class="fas fa-user"></i>
                <span>My Account</span>
            </a>
        </li>
    </ul>
    <!-- end mobile option -->

    <!-- start user form section -->
    <div id="form-wrapper" class="modal fade user-form" tabindex="-1" role="dialog" aria-labelledby="form-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="modal-content col-md-6 m-auto">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="form-modal">Welcome to Plant Cafe</h5>
                        <button type="button" class="close no-btn" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
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


    <!-- start search-container -->
    <div class="search_container_wrapper">
        <div class="container position-relative">
            {{-- <form class="search_container" autocomplete="off">
                <div class='d-flex w-100'>
                    <label for="search" class='sr-only'>Search</label>
                    <input type="text" id="searh-field" placeholder="Search...">
                    <button type="submit"><i class="fas fa-search"></i>
                    <span class="sr-only">Search</span></button>
                </div>
                <button class="close-icon no-btn"></button>
            </form> --}}

            <div class="search_container">
                <div class='d-flex w-100'>
                    <label for="search" class='sr-only'>Search</label>
                    <input type="text" id="searh-field" placeholder="Search...">
                    <button type="submit"><i class="fas fa-search"></i>
                    <span class="sr-only">Search</span></button>
                </div>
                <button class="close-icon no-btn"></button>
            </div>

        </div>
    </div>
    <!-- end search-container -->
    

    <!-- start banner -->
    {{-- @yield('banner-area') --}}
    @section('banner-area')
    @show
    <!-- end banner -->

    <!-- start my accout mobile option -->
    <div class="my-account-wrapper d-md-none mob-slideup">
        <div class="slideup-head cm-flex-center d-md-none">
            <div class="close-slide"><i class="fas fa-chevron-left"></i></div>
            <h5 class="m-0"><strong>My Account</strong></h5>
            <div class="close-slide"><i class="fas fa-times"></i></div>
        </div>
        <div class="slideup-body">
            <ul class="my-account-options">
                <li><a href="/my-profile"><i class="fas fa-user mr-2"></i> My Profile</a></li>
                <li><a href="/my-orders"><i class="fas fa-folder mr-2"></i> My Order(s)</a></li>
                <li><a href="/address"><i class="fas fa-home mr-2"></i> Address</a></li>
                <li><a href="/notifications"><i class="fas fa-bell mr-2"></i> Notification</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt mr-2"></i> Log Out</a></li>
            </ul>
        </div>
    </div>
    <!-- end my accout mobile option -->

    <!-- start main -->
    <main>
        @yield('breadcrumb')
        @yield('main')
    </main>
    
    <!-- end main -->



    <!-- back-to-top -->
    <a href="#top" id="back-to-top"><span class="sr-only">Back to Top</span><i class="fas fa-caret-up"></i></a>


    <!-- start newsletter -->
    <section class='light-bg py-4'>
        <div class="container">
            <div class="row">
                <div class='col-md-4'>
                    <h2>Subscribe</h2>
                </div>
                <form class="newsletter-form col-md-8 m-auto">
                    <div class="form-group mb-0">
                        <p>Join us to recieve gardening tips, offers, news & more</p>
                        <label for="newslatter" class='sr-only'>Join us to recieve gardening tips, offers, news & more</label>
                        <div class="d-flex">
                            <input type="text" class="form-control" id="newslatter" placeholder="Your Email Address">
                            <button class="button">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end newsletter -->


    <!-- start overlay -->
    <div class="overlay"></div>
    <!-- end overlay -->


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
