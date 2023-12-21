@extends('website.layouts.app') @section('title') Event Seaarch @endsection @section('header') @include('website.layouts.header') @endsection @section('content') @include('website.style') @section('content') @inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
        box-sizing: border-box;
    }
    
    body {
        font-family: Verdana, sans-serif;
    }
    
    .mySlides {
        display: none;
    }
    
    img {
        vertical-align: middle;
    }
    /* Slideshow container */
    
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }
    /* Caption text */
    
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
    /* Number text (1/3 etc) */
    
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    /* The dots/bullets/indicators */
    
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    
    .active {
        background-color: #717171;
    }
    /* Fading animation */
    
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }
    
    @-webkit-keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }
    
    @keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }
    /* On smaller screens, decrease text size */
    
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }
</style>
<div class="row text-center justify-content-center" style="margin-top: 15px;">
    <div class="col-md-12">
        <h1 class=" text-uppercase text-primary">EVENT SEARCH</h1>

    </div>
</div>

<div class="container my-5">

    <div class="card box-shadow-1 mb-2">
        <div class="card-body">
            <div class="row">
                @if($allEventList) 
                @foreach($allEventList as $getallEventList)
                <div class="col-md-6 mb-2">
                    <div class="card box-shadow-1 mb-2">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-md-6 courses-card-image">
                                    <center>
                                        <img src="<?php echo env('APP_URL'); ?>public/asset/Event/Image/{{$getallEventList->image}}" style="height: 200px; width: 200px;">
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$getallEventList->title}}</h5>
                                        <p class="card-text">{{$getallEventList->content}}</p>
                                        <a class="btn btn-outline-secondary" href="{{route('eventdetails',array('id'=>$getallEventList->id))}}">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach 
                @else
                <div class="alert alert-danger" role="alert">
                    No Event Uploaded Yet!
                </div>
                @endif
            </div>
            <div class="col-md-12">
                <div id="loadView"></div>
            </div>
        </div>
    </div>
</div>

@endsection @section('footer') 
@include('website.layouts.footer') 
@endsection