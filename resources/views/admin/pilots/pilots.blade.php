@extends('admin.layout.header')
@section('content')
@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<?php  ?>
<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Pilots</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pilots List</li>
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
							<h5 class="text-blue">Pilots List</h5>
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
									<!--<th>Category</th>-->
									<th>Gender</th>
									<th>Email</th>
									<th>State</th>
									<th>City</th>
									<th>FTO Approved</th>
									<th>Status</th>
									<!--<th>Action</th>-->
								
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allPilots) > 0)
							    <?php
							   
                                          foreach($allPilots as $getallPilots )
                                          {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
									<td>{{ $getallPilots->firstName}} {{$getallPilots->middleName}} {{$getallPilots->lastName }}</td>
									<td>{{ $getallPilots->mobile }}</td>
									<!--<td>{{ $getallPilots->category }}</td>-->
									<td>
									    @if ($getallPilots->gender == 0)
									    {{ 'Male' }}
									    @elseif ($getallPilots->gender == 1)
									    {{ 'Female' }}
									    @else
									    {{ 'Other' }}
									    @endif
									    </td>
									<td>{{ $getallPilots->email }}</td>
									<td><?php $state=$CommonService->getPerticularStateById($getallPilots->stateID);?>   {{$state[0]->name}}</td>
									<td><?php $city=$CommonService->getPerticularCityById($getallPilots->cityId);?>  {{$city[0]->name}}</td>
									<td>
							        @if ($getallPilots->ftoApproved == 1)
							        <font color="green">{{'Approved'}}</font>
							        @else
							        <font color="red">{{'Not Approved'}}</font>
							        @endif
							        </td>
							        
							        <td>
								        @if ($getallPilots->adminApproved == 1)
								            <a class="btn btn-success" href="{{route('admpilotdisapprove',array('pilotId'=>$getallPilots->pilotIdFInal,'approvalVal'=>$getallPilots->adminApproved))}}" title="Approved" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('admpilotapprove',array('pilotId'=>$getallPilots->pilotIdFInal,'approvalVal'=>$getallPilots->adminApproved))}}" title="DisApproved" role="button" >
									            <i class="fa fa-thumbs-down"></i>
								            </a>
                                        @endif
								    </td>
								</tr>
								<?php
                                          }
                                          ?>
								
                                 


							</tbody>
						</table>
					    
					    @endif
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
		
</div>
</div>
@endsection