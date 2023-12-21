@extends('website.layouts.app')

@section('title')
    Welcome to RPAPilot.com
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')

    <div class="fixed-uaop-bottom-button">
        <div class="btn-primary" data-toggle="modal" data-target="#createModal" data-backdrop="static">
            <a href="{{url('uaopverification')}}" class="text-white font-weight-bold"> <i
                    class="material-icons-outlined pointer" id="showCreateModal">airplanemode_active</i> Verify UAOP</a>
        </div>
    </div>

        
    <div class="row align-items-center  text-center font-weight-bold position-relative" style="padding-bottom: 180px;background: #FBFBFB">

        


        <div class="col-md-2">
            
        </div>
        <div class="col-md-4">
            
            
                
            <form action="" method="GET">
            <h1 class="font-weight-bold text-primary">Aspiring pilot? You got it.</h1>
            <p class="text-secondary">Become a DGCA approved pilot today!</p>
            <div class="input-group">
                <select name="city" id="" class="form-control selectpicker"   data-live-search="true">
                    
                </select>
                <div class="input-group-append">
                    <select name="category" id="" class="btn btn-outline-secondary ">
                        
                    </select>
                </div>
            </div>
            <button class="btn btn-primary my-3" type="submit">Search</button>
            </form>
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
                <p class="text-secondary">Learn from flight training organisations across the country</p>
            </div>
        </div>
        <div class="row text-center align-items-center justify-content-center py-4">
            <div class="col-md-2 ">
                <img src="{{asset('website/images/circular_label_with_certified__A0_Rectangle_76_pattern.png')}}"
                     style="width: 100px;">
                <h6 class="font-weight-bold">GOVERNMENT CERTIFIED</h6>
            </div>
            <div class="col-md-2 ">
                <img src="{{asset('website/images/professor_with_clipboard_A0_Rectangle_78_pattern.png')}}"
                     >
                <h6 class="font-weight-bold">QUALIFIED DRONE INSTRUCTORS</h6>
            </div>

            <div class="col-md-2">
                <img src="{{asset('website/images/pilot_A0_Rectangle_80_pattern.png')}}" style="width: 100px;">
                <h6 class="font-weight-bold">MAKE A CAREER</h6>
            </div>
            <div class="col-md-2">
                <img src="{{asset('website/images/drone_A0_Rectangle_84_pattern@2x.png')}}" style="width: 100px;">
                <h6 class="font-weight-bold">COMPREHENSIVE PRACTICAL TRAINING</h6>
            </div>
            <div class="col-md-2">
                <img src="{{asset('website/images/id_card_A0_Rectangle_82_pattern.png')}}" style="width: 100px;">
                <h6 class="font-weight-bold">GET A LICENSE</h6>
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
                <p class="text-secondary">Make your career across in various domains</p>
            </div>
            <div class="row">
                <div class="col-md-12 position-relative">
                    <img class="img-width" src="{{asset('website/images/Industrial_city.png')}}">
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
                <div class="col-md-4">
                    <h1 class="font-weight-bold text-primary">Testimonials</h1>
                </div>
                    <img src="{{asset('website/images/the_egg_thing_for_index.png')}}" style="
    position: absolute;
    left: -71px;
    top: 0;
    height: 481px;
    width: 196px;
">
                <div class="col-md-8">
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
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center text-center no-gutters position-relative">
        <div class="col-md-6 p-0">
            <img src="{{asset('website/images/uncle__final_dribble.png')}}">
        </div>
        <div class="col-md-6">
            <h1 class="font-weight-bold">Become a Drone Pilot Today</h1>
            <button class="btn btn-primary font-weight-bold font-italic">View Courses</button>
        </div>
        <img src="{{asset('website/images/cloud_pattern.png')}}" class="index-cloud-pattern">
    </div>



@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
@section('script')

@endsection
