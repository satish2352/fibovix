@extends('website.layouts.app') @section('title') Pilot Details @endsection @section('header') @include('website.layouts.header') @endsection @section('content') @include('website.style') @inject('CommonService', 'App\Http\Controllers\Common\CommonController')

<div class="container  my-5">
    <div class="row justify-content-center">
        <div class="div col-md-8 order-md-2 order-2">
                @if(count($ftoDetails) > 0) @foreach($ftoDetails as $getallFTOs )
                <div class="card  box-shadow-1">
                    <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text" style=" text-align: justify;">{{ $getallFTOs->description}}</p>
                    </div>
                </div>

                <?php $courses=DB::select("SELECT * FROM `courses` WHERE `courseownerid`='".$getallFTOs->id."' and `createdBy`='0' "); ?>
                    @if($courses) @foreach($courses as $course )
                    <div class="card  box-shadow-1 my-3">
                        <div class="card-body">
                            <h5 class="card-title">More Courses</h5>
                            <div class="row">
                                <div class="col-md-4 active mb-3">
                                    <div class="card">
                                        @if($getallCourses->image)
                                        <img class="card-img-top" src="<?php echo env('APP_URL'); ?>public/asset/Course/Image/{{$courses->image}}" alt="Card image"> @else
                                        <img class="card-img-top" src="<?php echo env('APP_URL'); ?>public/asset/noImage.png" alt="Card image"> @endif
                                        <div class="card-body">
                                            <p class="card-text"></p>
                                            <a href="{{route('webcoursedetails',array('id'=>$courses->id))}}" class="btn btn-outline-secondary">Details</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach 
                    @else
                    <!--<div class="alert alert-warning my-5" role="alert">-->
                    <!--    <h4 class="alert-heading">No Data Found</h4>-->
                    <!--    <p>Course No Added Yet By FTO</p>-->
                    <!--</div>-->
                    @endif
                    
                    <br>
                    <div class="card  box-shadow-1">
                    <div class="card-body">
                        <h5 class="card-title">FTO Instructor</h5>
                        <p class="card-text"> <?php 
                                    $ftoInsRes=DB::select("SELECT * FROM `ftoinstructor` WHERE `underFTO`='".$getallFTOs->id."' "); 
                                ?>
                                    @if($ftoInsRes) 
                                    @foreach($ftoInsRes as $key=>$ftoIns)
                                    {{$ftoIns->instructorName}} </br>
                                    @endforeach  
                                    @else
                                    {{'-'}}
                                    @endif
                        </p>
                        </div>
                    </div>
                    
                    <br>
                    
                     <div class="card  box-shadow-1">
                        <div class="card-body">
                            <h5 class="card-title">Photo Gallary</h5>
                            <div class="card-text d-flex justify-content-between">
                                <?php $allPhotoGalleryList=DB::select("SELECT * FROM `photogallery` where whosePhotoGallery='".$getallFTOs->id."' and PhotoGalleryBy='1'"); ?>
                                @if(count($allPhotoGalleryList)>0)
                                 @foreach($allPhotoGalleryList as $getallPhotoGalleryList)
                                 <div class="col-md-4">
                                  <a href="#" data-target="#modalIMG{{ $getallPhotoGalleryList->id }}" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
                                    <div class="ba-0 ds-1">
                                      <img alt="Card image cap" class="card-img-top" src="<?php echo env('APP_URL');?>public/asset/PhotoGallery/Image/{{$getallPhotoGalleryList->image}}" style="height: 250px; width: 300%;" />
                                      <div class="card-body">
                                        {{ $getallPhotoGalleryList->title }}
                                      </div>
                                    </div>  
                                  </a>
                               </div>
                
                                <div aria-hidden="true" aria-labelledby="myModal" class="modal fade" id="modalIMG{{ $getallPhotoGalleryList->id }}" role="dialog" tabindex="-1">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body mb-0 p-0">
                                        <img src="<?php echo env('APP_URL');?>public/asset/PhotoGallery/Image/{{$getallPhotoGalleryList->image}}" alt="" style="height: 500px; width: 500%;">
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-outline-primary btn-lg btn-rounded btn-md ml-4 text-center" data-dismiss="modal"  type="button">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                                @else
                                <div class="alert alert-danger" role="alert" style="align:center">
                                  No Photo Uploaded Yet !!
                                </div>
                                @endif
                                                                                                                                                                                                                                                                                                                                                                                    
                            </div>
                        </div>
                    </div>
                    
                    <br>
                     <div class="card  box-shadow-1">
                        <div class="card-body">
                            <h5 class="card-title">Videos Gallary</h5>
                            <div class="card-text d-flex justify-content-between">
                                
                                <?php $allVideoGalleryList=DB::select("SELECT * FROM `videogallery` where whoseVideoGallery='".$getallFTOs->id."' and VideoGalleryBy='1'"); ?>
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
                                      
                                        <!--<h5 class="card-title">Name</h5>-->
                                        <!--<p class="card-text">Experience</p>-->
                                        <!--<p class="card-text">Area</p>-->
                                     </div>
                                     </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                              @else
                              <div class="alert alert-danger" role="alert" >
                              <span style="align:center">No Video Uploaded Yet !! </span>
                              </div>
                              @endif
                            </div>
                            </div>
                        </div>
                    
                    
        </div>

        <div class="div col-md-4 mb-2">
            <div class="card box-shadow-1">
                <img src="<?php echo env('APP_URL'); ?>public/asset/FTOLogo/Image/{{$getallFTOs->FTOLogo}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-text">{{ $getallFTOs->FTOName}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="">State : </span><span class="font-weight-bold"> <?php $state=$CommonService->getPerticularStateById($getallFTOs->stateID); ?>{{$state[0]->name}}</span></li>
                    <li class="list-group-item"><span class="">Mobile : </span><span class="font-weight-bold">{{ $getallFTOs->mobile }}</span></li>
                    <li class="list-group-item"><span class="">City : </span><span class="font-weight-bold"><?php $city=$CommonService->getPerticularCityById($getallFTOs->cityId); ?> {{$city[0]->name}}</span></li>
                    <li class="list-group-item"><span class="">zipcode : <span class="font-weight-bold">{{ $getallFTOs->pinCode }}  </span>
                    
                    <li class="list-group-item"><span class="">Address : </span><span class="font-weight-bold">@if($getallFTOs->address1){{ $getallFTOs->address1 }},@endif 
                                                                             @if($getallFTOs->address2){{ $getallFTOs->address2 }}, @endif 
                                                                             @if($getallFTOs->address3){{ $getallFTOs->address3 }} @endif</span></li>
                </ul>
            </div>
        </div>
        @endforeach @else
        <div class="alert alert-warning my-5" role="alert">
            <h4 class="alert-heading">No Data Found</h4>
            <p>The following FTO doesn't exits in Rpapilot database, Kindly Refresh the Page. You may also contact rpapilot customer care for further enquiry</p>
        </div>
        @endif
    </div>
</div>

@endsection @section('footer') 
@include('website.layouts.footer') 
@endsection