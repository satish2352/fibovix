@extends('website.layouts.app')
@section('title')
    Course Details
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<?php
            foreach($courseDetails as $getcourseDetails)
                {
                    
		        ?>
		        
<div class="container  my-5">
        <div class="row justify-content-center">

            <div class="div col-md-8 order-md-1 order-2">
                                                          
                        <div class="card  box-shadow-1 mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">{{$getcourseDetails->description}}</p>
                            </div>
                        </div>
            </div>

            <div class="div col-md-4 mb-2">
                <div class="card box-shadow-1">
                    <img src="<?php echo env('APP_URL'); ?>public/asset/Course/Image/{{$getcourseDetails->image}}" height="200px" class="card-img-top" alt="...">
                    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="">Course Name </span>
                            <div class="text-primary">{{$getcourseDetails->courseName}}</div>
                        </li>
                        <li class="list-group-item"><span class="">Category </span>
                            <div class="text-primary">{{$getcourseDetails->category}}</div>
                        </li>
                        
                        <li class="list-group-item">
                        <span>Price : </span><span class="text-primary">{{$getcourseDetails->price}} </span>
                                
                        </li>
                        <li class="list-group-item"><span class="">Duration </span>
                            <div class="text-primary">{{$getcourseDetails->duration}}</div>
                        </li>
                        <li class="list-group-item"><span class="">State : </span><span class="text-primary"><?php $state=$CommonService->getPerticularAdminStateById($getcourseDetails->state);?>  {{$state[0]->state}}</span></li>
                        <li class="list-group-item"><span class="">City : </span><span class="text-primary"><?php $city=$CommonService->getPerticularAdminCityById($getcourseDetails->city);?>  {{$city[0]->city}}</span></li>
                        <li class="list-group-item"><span class="">PDF : </span><span class="text-primary ">
                            <a class="btn btn-primary" href="<?php echo env('APP_URL'); ?>public/asset/Course/Pdf/{{$getcourseDetails->pdf}}" target="_blank"> Download</a></span></li>
                        
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
