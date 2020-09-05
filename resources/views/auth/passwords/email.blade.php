@extends('layouts.auth')
@section('title','Reset Password - Plant Cafe')
@section('body-class','forget-password-page')
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
            <!-- forget password form -->
            <div class="form-container border p-3 bg-white" id="forget-form-wrapper">
                <h5 class='mb-3'>Forget Password?</h5>
                <form id="forget-password" class="mb-3">
                    <div class="form-group">
                        <label for="reset-pass">Enter your email address below to reset password</label>
                        <input type="email" class="form-control" id="reset-pass"
                            placeholder="Enter Email Address">
                        <div class="invalid-feedback">Email can't be empty.</div>
                        <!-- <div class="valid-feedback"></div> -->
                    </div>
                    <button type="submit" class="button btn-block">Reset Password</button>
                </form>
                <div class="border-top mt-3 pt-3 text-center">
                    <p class="mb-0">Return to <a href='/login' class="no-btn"> Login</a></p>
                    <p class="mb-0"><a href='/register' class="no-btn">Create New Account</a></p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection