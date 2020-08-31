@extends('layouts.app')
@section('title','FAQs - Plant Cafe')
@section('body-class','contact-us-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<section class="inner-wrapper">
            <div class="container ">
                <h2>Contact Us</h2>
                <div class="row ">
                    <div class="col-12">
                        <p>Did you know you can find answers to many <strong>Frequently Asked Questions(FAQs)</strong> <a href="/faqs" class="font-weight-bold">here</a></p>
                        <p>If your question is not answered, just fill out the form fields below</p>
                        <!-- <p>If you're not happy, we're not happy. We try to get everything right first time, but we know that sometimes things can go wrong. If this happens, please let us know so we can put it right.
                            We do our best to resolve problems as quickly as possible. We take every complaint seriously.
                            If you would like to contact us please use this <strong>Customer Complaint form </strong>.</p>
                        <p>Please use our <strong>feedback form</strong> to share your suggestions about the Plant Cafe.</p> -->
                    
                        <!-- <p>How can I help?</p> -->
                        <form id="contactForm" name="contactForm " novalidate="novalidate">
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select name="form-query" id="form-query">
                                        <!-- <option>Select</option> -->
                                        <option selected>I'd like to chat about..</option>
                                        <option>General Inquiry</option>
                                        <option>Complaint</option>
                                        <option>Feedback and Suggestions</option>
                                        <option>I've found a bug</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input class="form-control" type="text" id="name" placeholder="Enter Full Name * " required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="email" id="email" placeholder="Enter Email Address* " required>
                            </div>
                            <div class="form-group">
                                <label for="phn-num">Phone Number</label>
                                <input class="form-control" type="tel" id="phn-num" placeholder="Your Phone * " required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" id="message" placeholder="Your Message * " required></textarea>
                            </div>
                            <button class="btn text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="inner-wrapper light-bg">
            <div class="container">
                <div class="row text-center contact-icons">
                    <div class="col-sm-4">
                        <i class="fas fa-phone-alt"></i>
                        <p><a href="#">+91-9876543210</a></p>
                    </div>
                    <div class="col-sm-4">
                        <i class="far fa-envelope"></i>
                        <p><a href="#">info@plantcafe.com</a></p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection