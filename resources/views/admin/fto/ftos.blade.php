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
								<h4>FTOs</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">FTOs List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<!--<div class="dropdown">-->
							<!--	<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">-->
							<!--		January 2018-->
							<!--	</a>-->
							<!--	<div class="dropdown-menu dropdown-menu-right">-->
							<!--		<a class="dropdown-item" href="#">Export List</a>-->
							<!--		<a class="dropdown-item" href="#">Policies</a>-->
							<!--		<a class="dropdown-item" href="#">View Assets</a>-->
							<!--	</div>-->
							<!--</div>-->
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">FTOs List</h5>
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
									<!--<th class="table-plus datatable-nosort"></th>-->
									<th>Sn.</th>
									<th>Name</th>
									<th>Mobile</th>
									<th>Email</th>
									<th>State</th>
									<th>City</th>
									<th>Status</th>
									<!--<th>Action</th>-->
									
									<!--<th>Entry By</th>-->
									<!--<th>Aadhar No.</th>-->
									<!--<th>Category</th>-->
									<!--<th>UAOP Number</th>-->
									<!--<th>UAOP Validity</th>-->
									<!--<th>UIN Number</th>-->
									<!--<th>UIN Validity</th>-->
									<!--<th>NPNT</th>-->
									<!--<th>FTO</th>-->
									<!--<th>Drone Serial Number</th>-->
									<!--<th>Proffession</th>-->
									<!--<th>Experience</th>-->
									<!--<th>Passport</th>-->
									<!--<th>Driving Licence</th>-->
									<!--<th>Qualification</th>-->
									<!--<th>Passport Photo</th>-->
									<!--<th>Registration Date</th>-->
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allFTO) > 0)
							    <?php
							    //dd($allPilots);
                                          foreach($allFTO as $getallFTOs )
                                          {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
									<td>{{ $getallFTOs->firstName}} {{$getallFTOs->middleName}} {{$getallFTOs->lastName }}</td>
									<td>{{ $getallFTOs->mobile }}</td>
									<td>{{ $getallFTOs->email }}</td>
									<td><?php $stateName=$CommonService->getAllstate($getallFTOs->stateID);?>  {{$stateName[0]->name}}</td>
									<td><?php $cityName=$CommonService->getPerticularCityById($getallFTOs->cityId);?>  {{$cityName[0]->name}}</td>
									<td>
								        @if ($getallFTOs->adminApproved == 1)
								            <a class="btn btn-success" href="{{route('admftodisapprove',array('ftotId'=>$getallFTOs->ftoIdFInal,'approvalVal'=>$getallFTOs->adminApproved))}}" title="Approved" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('admftoapprove',array('ftotId'=>$getallFTOs->ftoIdFInal,'approvalVal'=>$getallFTOs->adminApproved))}}" title="DisApproved" role="button" >
									            <i class="fa fa-thumbs-down"></i>
								            </a>
                                        @endif
								    </td>
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