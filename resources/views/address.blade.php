@extends('layouts.app')
@section('title','Address - Plant Cafe')
@section('body-class','address-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Address</li>
            </ol>
        </div>
</nav>
@endsection
@section('main')
        <section class="inner-wrapper">
            <div class="container ">
                <h2>Address</h2>
                <div class="tiles">
                    <p class="mb-0 slide-btn"><a href="#" id="add-new-address" class="add add-new-address">Add New Address</a></p>
                    <form class="add-address-form pt-3 slide-content">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="a_name">Name</label>
                                    <input class="form-control" type="text" id="a_name" placeholder="Enter Name" required="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phn-num">Phone Number</label>
                                    <input class="form-control" type="tel" id="phn-num" placeholder="Enter 10 digit Phone" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pincode">Pincode</label>
                                    <input class="form-control" type="number" id="pincode" placeholder="Pincode" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="locality">Locality</label>
                                    <input class="form-control" type="text" id="locality" placeholder="Locality" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address-line">Address</label>
                                    <textarea cols="30" rows="4" id="address-line" class="form-control" placeholder="Enter Address" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City/District/Town</label>
                                    <input class="form-control" type="text" id="city" placeholder="City/District/Town" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input class="form-control" type="text" id="state" placeholder="State" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="landmark">Landmark <span class="gray-text">(Optional)</span></label>
                                    <input class="form-control" type="text" id="landmark" placeholder="Landmark">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alter-num">Alternate Number <span class="gray-text">(Optional)</span></label>
                                    <input class="form-control" type="number" id="alter-num" placeholder="Alternate Number">
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="button">Add Address</a>
                            <a href="#" class="button light-btn">Cancel</a>
                        </div>
                    </form>
                </div>
                <div class="row ">
                    <div class="col-lg-12 ">
                        <div class="tiles">
                            <p class="gray-text">Primary Address</p>
                            <div class="address-details">
                                <p class="mb-0"><strong>Jane Doe</strong></p>
                                <p>Address line one, line two, locality, state, pincode, India</p>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="edit-address button secondary-btn edit">Edit</a>
                                <!-- <i class="fas fa-trash btn text-danger delete" data-toggle="modal" data-target="#confirmMessage"></i> -->
                                <a href="#" class="delete button danger-btn remove-item" data-toggle="modal" data-target="#confirmMessage">Delete</a>
                            </div>
                        </div>
                        <div class="tiles">
                            <p class="gray-text">Office Address</p>
                            <div class="address-details">
                                <p class="mb-0"><strong>Jane Doe</strong></p>
                                <p>Address line one, line two, locality, state, pincode, India</p>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="edit-address button secondary-btn edit">Edit</a>
                                <a href="#" class="delete button danger-btn remove-item" data-toggle="modal" data-target="#confirmMessage">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection