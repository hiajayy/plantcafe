@extends('layouts.app')
@section('title','FAQs - Plant Cafe')
@section('body-class','delivery-information-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shipping & Delivery Policy</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<section class="inner-wrapper">
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-12 ">
                        <h5>Shipping & Delivery Policy (Products)</h5>
                        <p>For Delhi NCR buyers, orders are shipped through our delivery staff.</p>
                        <p>Currently we do not ship Plant Cafe products out of Delhi NCR.</p>
                        <p>Orders are shipped within 5-7 working days or as per the delivery date agreed at the time of order confirmation and delivering of the shipment subject to our delivery staff norms.</p>
                        <p>Delivery of all orders will be to the delivery address given by the buyer at the time of placing orders.</p>
                        <hr>
                        <h5>Payments</h5>
                        <p>Plant Cafe is proud to use Payu(PayUMoney) online payment gateway for fast, easy and efficient secure payments. All major credit cards are accepted.</p>
                        <hr>
                        <h5>Shipping & Delivery Policy (Services)</h5>
                        <p>How the delivery charge is calculated for multiple units and some products.</p>
                        <p>For Delhi NCR customers, the shipping charge is Rs 49 if your order is below Rs 999.</p>
                        <p>Currently we do not ship products out of Delhi NCR.</p>
                        <p>* No Deliveries on National Holidays.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection