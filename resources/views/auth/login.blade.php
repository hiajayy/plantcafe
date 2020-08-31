@extends('layouts.app')
@section('title','Login - Plant Cafe')
@section('body-class','login-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('main')
<section class="inner-wrapper">
            <div class="container py-5 mt-5">
                <div class="col-md-8 m-auto">
                    <h2>Welcome to Plant Cafe</h2>
                    <!-- login form -->
                    <div class="form-container" id="login-form-wrapper">
                        <form id="login-form" class="mb-3">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username"
                                    placeholder="Enter User Name">
                                <div class="invalid-feedback">Username can't be empty.</div>
                                <!-- <div class="valid-feedback"></div> -->
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter password">
                                <div class="invalid-feedback">Password can't be empty.</div>
                                <!-- <div class="valid-feedback"></div> -->
                            </div>
                            <div class="form-group checkbox-group">
                                <label for="remember-me">
                                    <input type="checkbox" value="checkbox" class="custome-checkbox"
                                        id="remember-me">
                                    <span class="checkbox-button"></span> Remember Me
                                </label>
                            </div>
                            <button type="submit" class="button btn-block">Login</button>
                        </form>
                        <div class="text-center">
                            <p class="mb-0">Don't have an account? <button class="no-btn"
                                    data-name="signup">Sign Up</button></p>
                            <p class="mb-0"><button class="no-btn" data-name='forget-password'> Forget
                                    Password?</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection