@extends('website.layouts.app')
@section('title')
    Event Seaarch
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

<?php
            foreach($eventDetails as $getallEventDetails)
                {
                    
		        ?>
		        
<div class="container  my-5">
        <div class="row justify-content-center">

            <div class="div col-md-8 order-md-1 order-2">
                                                            <div class="card  box-shadow-1 mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Address</h5>
                                <p class="card-text">Vigyan Bhawan , New Delhi</p>
                            </div>
                        </div>
                        <div class="card  box-shadow-1 mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">{{$getallEventDetails->content}}</p>
                            </div>
                        </div>
            </div>

            <div class="div col-md-4 mb-2">
                <div class="card box-shadow-1">
                    <img src="<?php echo env('APP_URL'); ?>public/asset/Event/Image/{{$getallEventDetails->image}}" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                        <h5 class="card-text">{{$getallEventDetails->title}} </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                                                                <span>Entry Fee : </span><span class="text-primary">free </span>
                                
                        </li>
                        <li class="list-group-item"><span class="">Start Date - End Date : </span>
                            <div class="text-primary">{{$getallEventDetails->fromDate}} - {{$getallEventDetails->toDate}}</div>
                        </li>
                        <li class="list-group-item"><span class="">Start Time - End Time : </span>
                            <div class="text-primary">{{$getallEventDetails->fromTime}} - {{$getallEventDetails->toTime}}</div>
                        </li>
                        <li class="list-group-item"><span class="">State : </span><span class="text-primary">Delhi [DL]</span></li>
                        <li class="list-group-item"><span class="">City : </span><span class="text-primary">New Delhi</span></li>
                        <li class="list-group-item"><span class="">Mobile : </span><span class="text-primary">919819995473</span></li>
                        <li class="list-group-item"><span class="">Email : </span><span class="text-primary">info@dronefederation.in</span></li>
                        <li class="list-group-item"><span class="">Site : </span><a class="text-primary" href="www.dronefederation.in">www.dronefederation.in</a></li>
                        <li class="list-group-item"><span class="">zipcode : </span><span class="text-primary">1100001</span></li>

                    </ul>
                </div>
            </div>
                                </div>
    </div>
    <?php
                }
                ?>
    @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
