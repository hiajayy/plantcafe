@extends('layouts.app')
@section('title','Notifications - Plant Cafe')
@section('body-class','notifications-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
    <h2 class="title-page">Notification(s)</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Notification(s)</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
<!-- start no notification state -->
         <!-- <section class="inner-wrapper">
            <div class="container">
                <h2>My Notifications</h2>
                <div class="text-center">
                    <img src="assets/images/stages/empty_inbox_.png" alt="empty" class="stage-image">
                    <h4>No Notification</h4>
                    <p>Add Plants to it now.</p>
                    <a href="index.html" title="home" class="button">Start Browsing</a>
                </div>
            </div>
        </section> -->
        <!-- end no notification state -->

        <section class="inner-wrapper">
            <div class="container ">
                <h2>Notification(s)</h2>
                <div class="row ">
                    <div class="col-12 ">
                        <div class="tiles">
                            <h5>Plant name Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, dignissimos!</h5>
                            <p>Status: <span class="text-success">Delivered</span>.</p>
                            <p class="gray-text mt-2 small">10 Aug, 2020</p>
                        </div>
                        <div class="tiles">
                            <h5>Plant name Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, dignissimos!</h5>
                            <p>Status: <span class="text-secondary">On the Way</span>.</p>
                            <p class="gray-text mt-2 small">09 Aug, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection