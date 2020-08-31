@extends('layouts.app')
@section('title','Reset Password - Plant Cafe')
@section('body-class','forget-password-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('main')
<section class="inner-wrapper">
            <div class="container py-5 mt-5">
                <div class="col-md-8 m-auto">
                    <h2>Forget Password?</h2>
                    <!-- forget password form -->
                    <div class="form-container" id="forget-form-wrapper">
                        <form id="forget-password" class="mb-3">
                            <div class="form-group">
                                <label for="reset-pass">Enter your email address below to reset
                                    password</label>
                                <input type="email" class="form-control" id="reset-pass"
                                    placeholder="Enter Email Address">
                                <div class="invalid-feedback">Email can't be empty.</div>
                                <!-- <div class="valid-feedback"></div> -->
                            </div>
                            <button type="submit" class="button btn-block">Reset Password</button>
                        </form>
                        <div class="text-center">
                            <p class="mb-0">Return to <button class="no-btn" data-name="login">
                                    Login</button></p>
                            <p class="mb-0"><button class="no-btn" data-name="signup">Create New
                                    Account</button></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection