@extends('layouts.app')
@section('title','FAQs - Plant Cafe')
@section('body-class','faqs-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
    <h2 class="title-page">FAQs</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
        <section class="inner-wrapper">
            <div class="container ">
            <h2>FAQs</h2>
                <div class="row ">
                    <div class="col-lg-12 ">
                        <div class="question-box">
                            <h5>Is it safe to use my debit/credit card?</h5>
                            <p>YES, shopping at Plant Cafe is 100% safe and secure. We are a CloudFlare Secured SSL certified site which gives maximum security to the users.</p>
                            <p>Plant Cafe is proud to use Payu(PayUMoney) online payment gateway for fast, easy and efficient secure payments. All major credit cards are accepted.</p>
                        </div>
                        <div class="question-box">
                            <h5>Is it safe to buy a live plant online?</h5>
                            <p>Of course! You need not to worry about this. There are three main reasons behind this…</p>
                            <ol class="pl-3">
                                <li>Our Awesome Delivery Staff : We deliver plants by ourselves to ensure your precious plants are delivered as quick and safe as possible. Currently we are delivering in Delhi NCR only.</li>
                                <li>Our Awesome Packaging: We use a technically designed packaging for delivering our lovely plants.</li>
                                <li>Experience Matters: We have been sending hundreds of plants everyday.</li>
                            </ol>
                        </div>
                        <div class="question-box">
                            <h5>What if your plant is dead in transit?</h5>
                            <p>Although this is very unlikely to happen as we are sending hundreds of plants every day in Delhi NCR. In case you feel the plant is dead, please contact our customer care team immediately in 24hrs and we will replace your plant to a new fresh one.</p>
                        </div>
                        <div class="question-box">
                            <h5>These glass vases are so delicate what if they are broken in transit?</h5>
                            <p>We have some special arrangements for the glass vases in our packaging. These vases are multi layered and well protected from any possible physical damages that could happen in transit.</p>
                        </div>
                        <div class="question-box">
                            <h5>I have no experience of having any kind of plants. How would I know how to take care of them?</h5>
                            <p>That is the beauty of the range of plants Plant Cafe have. You need not to be an expert to have these beautiful exotic plants. Just following the care instructions given to you with your plant carefully will be more than enough to take care of it. To know your plant better we suggest you to read the care instructions part of the plant.</p>
                        </div>
                        <div class="question-box">
                            <h5>Is there any guarantee or warranty on the plants?</h5>
                            <p>We warranty that our plants are healthy and true to name at the time you take possession of them. We are sure that you realize that plants, being perishable living organisms, can't live forever and do not come with any warranty from nature. However, Plant Cafe being a reputed brand provides a 24hrs replacement warranty if the plant received is damaged or the planter is broken at the time of receiving. Besides this we also provide a lifetime ‘After Sale Service’ about the care, placements and repotting of the plant through call or whatsApp.</p>
                        </div>
                        <div class="question-box">
                            <h5>How much are the shipping charges?</h5>
                            <p>The shipping charge is Rs 49 if your order is below Rs 999.</p>
                        </div>
                        <div class="question-box">
                            <h5>What do I do in case I receive a defective/damaged/different plant?</h5>
                            <p> In case you have received a defective/damaged/different product we would request you to contact us immediately to our customer care number +91 8700966094 or care@plantcafe.in and we will replace it to a new one not after 24hrs of receiving.</p>
                        </div>
                        <div class="question-box">
                            <h5>Can I return a product ordered from Plant Cafe?</h5>
                            <p>Sorry but you can’t return.</p>
                        </div>
                        <div class="question-box">
                            <h5>How do I check the current status of my orders?</h5>
                            <p>You can check the status of your order in your Order History under My Account with your order number.</p>
                        </div>
                        <div class="question-box">
                            <h5>When and how can I cancel an order?</h5>
                            <p>You can initiate the cancellation of your order only if your order status does not change to Under Process. Once your order is under process your order can not be canceled.</p>
                        </div>
                        <div class="question-box">
                            <h5>Do I need to pay anything at the time of delivery of the product?</h5>
                            <p>No. As all your payments have been done at time you order your plant except you have chosen the COD (cash on delivery) mode of payment. There will be no extra money you have to pay for the product you have ordered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection