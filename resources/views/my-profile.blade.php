@extends('layouts.app')
@section('title','My Profile - Plant Cafe')
@section('body-class','my-profile-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Profile</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<section class="inner-wrapper">
            <!-- start female greeting -->
            <div class="container">
                <div class="media tiles">
                    <img src="{{asset('images/avatar/female-avatar.png')}}" class="mr-3" alt="avatar">
                    <div class="media-body">
                        <p class="mb-0">Hello, </p>
                        <h5 class="mt-0">Jane Doe</h5>
                    </div>
                </div>
            </div>
            <!-- start female greeting -->

            <!-- start male greeting -->
            <!-- <div class="container">
                <div class="media">
                    <img src="assets/images/avatar/male-avatar.png" class="mr-3" alt="avatar">
                    <div class="media-body">
                        <p class="mb-0">Hello, </p>
                        <h5 class="mt-0">John Doe</h5>
                    </div>
                </div>
            </div> -->
            <!-- start male greeting -->

            <div class="container">
                
                <div class="tiles">
                    <div class="cm-flex-center mb-3">
                        <h5><i class="fas fa-user-shield mr-2"></i> Personal Information</h5>
                        <a href="#" class="edit-profile">Edit Profile</a>
                    </div>
                    <form id="personal-info-form" name="contactForm " novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input class="form-control" type="text" id="fname" placeholder="Enter First Name * " value="John" required disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input class="form-control" type="text" id="lname" placeholder="Enter Last Address* " value="Doe" required disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email-add">Email Address</label>
                                    <input class="form-control" type="email" id="email-add" placeholder="Enter Email Address* " value="johndoe@gmail.com" required disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phn-num">Phone Number</label>
                                    <input class="form-control" type="tel" id="phn-num" placeholder="Your Phone * " value="1234567890" required disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group radio-group">
                                    <label>Gender</label>
                                    <label for="radio-one">
                                        <input type="radio" name="check" name="gender" id="radio-one" disabled>
                                        <span class="radio-button"></span> Male
                                    </label>
                                    <label for="radio-two">
                                        <input type="radio" name="check" name="gender" id="radio-two" checked disabled>
                                        <span class="radio-button"></span> Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="button" style="display: none;">Save Changes</button>
                    </form>
                </div>

                <div class="tiles">
                    <h5 class="mb-3"><i class="fas fa-lock mr-2"></i> Change Password</h5>
                    <form id="change-password-form" name="contactForm " novalidate="novalidate">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpass">Current Password</label>
                                    <input class="form-control" type="password" id="cpass" placeholder="Type Current Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="npass">New Password</label>
                                    <input class="form-control" type="password" id="npass" placeholder="Type New Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="rpass">Re-Type New Password</label>
                                    <input class="form-control" type="password" id="rpass" placeholder="Retype New Password" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Your new password must:</h5>
                                <p class="mb-0">Be at least 4 characters in length</p>
                                <p class="mb-0">Not be same as your current password</p>
                                <p class="mb-0">Not contain common passwords.</p>
                            </div>
                        </div>
                        <button class="button">Change Password</button>
                    </form>
                </div>

            </div>
        </section> 
@endsection