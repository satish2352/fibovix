@extends('website.layouts.app')
@section('title')
    Photo Gallery
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    
    <div class="container" style="max-width:1000px;">
        <div class="row text-center justify-content-center">
                <div class="col-md-12">
                    <h1 class=" text-uppercase text-primary">Photo Gallery</h1>
    
                </div>
        </div>
        <br>
        
        
       
        <div class="row">
             <?php
            foreach($allPhotoGalleryList as $getallPhotoGalleryList)
                {
		        ?>
            <div class="col-md-4">
              <div class="column">
                <a href="/w3images/lights.jpg" target="_blank">
                  <img src="public/asset/PhotoGallery/Image/{{$getallPhotoGalleryList->image}}" alt="Lights" style="width:100, height:100">
                </a>
              </div>
            </div>
            <?php
                }
            ?>
      </div>
      <br>
    </div>


@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
