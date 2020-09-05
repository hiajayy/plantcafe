@extends('layouts.auth')
@section('title','Reset Password - Plant Cafe')
@section('body-class','password-validate-page')
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

            <!-- validate form -->
            <div class="form-container border p-3 bg-white" id="validate-form-wrapper">
                <div class="alert alert-success" role="alert">
                    <p class="mb-0">Validation Code has sent to your registered email address. Please enter it below.</p>
                </div>
                <h5>Please enter the Code to varify your account</h5>
                <form id="validate-password" class="mb-3">
                    <div class="form-group">
                        <label for="validate-code">Enter the verification code we just sent you on
                            your email address.</label>
                        <input type="text" class="form-control" id="validate-code"
                            placeholder="Enter 4 digit code">
                        <div class="invalid-feedback">Email can't be empty.</div>
                        <!-- <div class="valid-feedback"></div> -->
                    </div>
                    <button type="submit" class="button btn-block">Verify</button>
                </form>
                <div class='border-top mt-3 pt-3 text-center'>
                    <p class="mb-0">If you didn't receive a code. <button class="no-btn"> Resend</button></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection