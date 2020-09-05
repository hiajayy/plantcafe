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
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body id="top" class="@yield('body-class')">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- start main -->
    <main class='pt-0'>
        @yield('main')
    </main>
    
    <!-- end main -->


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    @yield('js')

</body>

</html>