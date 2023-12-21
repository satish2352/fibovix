@extends('website.layouts.app')
@section('title')
    Video Gallery
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    
    <div class="container" style="max-width:1000px;">
        <div class="row text-center justify-content-center">
                <div class="col-md-12">
                    <h1 class=" text-uppercase text-primary">Video Gallery</h1>
    
                </div>
        </div>
        <br>
        
        
       
        <div class="row">
             <?php
            foreach($allVideoGalleryList as $getallVideoGalleryList)
                {
		        ?>
            <div class="col-md-4">
              <div class="column">
                      <iframe src="{{ url($getallVideoGalleryList->url) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
