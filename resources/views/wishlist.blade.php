@extends('layouts.app')
@section('title','Wishlist - Plant Cafe')

@section('body-class','wishlist-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
    <h2 class="title-page">Wishlist</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<!-- start without login -->
        <!-- <section class="inner-wrapper">
            <div class="container">
                <h2>My Cart</h2>
                <div class="text-center">
                    <img src="{{asset('images/stages/shopping_cart.png')}}" alt="shoping-cart" class="stage-image">
                    <h4>Missing Cart items?</h4>
                    <p>Login to see the items you added previously</p>
                    <a href="login.html" title="login" class="button">Login</a>
                </div>
            </div>
        </section> -->
    <!-- end without login -->


    <!-- start empty cart -->
        <!-- <section class="inner-wrapper">
            <div class="container">
                <h2>My Cart</h2>
                <div class="text-center">
                    <img src="{{asset('images/stages/shopping_cart.png')}}" alt="shoping-cart" class="stage-image">
                    <h4>Your cart is empty.</h4>
                    <p>Add Plants to cart now.</p>
                    <a href="index.html" title="home" class="button">Start Browsing</a>
                </div>
            </div>
        </section> -->
    <!-- end empty cart -->

    <!-- start cart with products -->
    <section class="inner-wrapper">
        <div class="container">
            <h2>Wishlist</h2>
            
            <div class="row">

                <div class="col-12">

                    <div class="tiles">
                        <h5 class="mb-0">Wishlist: <span class="total-product-count">3</span> </h5>
                    </div>
                    
                    <div class="shopping-cart">
        
                        <div class="tiles cart-wrapper">
                            <div class="media cm-flex-center">
                                <a href="product.html" class="d-flex align-self-bottom product-img">
                                    <img src="{{asset('images/indoor-plants/brina-blum.jpg')}}" alt="product images">
                                </a>
                                <div class="media-body product-details">
                                    <h5><a href="product.html">Art Botanical Cactus</a></h5>
                                    <p class="price">$50</p>
                                    <a href="#" class="mt-3 d-inline-block">Add to Cart</a>
                                </div>
                                <button class="remove-item danger-btn align-self-start" data-toggle="modal" data-target="#confirmMessage" title="Remove from cart"></button>
                            </div>
                        </div>
    
                        <div class="tiles cart-wrapper">
                            <div class="media cm-flex-center">
                                <a href="product.html" class="d-flex align-self-bottom product-img">
                                    <img src="{{asset('images/indoor-plants/sarah-dorweiler.jpg')}}" alt="product images">
                                </a>
                                <div class="media-body product-details">
                                    <h5><a href="product.html">Marisol Casben</a></h5>
                                    <p class="price">$20</p>
                                    <a href="#" class="mt-3 d-inline-block">Add to Cart</a>
                                </div>
                                <button class="remove-item danger-btn align-self-start" data-toggle="modal" data-target="#confirmMessage" title="Remove from cart"></button>
                            </div>
                        </div>
    
                        <div class="tiles cart-wrapper">
                            <div class="media cm-flex-center">
                                <a href="product.html" class="d-flex align-self-bottom product-img">
                                    <img src="{{asset('images/pots/pexels-lisa-fotios.jpg')}}" alt="product images">
                                </a>
                                <div class="media-body product-details">
                                    <h5><a href="product.html">Flower Pot</a></h5>
                                    <p class="price">$30</p>
                                    <a href="#" class="mt-3 d-inline-block">Add to Cart</a>
                                </div>
                                <button class="remove-item danger-btn align-self-start" data-toggle="modal" data-target="#confirmMessage" title="Remove from cart"></button>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end cart with products -->
@endsection