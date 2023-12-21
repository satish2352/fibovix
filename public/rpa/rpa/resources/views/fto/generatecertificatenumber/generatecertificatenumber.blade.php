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
								<h4>Create Certificate Number</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashfto')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Certificate Number List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#CourseModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#CourseModal">
								    Create Certificate Number
								</a>
								
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
							<h5 class="text-blue">Certificate Number List</h5>
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
									
									<th>Certificate</th>
									<th>Number</th>
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allGenerateCertificateNumber) > 0)
							    <?php
                                    foreach($allGenerateCertificateNumber as $getallGenerateCertificateNumber)
                                      {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
									<td>{{ $getallGenerateCertificateNumber->certificate }}</td>
									<td>{{ $getallGenerateCertificateNumber->number }}</td>
									
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
        <h4 class="modal-title" id="myModalLabel"><center>Create Certificate Number</center></h4>
      </div>
      <div class="modal-body">
        	<!--<form method="post" enctype="multipart/form-data">-->
        	    <form action="{{route('saveftocertificatenumber')}}" method="POST" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="certificate" id="" placeholder="Enter Certificate Name" required="" >
								
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="number" id="" placeholder="Enter Certificate Number" required="" >
								
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









