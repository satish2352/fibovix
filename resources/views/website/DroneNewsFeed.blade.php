@extends('website.layouts.app')
@section('title')
    NEWS FEED
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

    <div class="row text-center justify-content-center" style="margin-top: 20;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">NEWS FEED</h1>

      </div>
  </div>
    <div class="container my-5">
      <div class="card box-shadow-1 mb-2">
        <div class="card-body">
        <div class="row">
            @if(count($allDroneNewsFeedList)>0)
             <?php
            foreach($allDroneNewsFeedList as $getallDroneNewsFeedList)
                {
		        ?>
            <div class="col-md-4 mb-2">
              <div class="card box-shadow-1 mb-2">
              <div class="card-body">
               <div class="row no-gutters">
                 <div class="col-md-6 courses-card-image">
                    <center>
                        @if($getallDroneNewsFeedList->url)
                      <iframe src="{{ url($getallDroneNewsFeedList->url) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="height: 150px; width: 160px;" allowfullscreen></iframe>
                      @else {{'No Video Available'}}@endif
                    </center>
                 </div>
                 <div class="col-md-2"></div>
                 <div class="col-md-4">
                  
                    <h5 class="card-title">{{$getallDroneNewsFeedList->title}}</h5>
                    <p class="card-text">@if($getallDroneNewsFeedList->description){{ $getallDroneNewsFeedList->description}}@else {{'-'}}@endif</p>
                  
                </div>
                </div>
            </div>
            </div>
            </div>
            <?php
                }
            ?>
            @else
            <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                             <h5 class="card-title">NEWS FEED</h5>
                            <div class="alert alert-danger" role="alert" >
                                
                                 <span style="align:center">No News Uploaded Yet !! </span>
                                  </div>
                        </div>
                    </div>
            @endif
      </div>
      <br>
    </div>
</div>
</div>

@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
