@extends('website.layouts.app')

@section('title')
    Welcome to RPAPilot.com
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

    <div class="fixed-uaop-bottom-button">
        <div class="btn-primary" data-toggle="modal" data-target="#createModal" data-backdrop="static">
            <a href="{{url('uaopverification')}}" class="text-white font-weight-bold"> <i
                    class="material-icons-outlined pointer" id="showCreateModal">airplanemode_active</i> Verify UAOP</a>
        </div>
    </div>

        
    <div class="row align-items-center  text-center font-weight-bold position-relative" style="padding-bottom: 180px;background: #FBFBFB">

        


        <div class="col-md-1">
            
        </div>
        <div class="col-md-4">
            
            
                
            <form action="" method="GET">
            <h1 class="font-weight-bold text-primary">&nbsp;Aspiring pilot? You got it.</h1>
            <p class="text-secondary" style="font-weight: normal;">Become a DGCA approved pilot today!</p>
            <div class="input-group" style="margin-left: 100px;">
                <select name="city" id="" class="form-group selectpicker"   data-live-search="true">
                    
                </select>
                <!-- <div class="input-group-append">
                    <select name="category" id="" class="btn btn-outline-secondary ">
                        
                    </select> 
                  </div>-->
                
            </div>
            <button class="btn btn-primary my-3" type="submit">Search</button>
            </form>
        </div>
        <div class="col-md-1">
            
        </div>
        <div class="col-md-6">
            <img src="{{asset('website/images/design_and_engineering_copy_A0_Rectangle_24_pattern.gif')}}">
        </div>
        <img src="{{asset('website/images/cloud_pattern_blue.png')}}" class="index-cloud-pattern">
    </div>

    <div class="position-relative mt-5">
        <div class="row mt-5">
            <div class="col-md-12  text-center font-weight-bold text-primary">
                <h4 class="font-weight-bold text-primary">LOVE FLYING? BECOME A PRO!</h4>
                <p class="text-secondary" style="font-weight: normal;">Learn from flight training organisations across the country</p>
            </div>
        </div>
        <div class="row text-center align-items-center justify-content-center py-4">
            <div class="col-md-2 ">
                <img src="{{asset('website/images/circular_label_with_certified__A0_Rectangle_76_pattern.png')}}"
                     style="width: 70px; height: 100; border-radius: 50%" >
                <h6 class="font-weight-bold">Government<br>Certified</h6>
            </div>
            <div class="col-md-2 ">
                <img src="{{asset('website/images/professor_with_clipboard_A0_Rectangle_78_pattern.png')}}" style="width: 70px; height: 100; border-radius: 50%">
                <h6 class="font-weight-bold">Qualified Drone<br>Instructor</h6>
            </div>

            <div class="col-md-2">
                <img src="{{asset('website/images/pilot_A0_Rectangle_80_pattern.png')}}" style="width: 70px; height: 100; border-radius: 50%">
                <h6 class="font-weight-bold">Make A Career<br>in a Drone Flying</h6>
            </div>
            <div class="col-md-2">
                <img src="{{asset('website/images/drone_A0_Rectangle_84_pattern@2x.png')}}" style="width: 70px; height: 100; border-radius: 50%">
                <h6 class="font-weight-bold">Comprehensive Practical<br>Training</h6>
            </div>
            <div class="col-md-2">
                <img src="{{asset('website/images/id_card_A0_Rectangle_82_pattern.png')}}" style="width: 70px; height: 100; border-radius: 50%">
                <h6 class="font-weight-bold">Get A License<br>Now</h6>
            </div>
        </div>

        <div class="row text-center align-items-center justify-content-center py-4 mb-5">
           <div class="col-6"><img src="{{asset('website/images/advertise_image.png')}}" class="img-fluid"></div>
        </div>

