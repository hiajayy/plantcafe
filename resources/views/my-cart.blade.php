@extends('layouts.app')
@section('title','My cart - Plant Cafe')
@section('body-class','my-cart-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My cart</li>
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
                    <img src="assets/images/stages/shopping_cart.png" alt="shoping-cart" class="stage-image">
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
                    <img src="assets/images/stages/shopping_cart.png" alt="shoping-cart" class="stage-image">
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
            <h2>My Cart</h2>
            
            <div class="row">

                <div class="col-md-8">

                    <div class="tiles">
                        <h5 class="mb-0">Cart: <span class="total-product-count">3</span> </h5>
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
                                    <a href="#" class="mt-3 d-block">Move to Wishlist</a>
                                </div>

                                <button class="remove-item danger-btn align-self-start" data-toggle="modal" data-target="#confirmMessage" title="Remove from cart"></button>
                            </div>

                            <div class="quantity-fleid">
                                <p class="mb-0 mr-3">Quantity:</p>
                                <a class="qnt-btn prev" href="#"></a>
                                <input class="quantity-input" type="text" value="1">
                                <a class="qnt-btn next" href="#"></a>
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
                                    <a href="#" class="mt-3 d-block">Move to Wishlist</a>
                                </div>

                                <button class="remove-item danger-btn align-self-start" data-toggle="modal" data-target="#confirmMessage" title="Remove from cart"></button>
                            </div>

                            <div class="quantity-fleid">
                                <p class="mb-0 mr-3">Quantity:</p>
                                <a class="qnt-btn prev" href="#"></a>
                                <input class="quantity-input" type="text" value="1">
                                <a class="qnt-btn next" href="#"></a>
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
                                    <a href="#" class="mt-3 d-block">Move to Wishlist</a>
                                </div>

                                <button class="remove-item danger-btn align-self-start" data-toggle="modal" data-target="#confirmMessage" title="Remove from cart" ></button>
                            </div>

                            <div class="quantity-fleid">
                                <p class="mb-0 mr-3">Quantity:</p>
                                <a class="qnt-btn prev" href="#"></a>
                                <input class="quantity-input" type="text" value="1">
                                <a class="qnt-btn next" href="#"></a>
                            </div>
                        </div>
                    
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="tiles">
                        <label for="coupon-code">Have a Coupon?</label>
                        <div class="form-group mb-0 d-flex">
                            <input type="text" class="form-control" id="coupon-code" placeholder="Enter Coupon Code">
                            <button class="button">Apply</button>
                        </div>
                    </div>

                    <div class="tiles">
                        <div class="cm-flex-center mb-3">
                            <p class="text-uppercase">Subtotal</p>
                            <p class="text-uppercase">$100</p>
                        </div>
                        <div class="cm-flex-center mb-3">
                            <p class="text-uppercase">Shipping</p>
                            <p class="text-uppercase">Free</p>
                        </div>
                        <div class="cm-flex-center mb-3">
                            <p class="text-uppercase font-italic gray-text">Discount (Less)</p>
                            <p class="text-uppercase">$10</>
                        </div>
                        <div class="cm-flex-center mb-3 border-top pt-3">
                            <p class="text-uppercase font-weight-bold">Total</p>
                            <p class="text-uppercase font-weight-bold" id="total-amount">$90</p>
                        </div>
                        <a href="checkout.html" class="button secondary-btn d-block">Checkout</a>
                    </div>

                    <div>
                        <p class="policy">Safe and Secure Payments</p>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- end cart with products -->
@endsection