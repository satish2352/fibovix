@extends('admin.layout.header')
@section('content')
@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<div class="main-container">
<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
   <div class="min-height-200px">
      <div class="page-header">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="title">
                  <h4>Courses</h4>
               </div>
               <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Course Search</li>
                  </ol>
               </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
            </div>
         </div>
      </div>
      <!-- Export Datatable start -->
      <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
         <div class="clearfix mb-20">
            <div class="pull-left">
               <h5 class="text-blue">Course Search</h5>
            </div>
         </div>
         <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
            <div class="clearfix">
               <!--<div class="pull-left">-->
               <!--	<h4 class="text-blue">Select 2</h4>-->
               <!--	<p class="mb-30 font-14">Select2 for custom search and select</p>-->
               <!--</div>-->
            </div>
            <form>
                <?php //die(); ?>
               <div id="tableAjax">
                  <div class="row">
                      
                     <div class="form-group col-sm-4" >
                        <label>State</label>
                        <select name="fto" id="ftoId" class="custom-select col-12" onchange="getResultByfto(this.value);" title="Choose..." data-live-search="true" required>
                           <option value="">Choose FTO</option>
                           @foreach($allFTO as $key=>$allFTOs )
                           <option value="{{$allFTOs->id}}" >{{ $allFTOs->firstName}} {{$allFTOs->middleName}} {{$allFTOs->lastName }}</option>
                           @endforeach                                
                        </select>
                     </div>
                     <?php //dd($stateList); ?>
                     <div class="form-group col-sm-4">
                         <label>State</label>
                        <select name="state" id="stateId" class="custom-select col-12" onchange="getResultByState(this.value);" title="Choose..." data-live-search="true" required>
                            <option value="">Select State</option>
                            @foreach($stateList as $key=>$statesofAdminList)
                            <option value="{{$statesofAdminList->id}}" >{{$statesofAdminList->state}}</option>
                            @endforeach
                                            
                                              
                        </select>
                     </div>
                     <div class="form-group col-sm-4">
                     </div>
                  </div>
            </form>
            
            <div class="row table-responsive ">
            <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr>
								    <?php
								    $count=0;
								    ?>
									<th>Sn.</th>
									<th>Category</th>
									<th>Course Name</th>
									<th>Duration</th>
									<th>Price</th>
									<th>State</th>
									<th>City</th>
									<th>Image</th>
									<th>PDF</th>
									<th>Description</th>
									<th>Created By</th>
									<!--<th>Status</th>-->
									<!--<th>Action</th>-->
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allCourses) > 0)
							    <?php
                                    foreach($allCourses as $getallCourses )
                                      {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
									<td><?php $courseDetails=$CommonService->getCategoryList($getallCourses->category);?>  {{$courseDetails[0]->category}}</td>
									<td>{{ $getallCourses->courseName }}</td>
									<td><?php $courseDetails=$CommonService->getDurationList($getallCourses->duration);?>  {{$courseDetails[0]->duration}}</td>
									<td>{{ $getallCourses->price }}</td>
									<td><?php $state=$CommonService->getPerticularAdminStateById($getallCourses->state);?>  {{$state[0]->state}}</td>
									<td><?php $city=$CommonService->getPerticularAdminCityById($getallCourses->city);?>  {{$city[0]->city}}</td>
									<?php
									if($getallCourses->image)
									{
									?>
									<td>
									    <img src="<?php echo env('APP_URL');?>public/asset/Course/Image/{{$getallCourses->image}}" height="200" width="200">
									</td>
									<?php
									}
									else
									{
									?>
									  <td>
									      <img src="<?php echo env('APP_URL');?>public/asset/no-image-available.png" height="200" width="200">
									  </td>
									<?php
									}
									?>
									
									
									
									<?php
									if($getallCourses->pdf)
									{
									?>
									<td >
									    <a href="<?php echo env('APP_URL');?>public/asset/Course/Pdf/{{$getallCourses->pdf}}" class="btn btn-success dropdown">
									        <i class="fa fa-download"></i>
									    </a>
									</td>
									<?php
									}
									else
									{
									?>
									  <td>
									      <img src="<?php echo env('APP_URL');?>public/asset/no-pdf.png" height="200" width="200">
									  </td>
									<?php
									}
									?>
									
									<td>{{ $getallCourses->description }}</td>
									
									<?php
									if($getallCourses->createdBy==1)
									{
									?>
        									<td>
        									    <center>
        									    You
        									    </center>
        									</td>
    								<?php
    								}
    								else
    								{
    								?>
        									<td>
        									    <center>
        									     FTO
        									     </center>
        									</td>
    									
									<?php
									}
									?>
									
									
									<!--<td>-->
									<!--    <center>-->
    					<!--			        @if ($getallCourses->status == 1)-->
        	<!--							        <button class="btn btn-success" role="button">-->
        	<!--							            <i class="fa fa-thumbs-up"></i>-->
        	<!--							        </button>-->
    					<!--			        @else-->
        	<!--							        <button class="btn btn-danger" role="button">-->
        	<!--							            <i class="fa fa-thumbs-down"></i>-->
        	<!--							        </button>-->
         <!--                                   @endif-->
         <!--                               </center>-->
								 <!--   </td>-->
								    
									<!--<td>-->
									<!--    <a class="btn btn-primary" href="#" role="button" >-->
									<!--        View-->
								 <!--       </a>-->
								 <!--   </td>-->
								</tr>
								<?php
                                          }
                                          ?>
								
                                  @endif



							</tbody>
						</table>
            </div>
            </div>
         </div>
         <!-- Export Datatable End -->
      </div>
   </div>
</div>
<script type="text/javascript">
   function getResultByState(stateId)
   {
     var ftoId=document.getElementById('ftoId').value;
     var url =APP_URL+'/'+'coursesearchstatecity';
     $('#tableAjax').empty();
     $.ajax({
               type: "post",
               url: url,
               data :{
                   "_token": "{{ csrf_token() }}",
                   'stateId':stateId,
                   'ftoId':ftoId,
               },
               success: function(newdata)
               {
                 $('#tableAjax').empty();
                 $('#tableAjax').append(newdata);
   
               }
   
             });
   }
</script>
<script type="text/javascript">
   function getResultByCity(cityId)
   {
     var ftoId=document.getElementById('ftoId').value;
     var stateId=document.getElementById('stateId').value;
     $('#tableAjax').empty();
     var url =APP_URL+'/'+'coursesearchstatecity';
     $.ajax({
               type: "post",
               url: url,
               data :{
                   "_token": "{{ csrf_token() }}",
                   'stateId':stateId,
                   'cityId':cityId,
                   'ftoId':ftoId,
               },
               success: function(newdata)
               {
                 $('#tableAjax').empty();
                 $('#tableAjax').append(newdata);
   
               }
   
             });
   }
</script>
<script>
    function getResultByfto(ftoId)
   {
     
     var stateId=document.getElementById('stateId').value;
     var url =APP_URL+'/'+'coursesearchstatecity';
     $('#tableAjax').empty();
     $.ajax({
               type: "post",
               url: url,
               data :{
                   "_token": "{{ csrf_token() }}",
                   'stateId':stateId,
                   'ftoId':ftoId,
               },
               success: function(newdata)
               {
                 $('#tableAjax').empty();
                 $('#tableAjax').append(newdata);
   
               }
   
             });
   }
</script>
@endsection