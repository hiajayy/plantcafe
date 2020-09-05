@extends('layouts.auth')
@section('title','New Password - Plant Cafe')
@section('body-class','new-password-page')
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
                <div class="alert alert-danger" role="alert">
                    <p class="mb-0">New password and confirm password do not match.</p>
                </div>
                <h5>Change Password</h5>
                <form id="validate-password">
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password">
                        <div class="invalid-feedback"></div>
                        <!-- <div class="valid-feedback"></div> -->
                    </div>
                    <div class="form-group">
                        <label for="password2">Re-Enter Password</label>
                        <input type="password" class="form-control" id="password2" placeholder="Re-Enter Password">
                        <div class="invalid-feedback"></div>
                        <!-- <div class="valid-feedback"></div> -->
                    </div>
                    <h5>Your new password must:</h5>
                    <ul class='pl-3'>
                        <li>Be at least 8 characters in length</li>
                        <li>Not be same as your current password</li>
                        <li>Not contain common passwords.</li>
                    </ul>
                    <button type="submit" class="button btn-block">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection