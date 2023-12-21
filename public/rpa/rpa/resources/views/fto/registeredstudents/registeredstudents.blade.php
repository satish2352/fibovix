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
								<h4>Registered Students</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashfto')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Registered Students List</li>
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
							<h5 class="text-blue">Registered Student List</h5>
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
									<th>Student Name</th>
									<th>Course Name</th>
									<th>Certificate</th>
									
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allRegisteredStudentss) > 0)
							    <?php
                                    foreach($allRegisteredStudentss as $getallRegisteredStudentss )
                                      {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
										<td>{{ $getallRegisteredStudentss->firstName }}</td>
									<td>{{ $getallRegisteredStudentss->courseName }}</td>
									<?php
									if($getallRegisteredStudentss->certificate)
									{
									?>
									<td >
									    <a href="<?php echo env('APP_URL');?>public/asset/Course/Pdf/{{$getallRegisteredStudentss->certificate}}" class="btn btn-success dropdown">
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


