@extends('layouts.app')
@section('title','Home(Testing) - Plant Cafe')
@section('body-class','home-page')
@section('js')
    
<script src="{{asset('js/ui.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script>
        
        $.ajax({
            url : '/demo',
            method : 'get',
            dataType: 'html',
            beforeSend : function(){
                 $("#loader-ajax").show();
            },
            success : function(response){
                    $('main').html(response);
            },
            complete : function(){
                $("#loader-ajax").hide();
            }
        });
        
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <!-- owl carousel -->
    <script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
    <script src="{{asset('js/bootstrap4-rating-input.js')}}"></script>
@endsection
@section('main')
<!-- Image loader -->
<div id='loader-ajax' class='loader-ajax' style='display: none;'>
  {{-- <img src='{{asset('images/ajax-loader.gif')}}'> --}}
  <span class='outer-circle'></span>
  <span class='inner-circle'></span>
</div>
{{-- <div class="loader-wrapper" id='loader-ajax' style='display: none;'>
    <div class="loader">
    <img class="loading-img" src="{{asset('images/loading.gif')}}" alt="Loader">
    </div>
</div> --}}
{{-- <div id="testing">
</div> --}}
        
@endsection