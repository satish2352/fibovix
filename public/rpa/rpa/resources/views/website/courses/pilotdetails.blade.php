
@extends('website.layouts.app')
@section('title')
    Event Seaarch
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
@include('website.style')

<div class="container my-5">
                        <div class="row justify-content-between">
                <div class="div col-md-8 order-md-1 order-2">
                    <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            <p class="card-text">I Fly Drone From Nano To Small Category Having Training From  BFC</p>
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
                            <h3 class="card-title align-items-center">Mr. Rahul Ambegaokar</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Cinematographer</h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="font-weight-bold">FTO : </span>Bombay Flying Club</li>
                            <li class="list-group-item"><span class="font-weight-bold">UAOP NO : </span><span class="text-primary">12345678</span></li>
                            <li class="list-group-item"><span class="font-weight-bold">Email Address : </span>rahul_ambegaokar@hotmail.com</li>
                            <li class="list-group-item"><span class="font-weight-bold">Mobile No : </span>9867750035</li>
                            <li class="list-group-item"><span class="font-weight-bold">Drone Serial Number : </span>12345678
                            </li>
                            <li class="list-group-item"><span class="font-weight-bold">UIN : </span>12345678</li>
                            <li class="list-group-item"><span class="font-weight-bold">State : </span>Maharashtra [MH]</li>
                            <li class="list-group-item"><span class="font-weight-bold">City : </span>Mumbai Suburban</li>

                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
        
  @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection