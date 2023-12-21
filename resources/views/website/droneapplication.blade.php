@extends('website.layouts.app')
@section('title')
    About
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')


 <div class="row text-center justify-content-center" style="margin-top: 15px;">
            <div class="col-md-10">
                <h1 class=" text-uppercase text-primary">DRONE APPLICATION</h1>

            </div>
        </div>

<div class="container my-5">
   <div class="card box-shadow-1 mb-2">
    <div class="card-body">
     <div style="background-image:url('{{asset('website/images/background_city _image.png')}}');background-repeat: no-repeat;
        background-size: cover;background-color: #fff;">
        <div class="container index-section-1" style="max-width: 1050px;padding: 50px 0;">
            <div class="col-md-12  text-center font-weight-bold text-primary" style="margin-bottom: 100px;">
                <h4 class="font-weight-bold text-primary">THE POSSIBILITIES ARE ENDLESS</h4>
                <p class="text-secondary">Make your career across in various domains</p>
            </div>
            
            <div class="row">
            <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/Industrial_city.png')}}">
                    <div class="index-pos-text-right">CINEMATOGRAPHY</div>
                    <div class="index-pos-border-right" style="margin-right:45px; width:70%;"></div>

                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown-3.png')}}" style="float: right;">
                    <div class="index-pos-text-left">SURVEY AND MAPPING</div>
                    <div class="index-pos-border-left" style="margin-left:45px; width:70%;"></div>
                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown.png')}}">
                    <div class="index-pos-text-right">POWERLINE AND SOLAR INSPECTION</div>
                    <div class="index-pos-border-right" style="margin-right:45px; width:70%;"></div>
                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown-1.png')}}" style="float: right;">
                    <div class="index-pos-text-left">FIRE SAFETY</div>
                    <div class="index-pos-border-left" style="margin-left:45px; width:70%;"></div>
                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown-2.png')}}">
                    <div class="index-pos-text-right">PUBLIC SAFETY</div>
                    <div class="index-pos-border-right" style="margin-right:45px; width:70%;"></div>
                </div>
            </div>
            
            
        </div>
    </div>
    </div>
    </div>
    </div> 




   @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection