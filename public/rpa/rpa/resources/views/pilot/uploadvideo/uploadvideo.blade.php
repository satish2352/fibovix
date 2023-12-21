@extends('pilot.layout.header')
@section('content')

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Video</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashpilot')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Video List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#VideoModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#VideoModal">
								    Upload Video
								</a>
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Video List</h5>
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
									<th>URL</th>
									<th>Uploaded On</th>
									<th>Admin Status</th>
									<th>Show / Hide</th>
								
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allVideoGallery) > 0)
							    <?php
                                    foreach($allVideoGallery as $getallVideo )
                                      {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
								    <td>
									    {{ $getallVideo->title }}
									</td>
									<td>
									    {{ $getallVideo->url }}
									</td>
									
									<td>{{ $getallVideo->uploadedOn }}</td>
									
									
									<td>
								        @if ($getallVideo->adminStatus == "1")
								            <span class="text-success">Approved</span>
								        @else
								            <span class="text-danger">DisApproved</span>
                                        @endif
								    </td>
									
									<td>
								        @if ($getallVideo->status == "1")
								            <a class="btn btn-success" href="{{route('videoshowhidebypilot',array('id'=>$getallVideo->id,'approvalVal'=>$getallVideo->status))}}" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('videoshowhidebypilot',array('id'=>$getallVideo->id,'approvalVal'=>$getallVideo->status))}}" role="button" >
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
<div class="modal fade" id="VideoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Upload Video</center></h4>
      </div>
      <div class="modal-body">
        
        <form action="{{route('savevideo')}}" method="POST" enctype="multipart/form-data">
					    @csrf
					    
					    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="title" placeholder="Enter Title" required="">
								
							</div>
						</div>
						
					    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="url" name="url" placeholder="Enter YouTube Video URL" pattern="https?://.+" required="">
								<input class="form-control" type="hidden" name="vdId" id="vdId">
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


<script>

function convert()
{
    url =$("#vdInpId").val();
    VID_REGEX = /(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/
   
    var urlNew="https://www.youtube.com/embed/"+url.match(VID_REGEX)[1];
    $("#vdId").val(urlNew);
}
</script>