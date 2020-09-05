@extends('layouts.app')
@section('title','Home(Testing) - Plant Cafe')
@section('body-class','home-page')
@section('js')
    
    <script>
        $.ajax({
            url : '/home',
            success : function(response){
                let plant = '';
                    response.forEach(function(item){
                        plant = '<div class="latest-plant plant-card card"><div class="card-image"><a href="product.html"><img src="{{asset('images/indoor-plants/brina-blum.jpg')}}" alt="img" class="back-img"><img src="{{asset('images/product')}}/'+item.image_url+'" alt="img" class="front-img"></a><ul class="card-option"><li><a href="" class="button light-btn cart-btn" title="Add to Cart"><i class="fas fa-shopping-cart"></i> </a></li><li><a href="" class="button light-btn wishlist-btn" title="Add to Wishlist"><i class="fas fa-heart"></i> </a></li></ul></div><div class="card-body plant_info"><span class="tag">Indoor Plants</span><h5 class="plant-name"><a href="product.html">'+item.name+'</a></h5><input type="number" class="rating" value="3" data-readonly></div><div class="card-footer"><div class="cm-flex-center mb-3"><p class="plant-price">'+item.sp+'</p><div><span class="original-price">'+item.mrp+'</span><span class="discount-rate">'+item.discount+'% off</span></div></div><a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a></div></div>';
                        $('.latest-plant-slider').append(plant);
                    });
                        
            }
        });
    </script>
    <script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/bootstrap4-rating-input.js')}}"></script>
<script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
<script src="{{asset('js/index.js')}}"></script>

    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection
