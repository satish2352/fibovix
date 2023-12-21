@extends('fto.layout.header')
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
									<li class="breadcrumb-item"><a href="{{route('dashfto')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Courses List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#CourseModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#CourseModal">
								    Create Course
								</a>
								
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Courses List</h5>
						</div>
					</div>
					<div class="row table-responsive ">
					    @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        
                        
                        
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
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
									<td><?php $state=$CommonService->getAllAdminState($getallCourses->state);?>  {{$state[0]->state}}</td>
									<td><?php $city=$CommonService->getPerticularAdminCityById($getallCourses->city); ?>  {{$city[0]->city}}</td>
									<?php
									if($getallCourses->image)
									{
									?>
									<td>
									    <img class="center" src="<?php echo env('APP_URL');?>public/asset/Course/Image/{{$getallCourses->image}}" height="200" width="200">
									</td>
									<?php
									}
									else
									{
									?>
									  <td>
									      <img class="center" src="<?php echo env('APP_URL');?>public/asset/no-image-available.png" height="200" width="200">
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
									      <img class="center" src="<?php echo env('APP_URL');?>public/asset/no-pdf.png" height="200" width="200">
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
        									    Admin
        									    </center>
        									</td>
    								<?php
    								}
    								else
    								{
    								?>
        									<td>
        									    <center>
        									     You
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
				<!-- Export Datatable End -->
			</div>
		
</div>
</div>
	
@endsection






<!-- Modal -->
<div class="modal fade" id="CourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Create Course</center></h4>
      </div>
      <div class="modal-body">
        	<!--<form method="post" enctype="multipart/form-data">-->
        	    <form action="{{route('savecourse')}}" method="POST" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="courseTitle" id="" placeholder="Enter Course Title" required="" >
								
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="category" required="">
							        <option value="">Select Category</option>
                                            @foreach($CategoryList as $key=>$CategoryList)
                                        <option value="{{$CategoryList->id}}*{{$CategoryList->addInfoReq}}" >{{$CategoryList->category}}</option>
                                            @endforeach
							    </select>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="duration" required="">
							        <option value="">Select Duration</option>
                                            @foreach($DurationList as $key=>$DurationList)
                                        <option value="{{$DurationList->id}}" >{{$DurationList->duration}}</option>
                                            @endforeach
							    </select>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="state" required="" id="stateId" onchange="getCity();">
							        <option value="">Select State</option>
                                            @foreach($statesofAdminList as $key=>$statesofAdminList)
                                        <option value="{{$statesofAdminList->id}}" >{{$statesofAdminList->state}}</option>
                                            @endforeach
							    </select>
							</div>
						</div>
						
						<div id="citys"></div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="coursePrice" pattern="[0-9]+" placeholder="Enter Course Price in Digit. Ex. 1000" required="" >
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-12 col-md-11">
							    <textarea class="form-control" name="description" placeholder="Course Description"></textarea>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label">IMG</label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="file" name="image" accept=".png, .jpg">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label">PDF</label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="file" name="pdf" accept=".pdf">
							</div>
						</div>
                	
					
					
				        <div class="modal-footer">
                           <button class="btn btn-success" type="submit" name="addCourse" >
		                        Submit
                           </button>
          
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>	
						
 </form>
      </div>
      
    </div>
  </div>
</div>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>
<script>
    
    function getCity(){
            var url=APP_URL+'/getadmincity';
            let stateId = $('#stateId').val();
            
            if(stateId==null || stateId=='')
            {
                alert("Select City");
                return false;
            }
            
            $.ajax({
                url:url,
                type: 'post',
                dataType: 'html',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'stateId': stateId
                },
                
                
                success: function (response) {
                    
                    $('#citys').empty();
                    $('#citys').append(response);
                    $('#citys').show();
                }
            });
    }
    
    
</script>









