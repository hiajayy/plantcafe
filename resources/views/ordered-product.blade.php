@extends('layouts.app')
@section('title','Ordered Product - Plant Cafe')
@section('body-class','ordered-product-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
    <h2 class="title-page">Ordered Product(s)</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ordered Product(s)</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<!-- start cart with products -->
    <section class="inner-wrapper">
        <div class="container">    
            <h2>Order History</h2>        
            <div class="row">

                <div class="col-12">

                    <div class="tiles">
                        <h5>Order Id: <span class="order-number">987654</span></h5>
                    </div>
                    
                    <div class="tiles cart-wrapper">
                        <div class="media cm-flex-center">
                            <a href="product.html" class="d-flex align-self-bottom product-img">
                                <img src="{{asset('images/indoor-plants/brina-blum.jpg')}}" alt="product images">
                            </a>
                            <div class="media-body product-details">
                                <h5><a href="product.html">Art Botanical Cactus</a></h5>
                                <p>Delivered on 10th Aug</p>
                                <p class="small gray-text">Return Policy ended.</p>
                            </div>
                        </div>
                        <div class="cm-flex-center">
                            <a href="#" class="button">Reorder</a>
                            <p><a href="#" class="rating-btn">Rating and Review</a></p>
                        </div>
                    </div>

                    <!-- Delivered address -->
                    <div class="tiles">
                        <div class="cm-flex-center gray-text slide-btn slide-open">
                            <h5 class="gray-text">Delivery Address</h5>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="slide-content">
                            <div class="tiles mt-3">
                                <p class="gray-text">Primary Address</p>
                                <div class="address-details">
                                    <p class="mb-0"><strong>Jane Doe</strong></p>
                                    <p>Address line one, line two, locality, state, pincode, India</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="shopping-cart tiles">
                        <div class="cm-flex-center gray-text slide-btn slide-open">
                            <h5 class="gray-text">Order Details</h5>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="slide-content">
                            <div class="tiles cart-wrapper mt-3">
                                <div class="media cm-flex-center">
                                    <a href="product.html" class="d-flex align-self-bottom product-img">
                                        <img src="{{asset('images/indoor-plants/brina-blum.jpg')}}" alt="product images">
                                    </a>
                                    <div class="media-body product-details">
                                        <h5><a href="product.html">Art Botanical Cactus</a></h5>
                                        <p>Delivered on 10th Aug</p>
                                        <p class="small gray-text">Return Policy ended.</p>
                                    </div>
                                </div>
                                <div class="cm-flex-center">
                                    <a href="#" class="button">Reorder</a>
                                    <p><a href="#" class="rating-btn">Rating and Review</a></p>
                                </div>
                            </div>
        
                            <div class="tiles cart-wrapper">
                                <div class="media cm-flex-center">
                                    <a href="product.html" class="d-flex align-self-bottom product-img">
                                        <img src="{{asset('images/pots/pexels-lisa-fotios.jpg')}}" alt="product images">
                                    </a>
                                    <div class="media-body product-details">
                                        <h5><a href="product.html">Flower Pot</a></h5>
                                        <p>Delivered on 10th Aug</p>
                                        <p class="small gray-text">Return Policy ended.</p>
                                    </div>
                                </div>
                                <div class="cm-flex-center">
                                    <a href="#" class="button">Reorder</a>
                                    <p><a href="#" class="rating-btn">Rating and Review</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- end cart with products -->
@endsection