@extends('admin.layout.header')
@section('content')

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Advertise</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Advertise List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#AdvertiseModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#AdvertiseModal">
								    Create Advertise
								</a>
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Advertise List</h5>
						</div>
					</div>
					<?php
					//$pilotId=session()->get('pilotId');
					
					?>
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
									<th>title</th>
									<th>content</th>
									<th>From</th>
									<th>To</th>
									<th>Validity</th>
									<th>Image</th>
									<th>Created By</th>
									<th>Show / Hide</th>
									<th>Admin Status</th>
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allAdvertise) > 0)
							    <?php
							    $cDate = date('d F Y');
									
                                    foreach($allAdvertise as $getallAdvertise )
                                      {
									    $toDate = $getallAdvertise->toDate;
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
									<td>{{ $getallAdvertise->title }}</td>
									<td>{{ $getallAdvertise->content }}</td>
									<td>{{ $getallAdvertise->fromDate }}</td>
									<td>{{ $getallAdvertise->toDate }}</td>
									<td>
    									@if($cDate < $toDate)
    									   <span class="text-success">Active</span>
    									@else
    									   <span class="text-danger">Inactive</span>
    									@endif
    								</td>
									<?php
									if($getallAdvertise->image)
									{
									?>
									<td>
									    <img src="<?php echo env('APP_URL');?>public/asset/Advertise/Image/{{$getallAdvertise->image}}" height="100" width="100">
									</td>
									<?php
									}
									else
									{
									?>
									  <td>
									      <img src="<?php echo env('APP_URL');?>public/asset/no-image-available.png" height="100" width="100">
									  </td>
									<?php
									}
									?>
									
									
									
									
									<td>
								        @if ($getallAdvertise->advertiseBy == "0")
								            <span>Pilot</span>
								        @elseif ($getallAdvertise->advertiseBy == "1")
								            <span>FTO</span>
								        @else
								            <span>Admin</span>
                                        @endif
								    </td>
								    
								    
									
									<!--<td>-->
								 <!--       @if ($getallAdvertise->adminStatus == "1")-->
								 <!--           <span class="text-success">Approved</span>-->
								 <!--       @else-->
								 <!--           <span class="text-danger">DisApproved</span>-->
         <!--                               @endif-->
								 <!--   </td>-->
									
									<td>
								        @if ($getallAdvertise->status == "1")
								            <a class="btn btn-success" href="{{route('advertiseshowhidebyadmin',array('id'=>$getallAdvertise->id,'approvalVal'=>$getallAdvertise->status))}}" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('advertiseshowhidebyadmin',array('id'=>$getallAdvertise->id,'approvalVal'=>$getallAdvertise->status))}}" role="button" >
									            <i class="fa fa-thumbs-down"></i>
								            </a>
                                        @endif
								    </td>
								    
								    
								    <td>
								        @if ($getallAdvertise->advertiseBy != "2")
								        
								        @if ($getallAdvertise->adminStatus == "1")
								            <a class="btn btn-success" href="{{route('advertiseapprovalbyadmin',array('id'=>$getallAdvertise->id,'approvalVal'=>$getallAdvertise->adminStatus))}}" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('advertiseapprovalbyadmin',array('id'=>$getallAdvertise->id,'approvalVal'=>$getallAdvertise->adminStatus))}}" role="button" >
									            <i class="fa fa-thumbs-down"></i>
								            </a>
                                        @endif
                                        @endif
								    </td>
								    
								    
								
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
<div class="modal fade" id="AdvertiseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Create Advertise</center></h4>
      </div>
      <div class="modal-body">
        	<!--<form method="post" enctype="multipart/form-data">-->
        	    <form action="{{route('saveadminadvertise')}}" method="POST" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="adsTitle" id="" placeholder="Enter Advertise Title" required="" >
								
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <textarea class="form-control" name="adsContent" placeholder="Advertise Content" required=""></textarea>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control date-picker " placeholder="Select From Date" type="text" name="fromDate" id="fromDate" value="" required="" autocomplete="off">
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control date-picker " placeholder="Select To Date" type="text" name="toDate" id="toDate" value="" required="" autocomplete="off">
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span>IMG</label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="file" name="image" accept=".png, .jpg" required="">
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