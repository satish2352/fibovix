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
								<h4>Hire Pilot Name</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Hire Pilot Name</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<!--<div class="dropdown">-->
							<!--	<a href="#AdvisoryBoardModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#AdvisoryBoardModal">-->
							<!--	    Create Advisory Board-->
							<!--	</a>-->
							<!--</div>-->
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Hire Pilot Name</h5>
						</div>
					</div>
					<?php
					//$pilotId=session()->get('pilotId');
					
					?>
					<div class="row table-responsive ">
					   
						<table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr>
								    <?php
								    $count=0;
								    ?>
									<th>Sn.</th>
									<th>Pilot Name</th>
									<th>Who Want To Hire</th>
									<th>Email</th>
									<th>Mobile No</th>
									<th>Why Want To Hire</th>
									<th>Details </th>
								
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($hirePilotList) > 0)
							    <?php
							    
                                    foreach($hirePilotList as $hirePilotList )
                                      {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
								    <td>
								        {{ $hirePilotList->firstName}} {{$hirePilotList->middleName}} {{$hirePilotList->lastName }}
								    </td>
									<td>{{ $hirePilotList->fullname }}</td>
									<td>{{ $hirePilotList->email }}</td>
									<td>{{ $hirePilotList->mobile }}</td>
									<td>{{ $hirePilotList->reason }}</td>
									<td>{{ $hirePilotList->details }}</td>

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