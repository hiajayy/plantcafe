@extends('layouts.app')
@section('title','Search - Plant Cafe')
@section('body-class','search-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/bootstrap4-rating-input.js')}}"></script>
<script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
    <h2 class="title-page">Search Result</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Search</li>
        </ol>
    </div>
</nav>
@endsection

@section('main')
<section class="inner-wrapper">
            <div class="container ">
                <h2>You Searched for <span id="searched-item-name" class="primary-text text-uppercase">Bonsai</span></h2>
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/anna-yenina.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/sarah-dorweiler.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/nick-hillier.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/nagy-arnold.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/marisol-casben.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/dose-media.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/manja-vitolic.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="plant-card card">
                            <div class="card-image">
                                <a href="product.html">
                                    <img src="{{asset('images/indoor-plants/anna-yenina.jpg')}}" alt="img" class="front-img">
                                    <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                </a>
                                <ul class="card-option">
                                    <li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li>
                                    <li><a href="#" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li>
                                </ul>
                            </div>
                            <div class="card-body plant_info">
                                <span class="tag">Indoor Plants</span>
                                <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                <input type="number" class="rating" value="4" data-readonly>
                            </div>
                            <div class="card-footer">
                                <div class="cm-flex-center">
                                    <p class="plant-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                                <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
@endsection