{{--        <img src="{{asset('website/images/cloud_pattern.png')}}" class="index-cloud-pattern">--}}
    </div>

    <div style="background-image:url('{{asset('website/images/background_city _image.png')}}');background-repeat: no-repeat;
        background-size: cover;background-color: #fff;">
        <div class="container index-section-1" style="max-width: 1050px;padding: 50px 0;">
            <div class="col-md-12  text-center font-weight-bold text-primary" style="margin-bottom: 100px;">
                <h4 class="font-weight-bold text-primary">THE POSSIBILITIES ARE ENDLESS</h4>
                <p class="text-secondary" style="font-weight: normal;">Make your career across in various domains</p>
            </div>
            <div class="row">
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/Industrial_city.png')}}" >
                    <div class="index-pos-text-right">CINEMATOGRAPHY</div>
                    <div class="index-pos-border-right"></div>
                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown-3.png')}}" style="float: right;">
                    <div class="index-pos-text-left">SURVEY AND MAPPING</div>
                    <div class="index-pos-border-left"></div>
                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown.png')}}">
                    <div class="index-pos-text-right">POWERLINE AND SOLAR INSPECTION</div>
                    <div class="index-pos-border-right"></div>
                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown-1.png')}}" style="float: right;">
                    <div class="index-pos-text-left">FIRE SAFETY</div>
                    <div class="index-pos-border-left"></div>
                </div>
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/GreenTown-2.png')}}">
                    <div class="index-pos-text-right">PUBLIC SAFETY</div>
                    <div class="index-pos-border-right"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="bg-white position-relative">
        <div class="container">
            <div class="row align-items-center text-center no-gutters py-5" style="max-width: 1400px;">
                <div class="col-md-12">
                    <h1 class="font-weight-bold text-primary">Testimonials</h1>
                </div>
                    <img src="{{asset('website/images/the_egg_thing_for_index.png')}}" style="
    position: absolute;
    left: -71px;
    top: 0;
    height: 481px;
    width: 196px;
">
                <div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" hidden=""></li>
      <li data-target="#myCarousel" data-slide-to="1" hidden=""></li>
      <li data-target="#myCarousel" data-slide-to="2" hidden=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="card">
            <center>
            <img src="{{asset('website/images/dumm.png')}}" class="card-img-top" alt="..."  style="height: 200px; width: 300px;">
            <br><br>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title
                    and
                    make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Get Details</a>
            </div>
            </center>
        </div>
      </div>

      <div class="item">
         <div class="card">
            <center>
            <img src="{{asset('website/images/dumm.png')}}" class="card-img-top" alt="..."   style="height: 200px; width: 300px;">
            <br><br>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title
                    and
                    make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Get Details</a>
            </div>
        </center>
        </div>
      </div>
    
      <div class="item">
         <div class="card">
            <center>
            <img src="{{asset('website/images/dumm.png')}}" class="card-img-top" alt="..."  style="height: 200px; width: 300px;">
            <br><br>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title
                    and
                    make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Get Details</a>
            </div>
        </center>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
                <!-- <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="{{asset('website/images/dumm.png')}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Get Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="{{asset('website/images/dumm.png')}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Get Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="{{asset('website/images/dumm.png')}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and
                                                    make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Get Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

<div class="container" style="margin-bottom: 20px">
    <div class="row align-items-center text-center">
        <div class="col-md-12 p-0">
            <img src="{{asset('website/images/uncle__final_dribble.png')}}" style="height: 300px; width: 600px;">
        </div>
      </div>
      
      <div class="row align-items-center text-center no-gutters position-relative" style="margin-top: 20px">
        <div class="col-md-12 p-0">
        <img src="{{asset('website/images/cloud_pattern.png')}}" class="index-cloud-pattern">
        </div>
      </div>
      <div class="row align-items-center text-center">
        <div class="col-md-12">
            <h1 class="font-weight-bold">Become a Drone Pilot Today</h1>
            <!--<button class="btn btn-primary">View Courses</button>-->
            <a href="{{('webcoursessearch')}}" class="btn btn-primary">View Courses</a>
        </div>
      </div>
</div>


@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
@section('script')

@endsection
