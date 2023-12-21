@extends('fto.layout.header')
@section('content')

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Photo</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashfto')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Photo List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#PhotoModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#PhotoModal">
								    Upload Photo
								</a>
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Photo List</h5>
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
									<th>Title</th>
									<th>Image</th>
									<th>Uploaded On</th>
									<th>Admin Status</th>
									<th>Show / Hide</th>
								
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allPhotoGallery) > 0)
							    <?php
							    $cDate = date('d F Y');
									
                                    foreach($allPhotoGallery as $getallPhoto )
                                      {
									    
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
								    <td>{{ $getallPhoto->title}}</td>
									<?php
									if($getallPhoto->image)
									{
									?>
									<td>
									    <img src="<?php echo env('APP_URL');?>public/asset/PhotoGallery/Image/{{$getallPhoto->image}}" height="100" width="100">
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
									
									<td>{{ $getallPhoto->uploadedOn }}</td>
									<td>
								        @if ($getallPhoto->adminStatus == "1")
								            <span class="text-success">Approved</span>
								        @else
								            <span class="text-danger">DisApproved</span>
                                        @endif
								    </td>
									
									<td>
								        @if ($getallPhoto->status == "1")
								            <a class="btn btn-success" href="{{route('photoshowhidebyfto',array('id'=>$getallPhoto->id,'approvalVal'=>$getallPhoto->status))}}" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('photoshowhidebyfto',array('id'=>$getallPhoto->id,'approvalVal'=>$getallPhoto->status))}}" role="button" >
									            <i class="fa fa-thumbs-down"></i>
								            </a>
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
<div class="modal fade" id="PhotoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Upload Photo</center></h4>
      </div>
      <div class="modal-body">
        	<!--<form method="post" enctype="multipart/form-data">-->
        	    <form action="{{route('saveftophoto')}}" method="POST" enctype="multipart/form-data">
					    @csrf
					    
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="title" required="">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="file" name="image" accept=".png, .jpg" required="">
							</div>
						</div>
						
						
					
					
				        <div class="modal-footer">
                           <button class="btn btn-success" type="submit" >
		                        Submit
                           </button>
          
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>	
						
 </form>
      </div>
      
    </div>
  </div>
</div>