@section('banner-area')
@parent
<div class="banner-area">
        <div class="banner-slider owl-carousel">
            <div class="banner-slide" style="background-image: url({{asset('images/placement/office-desk/scott-webb.jpg')}});">
                <div class="container">
                    <div class="caption-text">
                        <h2>Plants for Office Desk</h2>
                        <a href="#" class="button">View More</a>
                    </div>
                </div>
            </div>

            <div class="banner-slide" style="background-image: url({{asset('images/indoor-plants/dose-media.jpg')}});">
                <div class="container">
                    <div class="caption-text">
                        <h2>Hanging Plants</h2>
                        <a href="#" class="button">View More</a>
                    </div>
                </div>
            </div>

            <div class="banner-slide" style="background-image: url({{asset('images/art-botanical-cactus.jpg')}});">
                <div class="container">
                    <div class="caption-text">
                        <h2>Living Room Plant</h2>
                        <a href="#" class="button">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('main')
        <!-- start Offers on Plants -->
        <section class="inner-wrapper offer-area-wrapper">
            <div class="offers-area container">
                <h2>Offers on Plants</h2>
                <div class="offers-slider-wrapper owl-carousel">
                    <div>
                        <a href="offers.html" class="deals-card indoor-offer text-right" style="background-image: url({{asset('images/green-plant.jpg')}});">
                            <span class="discount-rate">40%</span>
                            <p>On Indoor Plants</p>
                        </a>
                    </div>
                    <div>
                        <a href="offers.html" class="deals-card moneyplant-offer text-left" style="background-image: url({{asset('images/green-plant.jpg')}});">
                            <span class="discount-rate">20%</span>
                            <p>On Money Plant</p>
                        </a>
                    </div>
                    <div>
                        <a href="offers.html" class="deals-card bonsai-offer text-right" style="background-image: url({{asset('images/placement/bathroom/sarah-dorweiler.jpg')}});">
                            <span class="discount-rate">60%</span>
                            <p>On Bonsai Plant</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Offers on Plants -->

        <!-- start Latest Arrivals -->
        <section class="latest-plant-wrapper inner-wrapper">
            <div class="container">
                <h2>Latest Arrivals</h2>

                <div class="latest-plant-slider plants-slider owl-carousel">
                
                    {{-- @foreach ($plants as $plant)
                    <div class="latest-plant plant-card card">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="{{asset('images/indoor-plants/brina-blum.jpg')}}" alt="img" class="back-img">
                                <img src="{{asset('images/product')}}/{{$plant['image_url']}}" alt="img" class="front-img">
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
                            <h5 class="plant-name"><a href="product.html">{{$plant['name']}}</a></h5>
                            <input type="number" class="rating" value="3" data-readonly>
                        </div>
                        <div class="card-footer">
                            <div class="cm-flex-center mb-3">
                                <p class="plant-price">{{$plant['sp']}}</p>
                                <div>
                                    <span class="original-price">{{$plant['mrp']}}</span><span class="discount-rate">{{round(($plant['mrp']- $plant['sp'])*100/$plant['mrp']) }}% off</span>
                                </div>
                            </div>
                            <a href="#" class="button secondary-btn w-100"><i class="fas fa-heart"></i> <span class="pl-2">Add to Wishlist</span></a>
                        </div>
                    </div>
                    @endforeach --}}
                </div>

                <div class="text-center mt-3">
                    <a href="all-plants.html" class="button">View More</a>
                </div>

            </div>
        </section>
        <!-- end Latest Arrivals -->


        <!-- start deals of the day -->
        <section class="deals-wrapper inner-wrapper">
            <div class="container">
                <h2>Deals of the Day</h2>
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href='#' class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="{{asset('images/stages/sales-woman.png')}}" alt="discount">
                            <h3 class="discount-rate">40% Off</h3>
                            <p>On Indoor Plants</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href='#' class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="{{asset('images/stages/online-sales.png')}}" alt="discount">
                            <h3 class="discount-rate">60% Off</h3>
                            <p>On Bonsai Plants</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href='#' class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="{{asset('images/stages/sale-now.png')}}" alt="discount">
                            <h3 class="discount-rate">30% Off</h3>
                            <p>On Any Plants</p>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                        <a href='#' class="deals-card">
                            <div class="badge timer">00:00:00</div>
                            <img src="{{asset('images/stages/telesales-agent.png')}}" alt="discount">
                            <h3 class="discount-rate">30% Off</h3>
                            <p>On Office Desk Plants</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end deals of the day -->

         <!-- no heading -->
         <!-- <section class="hero-area-wrapper inner-wrapper d-none d-md-block">
            <div class="hero-area container">
                <h2>No Heading</h2>
                <div class="hero-slider-wrapper owl-carousel">

                    <div class="hero-slide">
                        <div class="hero-img">
                            <img src="assets/images/placement/office-desk/maarten-deckers.jpg" alt="plants">
                        </div>
                        <div class="hero-content">
                            <div class="mb-2 mb-sm-5">
                                <h2>Plants for Office Desk</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint perspiciatis explicabo est
                                    ex ad corporis
                                    laudantium
                                    minus cumque ipsam odit, reprehenderit, porro dolorem quod non eaque doloremque vero
                                    quaerat suscipit
                                    iusto
                                    illo. A
                                    soluta quis, aperiam corporis ullam sint aliquid vitae quaerat repellat saepe.</p>
                            </div>
                            <a href="#" class="button">View More</a>
                        </div>
                    </div>

                    <div class="hero-slide">
                        <div class="hero-img">
                            <img src="assets/images/placement/hanging/kevin-lessy.jpg" alt="plants">
                        </div>
                        <div class="hero-content">
                            <div class="mb-2 mb-sm-5">
                                <h2>Hanging Plants</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint perspiciatis explicabo est
                                    ex ad corporis
                                    laudantium
                                    minus cumque ipsam odit, reprehenderit, porro dolorem quod non eaque doloremque vero
                                    quaerat suscipit iusto
                                    illo. A
                                    soluta quis, aperiam corporis ullam sint aliquid vitae quaerat repellat saepe.</p>
                            </div>
                            <a href="#" class="button">View More</a>
                        </div>
                    </div>

                    <div class="hero-slide">
                        <div class="hero-img">
                            <img src="assets/images/placement/living-room/iulia.jpg" alt="plants">
                        </div>
                        <div class="hero-content">
                            <div class="mb-2 mb-sm-5">
                                <h2>Living Room Plant</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint perspiciatis explicabo est
                                    ex ad corporis
                                    laudantium
                                    minus cumque ipsam odit, reprehenderit, porro dolorem quod non eaque doloremque vero
                                    quaerat suscipit
                                    iusto illo. A
                                    soluta quis, aperiam corporis ullam sint aliquid vitae quaerat repellat saepe.</p>
                            </div>
                            <a href="#" class="button">View More</a>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <!-- no heading -->

        <!-- start featured Plants -->
        <section class="featured-plant-wrapper inner-wrapper">
            <div class="container">
                <h2>Featured Plants</h2>

                <div class="featured-plant-slider plants-slider owl-carousel">

                    <div class="featured-plant plant-card card">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="{{asset('images/indoor-plants/stephanie-harvey-.jpg')}}" alt="img" class="front-img">
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
                            <!-- <div class="cm-flex-center">
                                <a href="#" class="button secondary-border-btn w-50">Add to Wishlist</a>
                                <a href="#" class="button secondary-btn w-50">Add to Cart</a>
                            </div> -->
                        </div>
                    </div>

                    <div class="featured-plant plant-card card">
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

                    <div class="featured-plant plant-card card">
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

                    <div class="featured-plant plant-card card">
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

                    <div class="featured-plant plant-card card">
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

                    <div class="featured-plant plant-card card">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="{{asset('images/indoor-plants/stephanie-harvey.jpg')}}" alt="img" class="front-img">
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

                <div class="text-center mt-3">
                    <a href="all-plants.html" class="button">View More</a>
                </div>
            </div>
        </section>
        <!-- end featured Plants -->

        <!-- start testimonial -->
        <section class="inner-wrapper testmonial-section">
            <div class="container">
                <h2>What our buyer say</h2>
                <!-- testimonial slider -->
                <div class="owl-carousel testimonial_wrapper">

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Austin Wade</em></div>
                        </div>
                    </div>

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Luis Villasmil</em></div>
                        </div>
                    </div>

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Stefan Stefancik</em></div>
                        </div>
                    </div>
                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Luis Villasmil</em></div>
                        </div>
                    </div>

                    <div class="testimonial_content">
                        <div class="client-feedback">
                            <i class="fas fa-quote-left display-3 mb-3"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet
                                voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.
                                lobcaecati ea maiores totam nostrum.</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                            <div class="client-name"><em>Stefan Stefancik</em></div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- end testimonial -->

        <!-- start Blog -->
        <!-- <section class="blog-wrapper inner-wrapper">
            <div class="container">
                <h2>Blog</h2>
                <div class="row">

                    <div class="blog-post-wrapper col-md-4">
                        <div class="blog-post card">
                            <div class="featured-img card-image">
                                <a href="blog_post.html" title="blog"><img src="assets/images/type/terrariums/scott-webb.jpg" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content card-body">
                                <div class="tag">Terrariums</div>
                                <p class="blog-date">8th July 2020</p>
                                <h4>
                                    <a href="blog_post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                </h4>
                                <div class="blog-body">
                                    <p>Monocle ipsum dolor sit amet perfect discerning punctual Helsinki iconic Muji premium Baggu. Discerning sophisticated
                                    extraordinary iconic. Fast Lane Baggu Swiss</p>
                                    <a href="blog_post.html" title="read more" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-wrapper col-md-4">
                        <div class="blog-post card">
                            <div class="featured-img card-image">
                                <a href="blog_post.html" title="blog"><img src="assets/images/type/terrariums/scott-webb.jpg" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content card-body">
                                <div class="tag">Terrariums</div>
                                <p class="blog-date">8th July 2020</p>
                                <h4>
                                    <a href="blog_post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                </h4>
                                <div class="blog-body">
                                    <p>Monocle ipsum dolor sit amet perfect discerning punctual Helsinki iconic Muji premium Baggu. Discerning sophisticated
                                    extraordinary iconic. Fast Lane Baggu Swiss</p>
                                    <a href="blog_post.html" title="read more" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-wrapper col-md-4">
                        <div class="blog-post card">
                            <div class="featured-img card-image">
                                <a href="blog_post.html" title="blog"><img src="assets/images/type/terrariums/scott-webb.jpg" alt="Featured Image"></a>
                            </div>
                            <div class="blog-content card-body">
                                <div class="tag">Terrariums</div>
                                <p class="blog-date">8th July 2020</p>
                                <h4>
                                    <a href="blog_post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                </h4>
                                <div class="blog-body">
                                    <p>Monocle ipsum dolor sit amet perfect discerning punctual Helsinki iconic Muji premium Baggu. Discerning sophisticated
                                    extraordinary iconic. Fast Lane Baggu Swiss</p>
                                    <a href="blog_post.html" title="read more" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <!-- end Blog -->

        <!-- start newsletter -->
        <section class="inner-wrapper">
            <div class="container">
                <h2>Subscribe to our Newslatter</h2>
                <div class="w-75 m-auto w-sm-100">
                    <form class="newsletter-form">
                        <div class="form-group mb-0 d-flex">
                            <label for="newslatter" class="sr-only">Newsletter</label>
                            <input type="text" class="form-control" id="newslatter" placeholder="Your Email Address">
                            <button class="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- end newsletter -->

        <!-- start features -->
        <section class="light-bg">
            <div class="container">
                <div class="row text-center feature-area-wrapper">
                    <div class="col-md-3 col-6 inner-wrapper">
                        <div class="feature-area">
                            <span class="icon">
                                <i class="fab fa-pagelines"></i>
                            </span>
                            <h5><span class="plant-count">1,000</span>+ Plants Shipped</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 inner-wrapper">
                        <div class="feature-area">
                            <span class="icon">
                                <i class="fas fa-truck"></i>
                            </span>
                            <h5 class="section-heading">Cash on Delivery</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 inner-wrapper">
                        <div class="feature-area">
                            <span class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </span>
                            <h5 class="section-heading">Fast Delivery</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 inner-wrapper">
                        <div class="feature-area">
                            <span class="icon">
                                <i class="fas fa-headset"></i>
                            </span>
                            <h5 class="section-heading">24x7 Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end features -->
@endsection