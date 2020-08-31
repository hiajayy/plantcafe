@extends('layouts.app')
@section('title','All Plants - Plant Cafe')
@section('body-class','all-plants-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/bootstrap4-rating-input.js')}}"></script>
<script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Plants</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<section class="inner-wrapper">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3 filter-plants-wrapper">
                        <div class="cm-flex-center d-md-none">
                            <div class="close"><i class="fas fa-chevron-left"></i></div>
                            <h5 class="m-0"><strong>Filter</strong></h5>
                            <div class="close"><i class="fas fa-times"></i></div>
                        </div>
                        <p class="mb-0 d-none d-md-block"><strong>Filter</strong></p>
                        <hr>
                        <div class="filter-option-wrapper">
                            <h5 class="filter-option slide-btn">By Categories</h5>
                            <div class="filter-option-data slide-content">
                                <ul>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="indoor-plant">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="indoor-plant">
                                                <span class="checkbox-button"></span> Indoor Plants
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="outdoor-plant">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="outdoor-plant">
                                                <span class="checkbox-button"></span> Outdoor Plants
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="category-3">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="category-3">
                                                <span class="checkbox-button"></span> Category 3
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="category-4">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="category-4">
                                                <span class="checkbox-button"></span> Category 4
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="category-5">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="category-5">
                                                <span class="checkbox-button"></span> Category 5
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-option-wrapper">
                            <h5 class="filter-option slide-btn">By Placement</h5>
                            <div class="filter-option-data slide-content">
                                <ul>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="bathroom">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="bathroom">
                                                <span class="checkbox-button"></span> Bathroom
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="bed-room">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="bed-room">
                                                <span class="checkbox-button"></span> Bed Room
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="hanging">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="hanging">
                                                <span class="checkbox-button"></span> Hanging
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="living-room">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="living-room">
                                                <span class="checkbox-button"></span>  Living Room
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="office-desk">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="office-desk">
                                                <span class="checkbox-button"></span> Office Desk
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="terrace-balcony">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="terrace-balcony">
                                                <span class="checkbox-button"></span> Terrace & Balcony
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-option-wrapper">
                            <h5 class="filter-option slide-btn">By Type</h5>
                            <div class="filter-option-data slide-content">
                                <ul>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="lucky-bamboo">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="lucky-bamboo">
                                                <span class="checkbox-button"></span> Lucky Bamboo
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="air-purifying-plant">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="air-purifying-plant">
                                                <span class="checkbox-button"></span> Air Purifying Plants
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="bonsai-plant">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="bonsai-plant">
                                                <span class="checkbox-button"></span> Bonsai Plants
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="flowering-plant">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="flowering-plant">
                                                <span class="checkbox-button"></span> Flowering Plants
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="money-plant">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="money-plant">
                                                <span class="checkbox-button"></span> Money Plants
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="terraiums">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="terraiums">
                                                <span class="checkbox-button"></span> Terrariums
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <section class="col-md-9 pt-3 pt-md-0">
                        <div class="cm-flex-center">
                            <p class="mb-0 d-md-none filter-list">Filter</p>
                            <p class="mb-0"><strong>All Plants</strong></p>
                            <div class="dropdown">
                                <a href="#" class="sort-price">Sort</a>
                                <ul class="sort-options text-left">
                                    <li><a href="#"><i class="fas fa-sort-amount-up mr-2"></i> Price Low to High</a></li>
                                    <li><a href="#"><i class="fas fa-sort-amount-down mr-2"></i> Price High to low</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr class="mb-3">
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/andre-gorham.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/anna-yenina.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/sarah-dorweiler.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/nick-hillier.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/nagy-arnold.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/marisol-casben.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/dose-media.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/manja-vitolic.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="plant-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="plant-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/indoor-plants/anna-yenina.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/indoor-plants/dan-gold.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body plant_info">
                                        <span class="tag">Indoor Plants</span>
                                        <h5 class="plant-name"><a href="product.html">Marisol Casben</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
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
                    </section>
                </div>
            </div>
        </section>

@endsection
