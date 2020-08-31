@extends('layouts.app')
@section('title', 'Register - Plant cafe')
@section('body-class','sign-up-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('main')
    <section class="inner-wrapper">
            <div class="container py-5 mt-5">
                <div class="col-md-8 m-auto">
                    <h2>Welcome to Plant Cafe</h2>
                    <!-- sign up form -->
                    <div class="form-container" id="signup-form-wrapper">
                        <h5 class="mb-3">Create your account by filling the form fields below</h5>
                        <form id="signup-form" class="mb-3">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first-name">First Name</label>
                                        <input type="text" class="form-control" id="first-name"
                                            placeholder="Enter First Name">
                                        <div class="invalid-feedback">First Name can't be empty.</div>
                                        <!-- <div class="valid-feedback"></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" class="form-control" id="last-name"
                                            placeholder="Enter Last Name">
                                        <div class="invalid-feedback">Last Name can't be empty.</div>
                                        <!-- <div class="valid-feedback"></div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="signup-user">Username</label>
                                        <input type="text" class="form-control" id="signup-user"
                                            placeholder="Enter User Name">
                                        <div class="invalid-feedback">Username can't be empty.</div>
                                        <div class="valid-feedback"></div>
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter Email Address">
                                        <div class="invalid-feedback">Email Id can't be empty.</div>
                                        <!-- <div class="valid-feedback"></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone"
                                            placeholder="Enter Phone Number">
                                        <!-- <div class="invalid-feedback"></div> -->
                                        <!-- <div class="valid-feedback"></div> -->
                                    </div>
                                </div>
                                <div class="col-md-12">
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gen-pass">Password</label>
                                        <input type="password" class="form-control" id="gen-pass"
                                            placeholder="Enter Password">
                                        <div class="invalid-feedback">Password can't be empty.</div>
                                        <!-- <div class="valid-feedback"></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gen-pass-2">Confirm Password</label>
                                        <input type="password" class="form-control" id="gen-pass-2"
                                            placeholder="Confirm Password">
                                        <div class="invalid-feedback">Confirm Password can't be empty.</div>
                                        <!-- <div class="valid-feedback"></div> -->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button btn-block">Sign Up</button>
                        </form>
                        <div >
                            <p>I'm already a member. <button class="no-btn" data-name="login">
                                    Login</button></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection
