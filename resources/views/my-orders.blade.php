@extends('layouts.app')
@section('title','My Orders - Plant Cafe')
@section('body-class','my-orders-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Orders</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<!-- start no order state -->
        <!-- <section class="inner-wrapper">
            <div class="container">
                <h2>My Orders</h2>
                <div class="text-center">
                    <img src="assets/images/stages/shopping_cart.png" alt="shoping-cart" class="stage-image">
                    <h4>No Orders</h4>
                    <p>Choose plant to purchase an order</p>
                    <a href="index.html" title="home" class="button">Start Browsing</a>
                </div>
            </div>
        </section> -->
        <!-- end no order state -->

        <section class="inner-wrapper">
            <div class="container">
                <h2>My Orders</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="tiles">
                            <div class="media">
                                <a class="d-flex align-self-bottom" href="ordered-product.html">
                                        <img src="{{asset('images/placement/bathroom/alex-loup.jpg')}}" alt="plant">
                                </a>
                                <div class="media-body">
                                    <p class="font-weight-bold"><a href="ordered-product.html">Plant Name Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ducimus.</a></p>
                                    <p>$65</p>
                                    <p class="gray-text">Delivered on 10th Aug</p>
                                </div>
                                <div class="text-md-right rating-btn">
                                    <a href="#">Rating and Review</a>
                                </div>
                            </div>
                            <div class="rating-and-review-wrapper tiles rating-content">
                                <div class="rating-wrapper border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">Rate this Product</h5>
                                    <input type="number" class="rating" value="0">
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

                        <div class="tiles">
                            <div class="media">
                                <a class="d-flex align-self-bottom" href="/ordered-product">
                                    <img src="{{asset('images/placement/bathroom/good-soul-shop.jpg')}}" alt="plant">
                                </a>
                                <div class="media-body">
                                    <p class="font-weight-bold"><a href="/ordered-product">Plant Name Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ducimus.</a></p>
                                    <p>$65</p>
                                    <p class="gray-text">Delivered on 10th Aug</p>
                                    <input type="number" class="rating" value="4">
                                </div>
                                <div class="rating-btn edit-rating-btn text-md-right">
                                    <a href="#" class="gray-text">Edit Review</a>
                                </div>
                            </div>
                            <div class="rating-and-review-wrapper tiles rating-content">
                                <div class="rating-wrapper border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">Rate this Product</h5>
                                    <input type="number" class="rating" value="4">
                                </div>
                                <div class="review-wrapper">
                                    <h5 class="mb-3">Review this Product</h5>
                                    <form>
                                        <div class="form-group">
                                            <label for="title2">Title <span class="gray-text">(Optional)</span></label>
                                            <input type="text" name="title" id="title2" class="form-control" placeholder="Enter Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="description2">Description <span class="gray-text">(Optional)</span></label>
                                            <textarea cols="30" rows="4" id="description2" class="form-control" placeholder="Enter Description of the Product"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-image2">Add Image <span class="gray-text">(Optional)</span></label>
                                            <input type="file" name="add-image" id="add-image2" class="form-control-file">
                                        </div>
                                        <button type="submit" class="mr-1">Post Review</button>
                                        <button class="light-btn">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tiles">
                            <div class="media">
                                <a class="d-flex align-self-bottom" href="ordered-product.html">
                                    <img src="{{asset('images/placement/bathroom/simon-godfrey.jpg')}}" alt="plant">
                                </a>
                                <div class="media-body">
                                    <p class="font-weight-bold"><a href="ordered-product.html">Plant Name Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ducimus.</a></p>
                                    <p>$65</p>
                                    <p class="gray-text">Delivered on 10th Aug</p>
                                    <input type="number" class="rating" value="3">
                                </div>
                                <div class="rating-btn edit-rating-btn text-md-right">
                                    <a href="#" class="gray-text">Edit Review</a>
                                </div>
                            </div>
                            <div class="rating-and-review-wrapper tiles rating-content">
                                <div class="rating-wrapper border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">Rate this Product</h5>
                                    <input type="number" class="rating" value="4">
                                </div>
                                <div class="review-wrapper">
                                    <h5 class="mb-3">Review this Product</h5>
                                    <form>
                                        <div class="form-group">
                                            <label for="title3">Title <span class="gray-text">(Optional)</span></label>
                                            <input type="text" name="title" id="title3" class="form-control" placeholder="Enter Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="description3">Description <span class="gray-text">(Optional)</span></label>
                                            <textarea cols="30" rows="4" id="description3" class="form-control" placeholder="Enter Description of the Product"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="add-image3">Add Image <span class="gray-text">(Optional)</span></label>
                                            <input type="file" name="add-image" id="add-image3" class="form-control-file">
                                        </div>
                                        <button type="submit" class="mr-1">Post Review</button>
                                        <button class="light-btn">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tiles">
                            <div class="media">
                                <a class="d-flex align-self-bottom" href="product.html">
                                    <img src="{{asset('images/placement/bathroom/curology-gipn7g.jpg')}}" alt="plant">
                                </a>
                                <div class="media-body row">
                                    <div class="col-md-8">
                                        <p class="font-weight-bold"><a href="#">Plant Name Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ducimus.</a></p>
                                        <p class="gray-text">Cancelled Product</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
@endsection