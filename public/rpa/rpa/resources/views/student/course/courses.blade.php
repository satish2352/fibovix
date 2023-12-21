@extends('student.layout.header')
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
									<li class="breadcrumb-item"><a href="{{route('dashstudent')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Courses List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<!--<a href="#CourseModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#CourseModal">-->
								<!--    Create Course-->
								<!--</a>-->
								
								<!--<div class="dropdown-menu dropdown-menu-right">-->
								<!--	<a class="dropdown-item" href="#">Export List</a>-->
								<!--	<a class="dropdown-item" href="#">Policies</a>-->
								<!--	<a class="dropdown-item" href="#">View Assets</a>-->
								<!--</div>-->
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
									    <a href="<?php echo env('APP_URL');?>public/asset/Course/Pdf/{{$getallCourses->pdf}}" class="btn btn-success dropdown" >
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







