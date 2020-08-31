@extends('layouts.app')
@section('title','All Pots - Plant Cafe')
@section('body-class','all-pots-page')
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
            <li class="breadcrumb-item active" aria-current="page">All Pots</li>
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
                        <div class="filter-option-wrapper open">
                            <h5 class="filter-option slide-btn">By Categories</h5>
                            <div class="filter-option-data slide-content">
                                <ul>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="category-1">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="category-1">
                                                <span class="checkbox-button"></span> Category 1
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group checkbox-group">
                                            <label for="category-2">
                                                <input type="checkbox" value="checkbox" class="custome-checkbox" id="category-2">
                                                <span class="checkbox-button"></span> Category 2
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
                    </aside>
                    <section class="col-md-9 pt-3 pt-md-0">
                        <div class="cm-flex-center">
                            <p class="mb-0 d-md-none filter-list">Filter</p>
                            <p class="mb-0"><strong>All Pots</strong></p>
                            <div class="position-relative">
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
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-valeria-ushakova.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Flower Pot</span>
                                        <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-rovelyn-camato.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Flower Pot</span>
                                        <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-rovelyn-camato-1.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Planter</span>
                                        <h5 class="pot-name"><a href="product.html">Planter</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-lisa-fotios.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Planter</span>
                                        <h5 class="pot-name"><a href="product.html">Planter</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-kate-amos.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Planterette</span>
                                        <h5 class="pot-name"><a href="product.html">Planterette</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-julia-kuzenkov.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Planterette</span>
                                        <h5 class="pot-name"><a href="product.html">Planterette</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-dominika-roseclay.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Flower Pot</span>
                                        <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-daria-shevtsova.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Flower Pot</span>
                                        <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="pot-card card">
                                    <div class="card-image">
                                        <a href="product.html">
                                            <img src="{{asset('images/pots/pexels-cottonbro.jpg')}}" alt="img" class="front-img">
                                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="back-img">
                                        </a>
                                        <ul class="card-option">
                                            <li><a href='' class="button light-btn cart-btn" title="Add to Cart"><i
                                                        class="fas fa-shopping-cart"></i> </a></li>
                                            <li><a href='#' class="button light-btn wishlist-btn" title="Add to Wishlist"><i
                                                        class="fas fa-heart"></i> </a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body pot_info">
                                        <span class="tag">Flower Pot</span>
                                        <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                                        <input type="number" class="rating" value="3" data-readonly>
                                    </div>
                                    <div class="card-footer">
                                        <div class="cm-flex-center mb-3">
                                            <p class="pot-price">$65</p>
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