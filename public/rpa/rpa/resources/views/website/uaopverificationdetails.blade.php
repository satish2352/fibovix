
@extends('website.layouts.app')
@section('title')
    Pilot Details
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
@include('website.style')

<div class="container my-5">
     @foreach($result as $key=>$pilot)
                        <div class="row justify-content-between">
                <div class="div col-md-8 order-md-1 order-2">
                    <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <p class="card-text">{{$pilot->experience}}</p>
                        </div>
                    </div>
                                        <div class="card  box-shadow-1  my-2">
                        <div class="card-body">
                            <h5 class="card-title">My Videos</h5>
                            <div class="card-text d-flex justify-content-between">

                                                                                                                                                                                                                                                                                                                                                                                    
                            </div>
                        </div>
                    </div>
                                    </div>
                <div class="col-md-4  order-md-1">
                    <div class="card position-relative">
                        <div class="fto-pilots-card-active-badge">
                                                            <span class="box-shadow-1 font-weight-normal align-middle  badge badge-success badge-pill text-white mx-1" style="font-size: 12px"><i class="material-icons-outlined" style="font-size: 18px">check</i> RPA Verified</span>
                                                                                        <span class="box-shadow-1 font-weight-normal align-middle  badge badge-info badge-pill text-white mx-1" style="font-size: 12px"><i class="material-icons-outlined" style="font-size: 18px">check</i> FTO  Verified</span>
                                                    </div>
                        
                        <div class="card-header text-center">
                            <img class="img-fluid" src="http://rpapilot.com/rpa/public//images/pilots/rpapilot_default_300_300.png">
                        </div>
                       
                        <div class="card-body">
                            <h3 class="card-title align-items-center">{{$pilot->firstName}} {{$pilot->middleName}} {{$pilot->lastName}}  </h3>
                            <h6 class="card-subtitle mb-2 text-muted"><?php //$proffession=$pilot->proffession; $resultNew=DB::select("select FTOName from ftoregistration where id='".$proffession."'"); ?> </h6>
                        </div>
                        <ul class="list-group list-group-flush"><?php //dd("hello"); ?>
                            <li class="list-group-item"><span class="font-weight-bold">FTO : </span><?php $ftoId=$pilot->ftoId; if($ftoId!=null) { $resultNew=DB::select("select FTOName from ftoregistration where id='".$ftoId."'"); echo $resultNew->FTOName; } ?> </li>
                            <li class="list-group-item"><span class="font-weight-bold">UAOP NO : </span><span class="text-primary"> @if(count($pilotrdroneinfo)) @foreach($pilotrdroneinfo as $key=>$pilotDrone) {{$pilotDrone->uaopnumber}},@endforeach @endif </span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Email Address : </span>{{$pilot->email}}</li>
                            <li class="list-group-item"><span class="font-weight-bold">Mobile No : </span>{{$pilot->mobile}}</li>
                            <li class="list-group-item"><span class="font-weight-bold">Drone Serial Number : </span>@if(count($pilotrdroneinfo))  @foreach($pilotrdroneinfo as $key=>$pilotDrone) {{$pilotDrone->droneSerialNumber}},@endforeach @endif
                            </li>
                            <li class="list-group-item"><span class="font-weight-bold">UIN : </span>@if(count($pilotrdroneinfo))  @foreach($pilotrdroneinfo as $key=>$pilotDrone) {{$pilotDrone->uinnumber}},@endforeach @endif</li>
                            <li class="list-group-item"><span class="font-weight-bold">State : </span><?php $stateID=$pilot->stateID; $resultNew=DB::select("SELECT * FROM `states` where id='".$stateID."'"); ?> {{$resultNew[0]->name}}</li>
                            <li class="list-group-item"><span class="font-weight-bold">City : </span><?php $cityId=$pilot->cityId; $resultNew=DB::select("SELECT * FROM `cities` where id='".$cityId."'"); ?> {{$resultNew[0]->name}}</li>

                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
        
        
  @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection