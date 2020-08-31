@extends('layouts.app')
@section('title','Reset Password - Plant Cafe')
@section('body-class','password-validate-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('main')
<section class="inner-wrapper">
            <div class="container py-5 mt-5">
                <div class="col-md-8 m-auto">
                    <h2>Please enter the Code to varify your account</h2>

                    <div class="alert alert-success" role="alert">
                      <p class="mb-0">Validation Code has sent to your registered email address. Please enter it below.</p>
                    </div>

                    <!-- validate form -->
                    <div class="form-container" id="validate-form-wrapper">
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
                        <div class="text-center">
                            <p class="mb-0">If you didn't receive a code, <button class="no-btn"
                                    data-name="resend"> Resend</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection