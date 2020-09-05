@extends('layouts.auth')
@section('title','Login - Plant Cafe')
@section('body-class','login-page')
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
            <!-- login form -->
            <div class="form-container border p-3 bg-white" id="login-form-wrapper">
                <form id="login-form-2" class="mb-3">
                    <h5 class='mb-3'>Login</h5>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                        <div class="invalid-feedback">Email can't be empty.</div>
                        <!-- <div class="valid-feedback"></div> -->
                    </div>
                    <div class="form-group">
                        <label for="password2">Password</label>
                        <input type="password" class="form-control" id="password2" placeholder="Enter password">
                        <div class="invalid-feedback">Password can't be empty.</div>
                        <!-- <div class="valid-feedback"></div> -->
                    </div>
                    <div class="form-group checkbox-group">
                        <label for="remember-me-2">
                            <input type="checkbox" value="checkbox" class="custome-checkbox" id="remember-me-2">
                            <span class="checkbox-button"></span> Remember Me
                        </label>
                    </div>
                    <button type="submit" class="button btn-block">Login</button>
                    <div class='mt-3'>
                    <p class='gray-text'>By clicking login, you agree to our <a href="/terms-and-conditions" title='Terms & Conditions'>Terms & Conditions</a> and <a href="/privacy-policy" title='Privacy Policy'>Privacy Policy.</a></p>
                    </div>
                </form>
                <div class='border-top mt-3 pt-3 text-center'>
                    <p class="mb-0">Don't have an account? <a href='/register'>New Register</a></p>
                    <p class="mb-0"><a href='/password/reset'> Forget Password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection