@extends('layouts.app')
@section('title','Checkout - Plant Cafe')
@section('body-class','checkout-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<section class="inner-wrapper">
        <div class="container">
            <h2>Checkout</h2>
            
            <div class="row">

                <div class="col-md-8">

                    <!-- start if not login or guest -->
                    <!-- <div class="tiles">
                        <p>Already A Customer? <a href="#">Click here to Login</a></p>
                    </div>

                    <div class="tiles">
                        <h5 class="gray-text mb-3">Biiling Address</h5>
                        <form class="add-address-form" style="display: block;">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="a_name">Name</label>
                                        <input class="form-control" type="text" id="a_name" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phn-num">Phone Number</label>
                                        <input class="form-control" type="tel" id="phn-num" placeholder="Enter 10 digit Phone" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pincode">Pincode</label>
                                        <input class="form-control" type="number" id="pincode" placeholder="Pincode" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="locality">Locality</label>
                                        <input class="form-control" type="text" id="locality" placeholder="Locality" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address-line">Address</label>
                                        <textarea cols="30" rows="4" id="address-line" class="form-control" placeholder="Enter Address" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City/District/Town</label>
                                        <input class="form-control" type="text" id="city" placeholder="City/District/Town" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input class="form-control" type="text" id="state" placeholder="State" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="landmark">Landmark <span class="gray-text">(Optional)</span></label>
                                        <input class="form-control" type="text" id="landmark" placeholder="Landmark">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alter-num">Alternate Number <span class="gray-text">(Optional)</span></label>
                                        <input class="form-control" type="number" id="alter-num" placeholder="Alternate Number">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="button">Save Address</a>
                                <a href="#" class="button light-btn">Cancel</a>
                            </div>
                        </form>
                    </div> -->
                    <!-- end if not login or guest -->

                    <!-- start if already login -->
                    <div class="media tiles">
                        <img src="{{asset('images/avatar/female-avatar.png')}}" class="mr-3" alt="avatar">
                        <div class="media-body">
                            <p class="mb-0">Hello, </p>
                            <h5 class="mt-0">Jane Doe</h5>
                        </div>
                    </div>

                    <!-- billing address -->
                    <div class="tiles">
                        <div class="cm-flex-center gray-text slide-btn slide-open">
                            <h5 class="gray-text">Biiling Address</h5>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="slide-content">
                            <div class="form-group radio-group tiles mt-3">
                                <label for="address-one" class="address-label">
                                    <input type="radio" name="address" id="address-one">
                                    <span class="radio-button"></span> Primary Address
                                </label>
                                <div>
                                    <div class="address-details">
                                        <p class="mb-0"><strong>Jane Doe</strong></p>
                                        <p>Address line one, line two, locality, state, pincode, India</p>
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="edit-address button secondary-btn edit">Edit</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group radio-group tiles">
                                <label for="address-two" class="address-label">
                                    <input type="radio" name="address" id="address-two">
                                    <span class="radio-button"></span> Office Address
                                </label>
                                <div>
                                    <div class="address-details">
                                        <p class="mb-0"><strong>Jane Doe</strong></p>
                                        <p>Address line one, line two, locality, state, pincode, India</p>
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="edit-address button secondary-btn edit">Edit</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tiles">
                                <p class="mb-0 slide-btn"><a href="#" id="add-new-address" class="add add-new-address">Add New Address</a></p>
                                <form class="add-address-form pt-3 slide-content">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="a_name">Name</label>
                                                <input class="form-control" type="text" id="a_name" placeholder="Enter Name" required="" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phn-num">Phone Number</label>
                                                <input class="form-control" type="tel" id="phn-num" placeholder="Enter 10 digit Phone" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pincode">Pincode</label>
                                                <input class="form-control" type="number" id="pincode" placeholder="Pincode" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="locality">Locality</label>
                                                <input class="form-control" type="text" id="locality" placeholder="Locality" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="address-line">Address</label>
                                                <textarea cols="30" rows="4" id="address-line" class="form-control" placeholder="Enter Address" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City/District/Town</label>
                                                <input class="form-control" type="text" id="city" placeholder="City/District/Town" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input class="form-control" type="text" id="state" placeholder="State" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="landmark">Landmark <span class="gray-text">(Optional)</span></label>
                                                <input class="form-control" type="text" id="landmark" placeholder="Landmark">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="alter-num">Alternate Number <span class="gray-text">(Optional)</span></label>
                                                <input class="form-control" type="number" id="alter-num" placeholder="Alternate Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="button">Add Address</a>
                                        <a href="#" class="button light-btn">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- end if already login -->
                    
                    <!-- order summary -->
                    <div class="shopping-cart tiles">
                        <div class="cm-flex-center gray-text slide-btn slide-open">
                            <h5 class="gray-text">Order Summary</h5>
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

                                    <button class="remove-item danger-btn align-self-start" data-toggle="modal" data-target="#confirmMessage" title="Remove from cart"></button>
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

                    <!-- paymeny Method -->
                    <div class="tiles payment-method">
                        <div class="cm-flex-center gray-text slide-btn slide-open">
                            <h5 class="gray-text">Payment Method</h5>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="slide-content">
                            <div class="form-group radio-group tiles mt-3">
                                <label for="payment-one" class="payment-label">
                                    <input type="radio" name="payment" id="payment-one">
                                    <span class="radio-button"></span> 
                                    PayU
                                </label>
                            </div>

                            <div class="form-group radio-group tiles">
                                <label for="payment-two" class="payment-label">
                                    <input type="radio" name="payment" id="payment-two">
                                    <span class="radio-button"></span>
                                    Cash on Delivery
                                </label>
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
                            <p class="text-uppercase">$10</p>
                        </div>
                        <div class="cm-flex-center mb-3 border-top pt-3">
                            <p class="text-uppercase font-weight-bold">Total</p>
                            <p class="text-uppercase font-weight-bold" id="total-amount">$90</p>
                        </div>
                        <a href="#" class="button secondary-btn d-block">Pay Now</a>
                    </div>

                    <div>
                        <p class="policy">Safe and Secure Payments</p>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection