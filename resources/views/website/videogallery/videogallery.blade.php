@extends('website.layouts.app')
@section('title')
    Video Gallery
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

    <div class="row text-center justify-content-center" style="margin-top: 20;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">VIDEO GALLERY</h1>

      </div>
  </div>
    <div class="container my-5">
      <div class="card box-shadow-1 mb-2">
        <div class="card-body">
        <div class="row">
            @if($allVideoGalleryList)
            @foreach($allVideoGalleryList as $getallVideoGalleryList)
            <div class="col-md-4 mb-2">
              <div class="card box-shadow-1 mb-2">
              <div class="card-body">
               <div class="row no-gutters">
                 <div class="col-md-6 courses-card-image">
                    <center>
                      <iframe src="{{ url($getallVideoGalleryList->url) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="height: 150px; width: 160px;" allowfullscreen></iframe>
                    </center>
                 </div>
                 <div class="col-md-2"></div>
                 <div class="col-md-4">
                  
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">Experience</p>
                    <p class="card-text">Area</p>
                     
                  
                </div>
            </div>
        </div>
    </div></div>
          @endforeach
          @else
          <div class="alert alert-danger" role="alert" style="align:center">
          No Video Uploaded Yet !!
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
