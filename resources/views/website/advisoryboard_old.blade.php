@extends('website.layouts.app')
@section('title')
    About
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    
    
    <div class="container" style="max-width:1300px;">
<div class="row text-center justify-content-center">
                <div class="col-md-12">
                    <h1 class=" text-uppercase text-primary">Advisory Board</h1>
    
                </div>
            </div>
        <div class="row">
            <?php
            foreach($allAdvisoryBoardList as $getallAdvisoryBoardList )
                {
		        ?>
            <div class="col-md-12 mb-2">
             
             <div class="row no-gutters">
                <div class="col-md-3 courses-card-image" >
                    <center>
                    <img src="public/asset/AdvisoryBoard/Image/{{$getallAdvisoryBoardList->image}}" width="100" height="100">
                    <h5 class="card-title">{{$getallAdvisoryBoardList->name}}</h5>
                    <h5 class="card-title">{{$getallAdvisoryBoardList->designation}}</h5>
                    </center>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    
                    <p class="card-text">
                        {{$getallAdvisoryBoardList->content}}
                                    
                  </div>
                </div>
            </div>
  
            </div>
            <?php
                }
                ?>
        </div>

    </div>
    
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
