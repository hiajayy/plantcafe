@extends('layouts.app')
@section('title','Product - Plant Cafe')
@section('body-class','product-page')
@section('css')
<link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
@endsection
@section('js')

<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/bootstrap4-rating-input.js')}}"></script>
<script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
<!-- lightbox -->
<script src="{{asset('js/lightgallery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script>
    document.querySelectorAll('.lightgallery').forEach(function(light){
        lightGallery(light);
    });
</script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
    <h2 class="title-page">Marisol Casben</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href='#'>Indoor Plants</a></li>
            <li class="breadcrumb-item active" aria-current="page">Marisol Casben</li>
        </ol>
    </div>
</nav>
@endsection

@section('main')
<section class="product-details-section">
    <!-- Start Product Details Top -->
    <div class="product-details-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-details-tab-content">
                        <!-- Start Small images -->
                        <ul class="nav product-small-images" id="nav-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-controls="img1" aria-selected="true">
                                <img src="{{asset('images/indoor-plants/marisol-casben.jpg')}}" alt="small-image">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="img2-tab" data-toggle="tab" href="#img2" role="tab" aria-controls="img2" aria-selected="false">
                                <img src="{{asset('images/indoor-plants/nagy-arnold.jpg')}}" alt="small-image">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="img3-tab" data-toggle="tab" href="#img3" role="tab" aria-controls="img3" aria-selected="false">
                                <img src="{{asset('images/indoor-plants/brina-blum.jpg')}}" alt="small-image">
                                </a>
                            </li>
                        </ul>
                            <!-- End Small images -->

                        <!-- Start Product big Images -->
                        <div class="product-images mb-3">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="img1" role="tabpanel" aria-labelledby="img1-tab">
                                    <img src="{{asset('images/indoor-plants/marisol-casben.jpg')}}" alt="full-image" class="zoom-image">
                                </div>
                                <div class="tab-pane fade" id="img2" role="tabpanel" aria-labelledby="img2-tab">
                                    <img src="{{asset('images/indoor-plants/nagy-arnold.jpg')}}" alt="full-image" class="zoom-image">
                                </div>
                                <div class="tab-pane fade" id="img3" role="tabpanel" aria-labelledby="img3-tab">
                                    <img src="{{asset('images/indoor-plants/brina-blum.jpg')}}" alt="full-image" class="zoom-image">
                                </div>
                            </div>
                        </div>
                        <!-- End Product Big Images -->

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- start product details -->
                    <div class="product-details-wrapper">
                        <h4>Marisol Casben</h4>
                        <!-- <p class='tag'>Indoor Plant</p> -->                        
                        <div class="d-flex">
                            <input type="number" class="rating" value="4" data-readonly>
                            <span class="gray-text ml-3">(100 Ratings)</span>
                        </div>
                        <div>
                            <span class="plant-price">$65</span>
                            <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                        </div>
                        <!-- <h5 class="mb-0">Short Description</h5> -->
                        <p class="product-info">Monocle ipsum dolor sit amet perfect discerning punctual
                            Helsinki iconic Muji premium Baggu. Discerning sophisticated
                            extraordinary iconic. Fast Lane Baggu Swiss carefully curated soft power
                            remarkable Boeing 787 efficient.</p>

                        <!-- <div>
                            <h5 class="mb-0">Available offers</h5>
                            <ul class="mb-3 pl-3">
                                <li>10% Instant Discount with Standard Chartered Credit Card EMI Transaction <a href="#">T&C</a></li>
                                <li>10% off* with Axis Bank Buzz Credit Card <a href="#">T&C</a></li>
                            </ul>
                        </div> -->

                        <div class="product-description">
                            <div class="stock-status">
                                <h5 class="mb-0">Availability: </h5>
                                <p>In Stock</p>
                            </div>
                            <div class="quantity-fleid mb-3 align-items-center">
                                <h5 class="m-0 mr-3">Quantity: </h5>
                                <div class="cm-flex-center">
                                    <a class="qnt-btn prev" href="#"></a>
                                    <input class="quantity-input" type="text" value="1">
                                    <a class="qnt-btn next" href="#"></a>
                                </div>
                            </div>
                            
                            <div class="check-delivery mb-3">
                                <form class="check-delivery-form">
                                    <h5 class="mb-1">Check Delivery:</h5>
                                    <div class="form-group mb-0 d-flex">
                                        <label for="check-delivery" class="sr-only">Check Delivery</label>
                                        <input type="number" class="form-control w-auto" id="check-delivery" placeholder="Enter Pincode">
                                        <a href="#" class="button gray">Check</a>
                                    </div>
                                </form>
                            </div>
                            <ul class="shopping-btn-group list-inline mb-3">
                                <li><a href="#" class="button d-block add-to-cart" id='add-to-cart'>Add to Cart</a></li>
                                <li><a href="#" class="button secondary-border-btn d-block"><i class="fas fa-heart mr-2"></i> Add to Wishlist</a></li>
                            </ul>
                            <div class='tiles d-none d-md-block'>
                                <img src="{{asset('images/icons8_potted_plant_48px_1.png')}}" alt="plant" class='pr-3 pot345'>
                                <a href='#' data-toggle="modal" data-target="#change-pot-wrapper">You want to change pot?</a>
                            </div>
                            <div class='tiles d-md-none'>
                                <img src="{{asset('images/icons8_potted_plant_48px_1.png')}}" alt="plant" class='pr-3 pot345'>
                                <a href='#' id='show-mob-pot'>You want to change pot?</a>
                            </div>
                            
                            <div class="mb-3">
                                <h5 class="mb-1">Categories:</h5>
                                <ul class="categ-list list-inline">
                                    <li><a href="#">Indoor Plants</a></li>
                                    <li><a href="#">Marisol Casben</a></li>
                                </ul>
                            </div>
                            <div class="share-option mb-3">
                                <h5 class="mb-1"><span>Share this:</span></h5>
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item "><a href="# " title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- end product details -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details Top -->
</section>

<!-- start decription -->
<section class="description-tab-wrapper d-none d-md-block">
    <div class="container">
        <div class='bg-white p-3 mb-3'>
            <ul class="nav" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="key-tab" data-toggle="tab" href="#key" role="tab" aria-controls="key" aria-selected="true">Key Features</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="descrip-tab" data-toggle="tab" href="#descrip" role="tab" aria-controls="descrip" aria-selected="false">Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="care-instruction-tab" data-toggle="tab" href="#care-instruction" role="tab" aria-controls="care-instruction" aria-selected="false">Care Instruction</a>
                </li>
            </ul>
            <div class="tab-content" id="description-content">
                <div class="tab-pane fade show active" id="key" role="tabpanel" aria-labelledby="key-tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero rem necessitatibus ab ex ducimus laboriosam quos recusandae, quo cupiditate dignissimos id vel, tempore voluptates nesciunt tenetur accusantium? Perspiciatis, ipsum ipsam.</p>
                    <ol class="pl-3">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore. Commodi, sit doloribus dolore porro corporis quis voluptatibus mollitia unde repudiandae, debitis distinctio cumque consectetur beatae facere veniam delectus alias itaque accusamus eius atque aut harum nobis inventore quasi.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore. Commodi, sit doloribus dolore porro corporis quis voluptatibus mollitia unde repudiandae, debitis distinctio cumque consectetur beatae facere veniam delectus alias itaque accusamus eius atque aut harum nobis inventore quasi.</li>
                    </ol>
                </div>

                <div class="tab-pane fade" id="descrip" role="tabpanel" aria-labelledby="descrip-tab">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam facere distinctio sed dicta quam quos et, possimus neque commodi quasi porro nulla optio, excepturi, labore ducimus laudantium eaque rerum sunt?</p>
                    <h5>Description</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem blanditiis corporis quaerat, iure, praesentium eveniet, a quis officiis modi assumenda nam iusto distinctio saepe! Minus molestias cum, voluptatum odit dolorum voluptatem fugit repellendus voluptates saepe quasi magni beatae eius quibusdam explicabo ab odio, accusantium fuga laborum ut! Inventore laudantium iure quasi fuga, nihil dolore, id neque soluta nulla ab laboriosam tempora saepe explicabo amet minus a cumque error eos quod eveniet repudiandae beatae voluptatibus obcaecati! Distinctio architecto delectus dolore, inventore illo vel reprehenderit aut nesciunt officia iste temporibus earum, aliquam mollitia, tempore amet voluptatibus asperiores ipsum fugit porro enim! Perspiciatis.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem blanditiis corporis quaerat, iure, praesentium eveniet, a quis officiis modi assumenda nam iusto distinctio saepe! Minus molestias cum, voluptatum odit dolorum voluptatem fugit repellendus voluptates saepe quasi magni beatae eius quibusdam explicabo ab odio, accusantium fuga laborum ut! Inventore laudantium iure quasi fuga, nihil dolore, id neque soluta nulla ab laboriosam tempora saepe explicabo amet minus a cumque error eos quod eveniet repudiandae beatae voluptatibus obcaecati! Distinctio architecto delectus dolore, inventore illo vel reprehenderit aut nesciunt officia iste temporibus earum, aliquam mollitia, tempore amet voluptatibus asperiores ipsum fugit porro enim! Perspiciatis.</p>
                    <h5>Standard Featured</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem blanditiis corporis
                        quaerat, iure, praesentium eveniet, a quis officiis modi assumenda nam iusto distinctio
                        saepe! Minus molestias cum, voluptatum odit dolorum voluptatem fugit repellendus
                        voluptates saepe quasi magni beatae eius quibusdam explicabo ab odio, accusantium fuga
                        laborum ut! Inventore laudantium iure quasi fuga, nihil dolore, id neque soluta nulla ab
                        laboriosam tempora saepe explicabo amet minus a cumque error eos quod eveniet
                        repudiandae beatae voluptatibus obcaecati! Distinctio architecto delectus dolore,
                        inventore illo vel reprehenderit aut nesciunt officia iste temporibus earum, aliquam
                        mollitia, tempore amet voluptatibus asperiores ipsum fugit porro enim! Perspiciatis.</p>
                </div>

                <div class="tab-pane fade" id="care-instruction" role="tabpanel" aria-labelledby="care-instruction-tab">
                    <div>
                        <h5>Do's</h5>
                        <ul>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                        </ul>
                        <h5>Don'ts</h5>
                        <ul>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end decription -->

<!-- start mobile decription -->
<section class="description-wrapper d-md-none">
    <div class="container">
        <div class="tiles">
            <div class="cm-flex-center gray-text slide-btn slide-open">
                <h5 class="gray-text">Key Features</h5>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="slide-key-features slide-content pt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero rem necessitatibus ab ex ducimus laboriosam quos recusandae, quo cupiditate dignissimos id vel, tempore voluptates nesciunt tenetur accusantium? Perspiciatis, ipsum ipsam.</p>
                <ol class="pl-3">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore. Commodi, sit doloribus dolore porro corporis quis voluptatibus mollitia unde repudiandae, debitis distinctio cumque consectetur beatae facere veniam delectus alias itaque accusamus eius atque aut harum nobis inventore quasi.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore. </li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsa ea commodi fugit dolorem officia dolores, similique quae eligendi, sit veniam doloremque quos. Nemo, incidunt dolore. Commodi, sit doloribus dolore porro corporis quis voluptatibus mollitia unde repudiandae, debitis distinctio cumque consectetur beatae facere veniam delectus alias itaque accusamus eius atque aut harum nobis inventore quasi.</li>
                </ol>
            </div>        
        </div>

        <div class="tiles">
            <div class="cm-flex-center gray-text slide-btn">
                <h5 class="gray-text">Description</h5>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="slide-description slide-content pt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam facere distinctio sed dicta quam quos et, possimus neque commodi quasi porro nulla optio, excepturi, labore ducimus laudantium eaque rerum sunt?</p>
                <h5>Description</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem blanditiis corporis quaerat, iure, praesentium eveniet, a quis officiis modi assumenda nam iusto distinctio saepe! Minus molestias cum, voluptatum odit dolorum voluptatem fugit repellendus voluptates saepe quasi magni beatae eius quibusdam explicabo ab odio, accusantium fuga laborum ut! Inventore laudantium iure quasi fuga, nihil dolore, id neque soluta nulla ab laboriosam tempora saepe explicabo amet minus a cumque error eos quod eveniet repudiandae beatae voluptatibus obcaecati! Distinctio architecto delectus dolore, inventore illo vel reprehenderit aut nesciunt officia iste temporibus earum, aliquam mollitia, tempore amet voluptatibus asperiores ipsum fugit porro enim! Perspiciatis.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem blanditiis corporis quaerat, iure, praesentium eveniet, a quis officiis modi assumenda nam iusto distinctio saepe! Minus molestias cum, voluptatum odit dolorum voluptatem fugit repellendus voluptates saepe quasi magni beatae eius quibusdam explicabo ab odio, accusantium fuga laborum ut! Inventore laudantium iure quasi fuga, nihil dolore, id neque soluta nulla ab laboriosam tempora saepe explicabo amet minus a cumque error eos quod eveniet repudiandae beatae voluptatibus obcaecati! Distinctio architecto delectus dolore, inventore illo vel reprehenderit aut nesciunt officia iste temporibus earum, aliquam mollitia, tempore amet voluptatibus asperiores ipsum fugit porro enim! Perspiciatis.</p>
                <h5>Standard Featured</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem blanditiis corporis
                    quaerat, iure, praesentium eveniet, a quis officiis modi assumenda nam iusto distinctio
                    saepe! Minus molestias cum, voluptatum odit dolorum voluptatem fugit repellendus
                    voluptates saepe quasi magni beatae eius quibusdam explicabo ab odio, accusantium fuga
                    laborum ut! Inventore laudantium iure quasi fuga, nihil dolore, id neque soluta nulla ab
                    laboriosam tempora saepe explicabo amet minus a cumque error eos quod eveniet
                    repudiandae beatae voluptatibus obcaecati! Distinctio architecto delectus dolore,
                    inventore illo vel reprehenderit aut nesciunt officia iste temporibus earum, aliquam
                    mollitia, tempore amet voluptatibus asperiores ipsum fugit porro enim! Perspiciatis.</p>
            </div>        
        </div>

        <div class="tiles">
            <div class="cm-flex-center gray-text slide-btn">
                <h5 class="gray-text">Care Instruction</h5>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="slide-care-instruction slide-content pt-3">
                <h5>Do's</h5>
                <ul>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                </ul>
                <h5>Don'ts</h5>
                <ul>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, similique?</li>
                </ul>
            </div>        
        </div>

    </div>
</section>
<!-- end mobile decription -->

<!-- start change pot -->
<!-- <section class="change-pot-wrapper inner-wrapper light-bg">
    <div class="container">
        <h2>Change Pot</h2>
        <div class="tiles pb-0 mw-100">
            <div class="cm-flex-center mb-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum soluta cum aperiam est illum veniam saepe deserunt eligendi exercitationem quis, tempora laborum, molestias sequi, possimus ut odit quia ratione laboriosam.</p>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="pot-card card border">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="{{asset('images/pots/pexels-kate-amos.jpg')}}" alt="img" class="front-img">
                            </a>
                        </div>
                        <div class="card-body pot_info">
                            <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                            <div class="cm-flex-center mb-3">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                            <a href="#" class="button gray w-100">Select Pot</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-lg-3">
                    <div class="pot-card card border">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="{{asset('images/pots/pexels-julia-kuzenkov.jpg')}}" alt="img" class="front-img">
                            </a>
                        </div>
                        <div class="card-body pot_info">
                            <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                            <div class="cm-flex-center mb-3">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                            <a href="#" class="button gray w-100">Select Pot</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pot-card card border">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="{{asset('images/pots/pexels-cottonbro-3.jpg')}}" alt="img" class="front-img">
                            </a>
                        </div>
                        <div class="card-body pot_info">
                            <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                            <div class="cm-flex-center mb-3">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                            <a href="#" class="button gray w-100">Select Pot</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pot-card card border">
                        <div class="card-image">
                            <a href="product.html">
                                <img src="{{asset('images/pots/pexels-cottonbro.jpg')}}" alt="img" class="front-img">
                            </a>
                        </div>
                        <div class="card-body pot_info">
                            <h5 class="pot-name"><a href="product.html">Flower Pot</a></h5>
                            <div class="cm-flex-center mb-3">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                            <a href="#" class="button gray w-100">Select Pot</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <a href="all-pots.html" class="button">Explore More Pots</a>
            </div>
        </div>
    </div>
</section> -->
<!-- end change pot -->

<!-- start product rating wrapper -->
<section class="product-rating-wrapper inner-wrapper">
    <div class="container">
        <div class="tiles">
            <div class="cm-flex-center">
                <h5>Ratings & Reviews</h5>  
                <p class="rating-btn"><a href="#" class="button secondary-btn">Rate This Product</a></p>
            </div>
            <div class="rating-content">
                <!-- <div class="rating-and-review-wrapper tiles mt-3">
                    <div class="review-wrapper">
                        <h5 class="mb-3">Not Allowed to review</h5>
                        <p class="mb-3">Sorry.! You're not allowed to review this product because you didn't buy this product yet on Plant Cafe.</p>
                        <a href="#" class="button">Continue Shopping</a>
                    </div>
                </div> -->

                <div class="rating-and-review-wrapper tiles mt-3">
                    <div class="rating-wrapper border-bottom pb-3 mb-3">
                        <h5 class="mb-3">Rate this Product</h5>
                        <div class="rating-input"><i class="fa fa-star-o" data-value="1"></i><i class="fa fa-star-o" data-value="2"></i><i class="fa fa-star-o" data-value="3"></i><i class="fa fa-star-o" data-value="4"></i><i class="fa fa-star-o" data-value="5"></i></div><input type="hidden" class="rating hidden" value="0">
                    </div>
                    <div class="review-wrapper">
                        <h5 class="mb-3">Review this Product</h5>
                        <form>
                            <div class="form-group">
                                <label for="title">Title <span class="gray-text">(Optional)</span></label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description <span class="gray-text">(Optional)</span></label>
                                <textarea cols="30" rows="4" id="description" class="form-control" placeholder="Enter Description of the Product"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="add-image">Add Image <span class="gray-text">(Optional)</span></label>
                                <input type="file" name="add-image" id="add-image" class="form-control-file">
                            </div>
                            <button type="submit" class="mr-1">Post Review</button>
                            <button class="light-btn">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="rating-wrapper tiles pb-0">
            <div class="rating-card">
                <div class="cm-flex-center mb-3">
                    <div class="media">
                        <span class="d-flex align-self-center mr-2">
                            <img src="{{asset('images/avatar/female-avatar.png')}}" alt="user">
                        </span>
                        <div class="media-body">
                            <h5>Excellent</h5>
                            <p class="gray-text">Jane Doe</p>
                        </div>
                    </div>
                    <span class="rating-val five">5</span>
                </div>
                <div class="rating-feedback">
                    PRO is better than previous version. It runs on android. Google play store is preinstalled.
                    The remote runs on bluetooth. Great viewing experience as it is true LED TV. HD channels looks awesome, while SD
                    channels does not looks good due to big screen size.
                    Sound is clear and loud enough, good for music as well.
                    Overall its a value for money product.
                    Delivered and installed on stipulated timelines by flipcart.
                </div>
                <ul class="list-unstyled lightgallery mt-3">
                    <li data-responsive="{{asset('images/testing.jpg')}}" 
                        data-src="{{asset('images/testing.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/testing.jpg')}}" alt="image">
                        </a>
                    </li>
                    <li data-responsive="{{asset('images/art-botanical-cactus.jpg')}}" 
                        data-src="{{asset('images/art-botanical-cactus.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/art-botanical-cactus.jpg')}}" alt="image">
                        </a>
                    </li>
                    <li data-responsive="{{asset('images/green-leaves.jpg')}}" 
                        data-src="{{asset('images/green-leaves.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/green-leaves.jpg')}}" alt="image">
                        </a>
                    </li>
                    </ul>
            </div>
        </div>

        <div class="rating-wrapper tiles pb-0">
            <div class="rating-card">
                <div class="cm-flex-center mb-3">
                    <div class="media">
                        <span class="d-flex align-self-center mr-2">
                            <img src="{{asset('images/avatar/female-avatar.png')}}" alt="user">
                        </span>
                        <div class="media-body">
                            <h5>Okay</h5>
                            <p class="gray-text">Jane Doe</p>
                        </div>
                    </div>
                    <span class="rating-val three">3</span>
                </div>
                <div class="rating-feedback">
                    PRO is better than previous version. It runs on android. Google play store is preinstalled.
                    The remote runs on bluetooth. Great viewing experience as it is true LED TV. HD channels looks awesome,
                    while SD
                    channels does not looks good due to big screen size.
                    Sound is clear and loud enough, good for music as well.
                    Overall its a value for money product.
                    Delivered and installed on stipulated timelines by flipcart.
                </div>
                <ul class="list-unstyled lightgallery mt-3">
                    <li data-responsive="{{asset('images/testing.jpg')}}" 
                        data-src="{{asset('images/testing.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/testing.jpg')}}" alt="image">
                        </a>
                    </li>
                    <li data-responsive="{{asset('images/art-botanical-cactus.jpg')}}" 
                        data-src="{{asset('images/art-botanical-cactus.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/art-botanical-cactus.jpg')}}" alt="image">
                        </a>
                    </li>
                    <li data-responsive="{{asset('images/green-leaves.jpg')}}" 
                        data-src="{{asset('images/green-leaves.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/green-leaves.jpg')}}" alt="image">
                        </a>
                    </li>
                    </ul>
            </div>
        </div>

        <div class="rating-wrapper tiles pb-0">
            <div class="rating-card">
                <div class="cm-flex-center mb-3">
                    <div class="media">
                        <span class="d-flex align-self-center mr-2">
                            <img src="{{asset('images/avatar/male-avatar.png')}}" alt="user">
                        </span>
                        <div class="media-body">
                            <h5>Very bad experience</h5>
                            <p class="gray-text">John Doe</p>
                        </div>
                    </div>
                    <span class="rating-val one">1</span>
                </div>
                <div class="rating-feedback">
                    PRO is better than previous version. It runs on android. Google play store is preinstalled.
                    The remote runs on bluetooth. Great viewing experience as it is true LED TV. HD channels looks awesome,
                    while SD
                    channels does not looks good due to big screen size.
                    Sound is clear and loud enough, good for music as well.
                    Overall its a value for money product.
                    Delivered and installed on stipulated timelines by flipcart.
                </div>
                <ul class="list-unstyled lightgallery mt-3">
                    <li data-responsive="{{asset('images/testing.jpg')}}" 
                        data-src="{{asset('images/testing.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/testing.jpg')}}" alt="image">
                        </a>
                    </li>
                    <li data-responsive="{{asset('images/art-botanical-cactus.jpg')}}" 
                        data-src="{{asset('images/art-botanical-cactus.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/art-botanical-cactus.jpg')}}" alt="image">
                        </a>
                    </li>
                    <li data-responsive="{{asset('images/green-leaves.jpg')}}" 
                        data-src="{{asset('images/green-leaves.jpg')}}">
                        <a href="">
                            <img class="img-responsive" src="{{asset('images/green-leaves.jpg')}}" alt="image">
                        </a>
                    </li>
                    </ul>
            </div>
        </div>
    

    </div>
</section>
<!-- end product rating wrapper -->

<!-- start similar Plants -->
<section class="similar-plant-wrapper inner-wrapper">
    <div class="container">
        <h2>More product related to this Item</h2>

        <div class="row">
            <div class="col-6 col-lg-3">
                <div class="plant-card card">
                    <div class="card-image">
                        <a href="product.html">
                            <img src="{{asset('images/indoor-plants/andre-gorham.jpg')}}" alt="img" class="front-img">
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
        </div>

    </div>
</section>
<!-- end similar Plants -->

<!-- start similar Plants -->
<section class="similar-plant-wrapper inner-wrapper">
    <div class="container">
        <h2>More Items to Explore</h2>

        <div class="row">
            <div class="col-6 col-lg-3">
                <div class="plant-card card">
                    <div class="card-image">
                        <a href="product.html">
                            <img src="{{asset('images/indoor-plants/andre-gorham.jpg')}}" alt="img" class="front-img">
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
        </div>

    </div>
</section>
<!-- end similar Plants -->


<!-- start desktop choose pot -->
<section class="change-pot-wrapper modal fade" id='change-pot-wrapper' tabindex="-1" role="dialog" aria-labelledby="form-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-100">
        <div class="container">
            <div class="change-pot-container modal-content col-lg-8 m-auto px-0">
                <div class="modal-header cm-flex-center">
                    <div class="close d-md-none"><i class="fas fa-chevron-left"></i></div>
                    <h5 class="modal-title mt-0" id="form-modal">Change Pot</h5>
                    <button type="button" class="close no-btn" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="change-pot-list">
                        <div class="form-group radio-group tiles">
                            <label for="pot-one" class="pot-label">
                                <input type="radio" name="pot" id="pot-one">
                                <span class="radio-button"></span> Flower Pot

                                <div class="pot-card card border">
                                <div class="card-image">
                                    <img src="{{asset('images/pots/pexels-cottonbro-2.jpg')}}" alt="img" class="front-img">
                                </div>
                                <div class="card-body pot_info">
                                    <div class="cm-flex-center">
                                        <p class="pot-price">$65</p>
                                        <div>
                                            <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </label>
                        </div>

                        <div class="form-group radio-group tiles">
                            <label for="pot-two" class="pot-label">
                                <input type="radio" name="pot" id="pot-two">
                                <span class="radio-button"></span> Planter

                                <div class="pot-card card border">
                                <div class="card-image">
                                    <img src="{{asset('images/pots/pexels-kate-amos.jpg')}}" alt="img" class="front-img">
                                </div>
                                <div class="card-body pot_info">
                                    <div class="cm-flex-center">
                                        <p class="pot-price">$65</p>
                                        <div>
                                            <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </label>
                        </div>

                        <div class="form-group radio-group tiles">
                            <label for="pot-three" class="pot-label">
                                <input type="radio" name="pot" id="pot-three">
                                <span class="radio-button"></span> Planterette

                                <div class="pot-card card border">
                                    <div class="card-image">
                                        <img src="{{asset('images/pots/pexels-retha-ferguson.jpg')}}" alt="img" class="front-img">
                                    </div>
                                    <div class="card-body pot_info">
                                        <div class="cm-flex-center">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="form-group radio-group tiles">
                            <label for="pot-four" class="pot-label">
                                <input type="radio" name="pot" id="pot-four">
                                <span class="radio-button"></span> Planterette

                                <div class="pot-card card border">
                                    <div class="card-image">
                                        <img src="{{asset('images/pots/pexels-daria-shevtsova.jpg')}}" alt="img" class="front-img">
                                    </div>
                                    <div class="card-body pot_info">
                                        <div class="cm-flex-center">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="form-group radio-group tiles">
                            <label for="pot-five" class="pot-label">
                                <input type="radio" name="pot" id="pot-five">
                                <span class="radio-button"></span> Flower Pot

                                <div class="pot-card card border">
                                <div class="card-image">
                                    <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="front-img">
                                </div>
                                <div class="card-body pot_info">
                                    <div class="cm-flex-center">
                                        <p class="pot-price">$65</p>
                                        <div>
                                            <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </label>
                        </div>

                        <div class="form-group radio-group tiles">
                            <label for="pot-six" class="pot-label">
                                <input type="radio" name="pot" id="pot-six">
                                <span class="radio-button"></span> Planter

                                <div class="pot-card card border">
                                <div class="card-image">
                                    <img src="{{asset('images/pots/pexels-rovelyn-camato.jpg')}}" alt="img" class="front-img">
                                </div>
                                <div class="card-body pot_info">
                                    <div class="cm-flex-center">
                                        <p class="pot-price">$65</p>
                                        <div>
                                            <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </label>
                        </div>

                        <div class="form-group radio-group tiles">
                            <label for="pot-seven" class="pot-label">
                                <input type="radio" name="pot" id="pot-seven">
                                <span class="radio-button"></span> Planterette

                                <div class="pot-card card border">
                                    <div class="card-image">
                                        <img src="{{asset('images/pots/pexels-lisa-fotios.jpg')}}" alt="img" class="front-img">
                                    </div>
                                    <div class="card-body pot_info">
                                        <div class="cm-flex-center">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="form-group radio-group tiles">
                            <label for="pot-eight" class="pot-label">
                                <input type="radio" name="pot" id="pot-eight">
                                <span class="radio-button"></span> Planterette

                                <div class="pot-card card border">
                                    <div class="card-image">
                                        <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="front-img">
                                    </div>
                                    <div class="card-body pot_info">
                                        <div class="cm-flex-center">
                                            <p class="pot-price">$65</p>
                                            <div>
                                                <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                    </div>
                </div>

                <div class='modal-footer'>
                    <div class='d-flex justify-content-end'>
                        <button class='button secondary-border-btn mr-3'>Skip</button>
                        <button class='button'>Change Pot</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end desktop choose pot -->


<!-- start mob choose pot -->
<section class="change-pot-wrapper mob-slideup mob-pot-changer">
    <div class="change-pot-container">
        <div class="slideup-head cm-flex-center d-md-none">
            <div class="close-slide"><i class="fas fa-chevron-left"></i></div>
            <h5 class="m-0"><strong>Change Pot</strong></h5>
            <div class="close-slide"><i class="fas fa-times"></i></div>
        </div>

        <div class="slideup-body">
            <div class="change-pot-list">
                <div class="form-group radio-group tiles">
                    <label for="pot-1" class="pot-label">
                        <input type="radio" name="pot" id="pot-1">
                        <span class="radio-button"></span> Flower Pot

                        <div class="pot-card card border">
                        <div class="card-image">
                            <img src="{{asset('images/pots/pexels-cottonbro-2.jpg')}}" alt="img" class="front-img">
                        </div>
                        <div class="card-body pot_info">
                            <div class="cm-flex-center">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </label>
                </div>

                <div class="form-group radio-group tiles">
                    <label for="pot-2" class="pot-label">
                        <input type="radio" name="pot" id="pot-2">
                        <span class="radio-button"></span> Planter

                        <div class="pot-card card border">
                        <div class="card-image">
                            <img src="{{asset('images/pots/pexels-kate-amos.jpg')}}" alt="img" class="front-img">
                        </div>
                        <div class="card-body pot_info">
                            <div class="cm-flex-center">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </label>
                </div>

                <div class="form-group radio-group tiles">
                    <label for="pot-3" class="pot-label">
                        <input type="radio" name="pot" id="pot-3">
                        <span class="radio-button"></span> Planterette

                        <div class="pot-card card border">
                            <div class="card-image">
                                <img src="{{asset('images/pots/pexels-retha-ferguson.jpg')}}" alt="img" class="front-img">
                            </div>
                            <div class="card-body pot_info">
                                <div class="cm-flex-center">
                                    <p class="pot-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group radio-group tiles">
                    <label for="pot-4" class="pot-label">
                        <input type="radio" name="pot" id="pot-4">
                        <span class="radio-button"></span> Planterette

                        <div class="pot-card card border">
                            <div class="card-image">
                                <img src="{{asset('images/pots/pexels-daria-shevtsova.jpg')}}" alt="img" class="front-img">
                            </div>
                            <div class="card-body pot_info">
                                <div class="cm-flex-center">
                                    <p class="pot-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group radio-group tiles">
                    <label for="pot-5" class="pot-label">
                        <input type="radio" name="pot" id="pot-5">
                        <span class="radio-button"></span> Flower Pot

                        <div class="pot-card card border">
                        <div class="card-image">
                            <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="front-img">
                        </div>
                        <div class="card-body pot_info">
                            <div class="cm-flex-center">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </label>
                </div>

                <div class="form-group radio-group tiles">
                    <label for="pot-6" class="pot-label">
                        <input type="radio" name="pot" id="pot-6">
                        <span class="radio-button"></span> Planter

                        <div class="pot-card card border">
                        <div class="card-image">
                            <img src="{{asset('images/pots/pexels-rovelyn-camato.jpg')}}" alt="img" class="front-img">
                        </div>
                        <div class="card-body pot_info">
                            <div class="cm-flex-center">
                                <p class="pot-price">$65</p>
                                <div>
                                    <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </label>
                </div>

                <div class="form-group radio-group tiles">
                    <label for="pot-7" class="pot-label">
                        <input type="radio" name="pot" id="pot-7">
                        <span class="radio-button"></span> Planterette

                        <div class="pot-card card border">
                            <div class="card-image">
                                <img src="{{asset('images/pots/pexels-lisa-fotios.jpg')}}" alt="img" class="front-img">
                            </div>
                            <div class="card-body pot_info">
                                <div class="cm-flex-center">
                                    <p class="pot-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="form-group radio-group tiles">
                    <label for="pot-8" class="pot-label">
                        <input type="radio" name="pot" id="pot-8">
                        <span class="radio-button"></span> Planterette

                        <div class="pot-card card border">
                            <div class="card-image">
                                <img src="{{asset('images/pots/pexels-cottonbro-1.jpg')}}" alt="img" class="front-img">
                            </div>
                            <div class="card-body pot_info">
                                <div class="cm-flex-center">
                                    <p class="pot-price">$65</p>
                                    <div>
                                        <span class="original-price">$80</span><span class="discount-rate">70% off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

            </div>
        </div>

        <div class='slideup-footer'>
            <div class='d-flex justify-content-end'>
                <button class='button secondary-border-btn mr-3'>Skip</button>
                <button class='button'>Change Pot</button>
            </div>
        </div>
    </div>
</section>
<!-- end mob choose pot -->

@endsection