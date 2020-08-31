@extends('layouts.app')
@section('title','Cancellation and Return - Plant Cafe')
@section('body-class','order-and-returns-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cancellation and Return</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<section class="inner-wrapper">
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-12 ">
                        <h5>Cancellation Policy</h5>
                        <p>Plant Cafe believes in helping its customers as far as possible and has, therefore, a liberal cancellation policy. Under this policy:</p>
                        <p>Cancellations will be considered only if the request is made within 24 hours of placing an order. However, the cancellation request will not be entertained once your order is under process your order can not be canceled.</p>
                        <p>There is no cancellation of orders placed under the Same Day Delivery category.</p>
                        <p>In case you have received a defective/damaged/different product we would request you to contact us immediately to our customer care number +91 8700966094 or care@plantcafe.in and we will replace it to a new one not after 24hrs of receiving.</p>
                        <p>In case you feel that the product received is not as shown on the site or as per your expectations, you must bring it to the notice of our customer service within 24 hours of receiving the product. The Customer Service Team after looking into your complaint will take an appropriate decision.</p>
                        <hr>
                        <h5>Refund Policy</h5>
                        <p>Orders delivered & accepted by the customer cannot be refunded. In case you feel the order is not as per specification, please contact our customer care team immediately in 24hrs.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection