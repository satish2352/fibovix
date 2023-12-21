@extends('website.layouts.app')
@section('title')
    Event Seaarch
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    <div class="container" style="max-width:1300px;">

        <div class="row">
            <div class="col-md-12 mb-2">
             <?php
            foreach($allEventList as $getallEventList)
                {
		        ?>
             <div class="row no-gutters">
                <div class="col-md-3 courses-card-image">
                    <center>
                        <img src="<?php echo env('APP_URL'); ?>public/asset/Event/Image/{{$getallEventList->image}}" width="200" height="200">
                    </center>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">{{$getallEventList->title}}</h5>
                    <p class="card-text">{{$getallEventList->content}}</p>
                        <a class="btn btn-outline-secondary" href="{{route('eventdetails',array('id'=>$getallEventList->id))}}">Details</a>
                  </div>
                </div>
            </div>
            <?php
                }
                ?>
            </div>
            <div class="col-md-12">
                <div id="loadView"></div>
            </div>
        </div>

    </div>
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
