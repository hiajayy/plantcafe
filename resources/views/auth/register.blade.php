@extends('layouts.auth')
@section('title', 'Register - Plant cafe')
@section('body-class','sign-up-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('main')
    <section class="inner-wrapper">
        <div class="container">
            <div class="col-md-6 m-auto">
                <h2 class='sr-only'>Welcome to Plant Cafe</h2>
                <p class='text-center'><img src="{{asset('images/plantcafe.png')}}" alt="Plant Cafe" class='w-50 d-inline-block'></p>
                <!-- sign up form -->
                <div class="form-container border p-3 bg-white" id="signup-form-wrapper">
                    <h5 class="mb-3">Create your account by filling the form fields below</h5>
                    <form id="signup-form" class="mb-3">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" id="first-name"
                                placeholder="Enter First Name">
                            <div class="invalid-feedback">First Name can't be empty.</div>
                            <!-- <div class="valid-feedback"></div> -->
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name"
                                placeholder="Enter Last Name">
                            <div class="invalid-feedback">Last Name can't be empty.</div>
                            <!-- <div class="valid-feedback"></div> -->
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Enter Email Address">
                            <div class="invalid-feedback">Email Id can't be empty.</div>
                            <!-- <div class="valid-feedback"></div> -->
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone"
                                placeholder="Enter Phone Number">
                            <!-- <div class="invalid-feedback"></div> -->
                            <!-- <div class="valid-feedback"></div> -->
                        </div>
                        <div class="form-group radio-group">
                            <label>Gender</label>
                            <label for="radio-one">
                                <input type="radio" name="check" id="radio-one">
                                <span class="radio-button"></span> Male
                            </label>
                            <label for="radio-two">
                                <input type="radio" name="check" id="radio-two">
                                <span class="radio-button"></span> Female
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="gen-pass">Password</label>
                            <input type="password" class="form-control" id="gen-pass"
                                placeholder="Enter Password">
                            <div class="invalid-feedback">Password can't be empty.</div>
                            <!-- <div class="valid-feedback"></div> -->
                        </div>
                        <h5>Your new password must:</h5>
                        <ul class='pl-3'>
                            <li>Be at least 8 characters in length</li>
                            <li>Not contain common passwords.</li>
                        </ul>
                        <div class="form-group">
                            <label for="gen-pass-2">Confirm Password</label>
                            <input type="password" class="form-control" id="gen-pass-2"
                                placeholder="Confirm Password">
                            <div class="invalid-feedback">Confirm Password can't be empty.</div>
                            <!-- <div class="valid-feedback"></div> -->
                        </div>
                        <button type="submit" class="button btn-block">Register</button>
                        <div class='mt-3'>
                        <p class='gray-text'>By clicking register, you agree to our <a href="/terms-and-conditions" title='Terms & Conditions'>Terms & Conditions</a> and <a href="/privacy-policy" title='Privacy Policy'>Privacy Policy.</a></p>
                        </div>
                    </form>
                    <div class='border-top mt-3 pt-3 text-center'>
                        <p class='mb-0'>I'm already a member. <a href='/login' class="no-btn"> Login</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
