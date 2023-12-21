@extends('website.layouts.app')
@section('title')
    Pilot Details
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
@include('website.style')
<style>
    .cardNew{
  height: 178px;
} 
.scrollable{
  overflow-y: auto;
  max-height: 150px;
}

.cardNew-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}


.boxNew-shadow-1 {
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.07), 0 1px 2px rgba(0, 0, 0, 0.09);
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
}


.cardNewPhoto{
  height: 256px;
}

.scrollableNew {
    overflow-y: auto;
    max-height: 256px;
}

.cardNewPhoto-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}


modal-contentNew {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0;
}
</style>
<div class="container my-5">
    <?php //dd($result); ?>
     @foreach($result as $key=>$pilot)
                        <div class="row justify-content-between">
                <div class="div col-md-8 order-md-1 order-2">
                    
                    <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                            <h5 class="card-title">Description</h5>
                            @if($pilot->experience!='')
                            <p class="card-text">{{$pilot->experience}}</p>
                            @else
                            <div class="alert alert-danger" role="alert" >
                            <span style="align:center">No Description Uploaded Yet !! </span>
                            </div>
                            @endif
                        </div>
                    </div>
                    
                    @if(count($pilotrdroneinfo))
                    <div class="cardNew  box-shadow-1  my-2">
                    <div class="cardNew-body scrollable ">
                            <h5 class="card-title">Drone Information</h5>
                            <div class="card-text d-flex justify-content-between">
                            <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info" style="border: 1px solid;">
                     	    <thead>
								<tr>
								    <th>Sr.No.</th>
								    <th>Drone Make</th>
								    <th>Manufacturer Name</th>
								    <th>UIN</th>
								    <th>DAN</th>
								    <!--<th>Drone Serial Number</th>-->
								</tr>
							</thead>
							<tbody>
							    <!--sr no drone_make drone_manu uin dan-->
							    
							    @if(count($pilotrdroneinfo))
							    @foreach($pilotrdroneinfo as $key=>$pilotDrone)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$pilotDrone->droneMake}}</td>
                                    <td>{{$pilotDrone->drnManufacturarName}}</td>
                                    <td>{{$pilotDrone->uinnumber}}</td>
                                    <td>{{$pilotDrone->danNumber}}</td>
                                    
                                    <!--<td>{{$pilotDrone->droneSerialNumber}}</td>-->
                                </tr>
                                @endforeach
                                @endif
							</tbody>
						    </table>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                            <h5 class="card-title">Drone Information</h5>
                            <div class="alert alert-danger" role="alert" >
                                
                                  <span style="align:center">No Drone Information Uploaded Yet !! </span>
                                  </div>
                        </div>
                    </div>
                    @endif
                
                    <?php $allPhotoGalleryList=DB::select("SELECT * FROM `photogallery` where whosePhotoGallery='".$pilot->id."' and PhotoGalleryBy='0'"); ?>
                    @if(sizeof($allPhotoGalleryList)>0)
                   <div class="cardNewPhoto  box-shadow-1  my-2">
                      <div class="cardNewPhoto-body scrollableNew ">
                            <h5 class="card-title">Photo Gallery</h5>
                            <br>
                            <div class="card-text d-flex justify-content-between">
                                
                                @if(count($allPhotoGalleryList)>0)
                                 @foreach($allPhotoGalleryList as $getallPhotoGalleryList)
                                 <div class="col-md-3">
                                  <a href="#" data-target="#modalIMG{{ $getallPhotoGalleryList->id }}" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
                                    <div class="ba-0 ds-1">
                                      <img alt="Card image cap" class="card-img-top" src="<?php echo env('APP_URL');?>public/asset/PhotoGallery/Image/{{$getallPhotoGalleryList->image}}" style="height: 150px; width: 150px;" />
                                      <div class="card-body">
                                        {{ $getallPhotoGalleryList->title }}
                                      </div>
                                    </div>  
                                  </a>
                               </div>
                
                                <div aria-hidden="true" aria-labelledby="myModal" class="modal fade" id="modalIMG{{ $getallPhotoGalleryList->id }}" role="dialog" tabindex="-1">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content" style="width: 55%; height:450px">
                                      <div class="modal-body" style="height: 379px;">
                                        <img src="<?php echo env('APP_URL');?>public/asset/PhotoGallery/Image/{{$getallPhotoGalleryList->image}}" alt="" style="height: 400px; width: 400px;">
                                      </div>
                                      <!--<div class="modal-footer">-->
                                      <!--  <button class="btn btn-outline-primary btn-lg btn-rounded btn-md text-center" data-dismiss="modal"  type="button">Close</button>-->
                                      <!--</div>-->
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                                @else
                                <div class="alert alert-danger" role="alert" >
                                  <span style="align:center">No Photo Uploaded Yet !! </span>
                                  </div>
                                @endif
                                                                                                                                                                                                                                                                                                                                                                                    
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                            <h5 class="card-title">Photo Gallery</h5>
                            <div class="alert alert-danger" role="alert" >
                                
                                  <span style="align:center">No Photo Uploaded Yet !! </span>
                                  </div>
                        </div>
                    </div>
                    @endif
                    
                    <?php $allVideoGalleryList=DB::select("SELECT * FROM `videogallery` where whoseVideoGallery='".$pilot->id."' and VideoGalleryBy='0'"); ?>
                    @if(count($allVideoGalleryList)>0)
                     <div class="cardNewPhoto  box-shadow-1  my-2">
                      <div class="cardNewPhoto-body scrollableNew ">
                            <h5 class="card-title">Videos Gallery</h5>
                            <div class="card-text d-flex justify-content-between">
                                
                                
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
                     @else
                    <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                             <h5 class="card-title">Videos Gallery</h5>
                            <div class="alert alert-danger" role="alert" >
                                
                                 <span style="align:center">No Video Uploaded Yet !! </span>
                                  </div>
                        </div>
                    </div>
                    @endif
                    
                </div>
                                    
                                    
                    
                                    
                                    
                <div class="col-md-4  order-md-1">
                    <div class="card position-relative">
                        <div class="fto-pilots-card-active-badge">
                                <span class="box-shadow-1 font-weight-normal align-middle  badge badge-success badge-pill text-white mx-1" style="font-size: 12px"><i class="material-icons-outlined" style="font-size: 18px">check</i> RPA Pilot Verified</span>
                                @if($pilot->ftoId)
                                @if($pilot->ftoApproved==1)
                                <span class="box-shadow-1 font-weight-normal align-middle  badge badge-info badge-pill text-white mx-1" style="font-size: 12px"><i class="material-icons-outlined" style="font-size: 18px">check</i> FTO  Verified</span>
                                @endif
                                @else
                                <!--<span class="box-shadow-1 font-weight-normal align-middle  badge badge-danger badge-pill text-white mx-1" style="font-size: 12px">FTO Details Not Available</span>-->
                                @endif
                        </div>
                        
                        <div class="card-header text-center">
                            <img class="img-fluid" src="{{env('APP_URL')}}/public/asset/website/images/pilots/rpapilot_default_300_300.png">
                        </div>
                       
                        <div class="card-body">
                            <h3 class="card-title align-items-center">{{$pilot->firstName}} {{$pilot->middleName}} {{$pilot->lastName}}  </h3>
                            <h6 class="card-subtitle mb-2 text-muted"><?php //$proffession=$pilot->proffession; $resultNew=DB::select("select FTOName from ftoregistration where id='".$proffession."'"); ?> </h6>
                        </div>
                        <ul class="list-group list-group-flush"><?php //dd("hello"); ?>
                            <li class="list-group-item"><span class="font-weight-bold">FTO : </span><?php $ftoId=$pilot->ftoId; if($ftoId!=null) { $resultNew=DB::select("select FTOName from ftoregistration where id='".$ftoId."'"); echo $resultNew[0]->FTOName; } else { echo "FTO Details Not Available"; } ?> </li>
                            <!--<li class="list-group-item"><span class="font-weight-bold">Email Address : </span>{{$pilot->email}}</li>-->
                            <!--<li class="list-group-item"><span class="font-weight-bold">Mobile No : </span>{{$pilot->mobile}}</li>-->
                            <li class="list-group-item"><span class="font-weight-bold">OAN : </span>@if($pilot->oannumber) {{$pilot->oannumber}} @else {{'-'}} @endif</li>
                            <li class="list-group-item"><span class="font-weight-bold">UAOP NO : </span>
                             @if(count($pilotrdroneinfo))
							    @foreach($pilotrdroneinfo as $key=>$pilotDrone)
                                    {{$pilotDrone->uaopnumber}}
                                @endforeach
                            @else {{'NA'}} @endif</li>
                            <li class="list-group-item"><span class="font-weight-bold">State : </span><?php $stateID=$pilot->stateID; $resultNew=DB::select("SELECT * FROM `states` where id='".$stateID."'"); ?> {{$resultNew[0]->name}}</li>
                            <li class="list-group-item"><span class="font-weight-bold">City : </span><?php $cityId=$pilot->cityId; $resultNew=DB::select("SELECT * FROM `cities` where id='".$cityId."'"); ?> {{$resultNew[0]->name}}</li>
                            <li class="list-group-item"><span class="font-weight-bold">Want To Hire Pilot : </span><a class="btn btn-primary" href="http://rpapilot.com/hirepilot"role="button" >Click Here</a></li>

                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
        
 <script>
    $(document).ready(function()
    {
        $('#pageDataTable').DataTable({searching: false,ordering: false,lengthChange: false,showNEntries: false});
    });
</script>       
  @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection