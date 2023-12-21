@extends('admin.layout.header')
@section('content')

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>TPM</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">TPM List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#TPMModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#TPMModal">
								    Upload TPM
								</a>
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">TPM List</h5>
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
									<th>PDF</th>
									<th>Created Date</th>
									<th>Created By</th>
									<th>Show / Hide</th>
									<th>Admin Status</th>
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allTPM) > 0)
							    <?php
							    $cDate = date('d F Y');
									
                                    foreach($allTPM as $getallTPM )
                                      {
									    
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
									<td>{{ $getallTPM->title }}</td>
									<td>{{ $getallTPM->content }}</td>
									<?php
									if($getallTPM->pdf)
									{
									?>
									<td>
									    
									    <a href="<?php echo env('APP_URL');?>public/asset/TPM/Pdf/{{$getallTPM->pdf}}" class="btn btn-success dropdown" dropdown height="100" width="100" target="_blank">
									        <i class="fa fa-download"></i>
									    </a>
									    
									</td>
									<?php
									}
									else
									{
									?>
									  <td>
									      <img src="<?php echo env('APP_URL');?>public/asset/no-pdf.png" height="100" width="100">
									  </td>
									<?php
									}
									?>
									
									
									<td>{{ $getallTPM->createdOn }}</td>
									
									<td>
								        @if ($getallTPM->tpmBy == "0")
								            <span>Pilot</span>
								        @elseif ($getallTPM->tpmBy == "1")
								            <span>FTO</span>
								        @else
								            <span>Admin</span>
                                        @endif
								    </td>
								    
								    
									
									<td>
								        @if ($getallTPM->status == "1")
								            <a class="btn btn-success" href="{{route('tpmshowhidebyadmin',array('id'=>$getallTPM->id,'approvalVal'=>$getallTPM->status))}}" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('tpmshowhidebyadmin',array('id'=>$getallTPM->id,'approvalVal'=>$getallTPM->status))}}" role="button" >
									            <i class="fa fa-thumbs-down"></i>
								            </a>
                                        @endif
								    </td>
								    
								    
								    <td>
								        @if ($getallTPM->tpmBy != "2")
								        
								        @if ($getallTPM->adminStatus == "1")
								            <a class="btn btn-success" href="{{route('tpmapprovalbyadmin',array('id'=>$getallTPM->id,'approvalVal'=>$getallTPM->adminStatus))}}" role="button" >
									            <i class="fa fa-thumbs-up"></i>
								            </a>
								            
								        @else
								            <a class="btn btn-danger" href="{{route('tpmapprovalbyadmin',array('id'=>$getallTPM->id,'approvalVal'=>$getallTPM->adminStatus))}}" role="button" >
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
<div class="modal fade" id="TPMModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Upload TPM</center></h4>
      </div>
      <div class="modal-body">
        	<!--<form method="post" enctype="multipart/form-data">-->
        	    <form action="{{route('saveadmintpm')}}" method="POST" enctype="multipart/form-data">
					    @csrf
					    
					    
					    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="adsTitle" id="" placeholder="Enter TPM Title" required="" >
								
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <textarea class="form-control" name="adsContent" placeholder="TPM Content" required=""></textarea>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span>PDF</label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="file" name="pdf" accept=".pdf" required="">
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