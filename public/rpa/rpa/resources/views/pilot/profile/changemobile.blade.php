@extends('pilot.layout.header')
@section('content')

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Mobile Number Change</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashpilot')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mobile Number Change</li>
								</ol>
								
    
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<!--<a href="#EventModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#EventModal">-->
								<!--    Create Event-->
								<!--</a>-->
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Mobile Number Change</h5>
						</div>
					</div>
					<?php //dd($particularProfile); ?>
					<div class="row table-responsive" style="overflow: hidden;">
					 @foreach($particularProfile as $getparticularProfile )
					 <?php //dd($getparticularProfile); ?>
                     <form action="{{route('updatepilotchangemobile')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row justify-content-between">
                                    <div class="form-group col-md-12">
                                      <center> <label for=""><span class="text-primary">* OTP Will Send on Your Mobile Number</span></label></center>
                                    </div>
                            </div>
                                
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-4">
                                        
                                    </div>
                                    
                                   <div class="form-group col-md-4">
                                       
                                        <label for="">New Mobile Number <span class="text-primary">*</span></label>
                                        <input name="newMobile" type="text" class="form-control" id="newMobile"
                                               placeholder="Provide New Mobile Number" value="" pattern="^\d{10}$" required>
                                               
                                        <input name="oldMobile" type="text" class="form-control" id="oldMobile"
                                               placeholder="Provide New Password" value="{{$getparticularProfile->mobile}}" hidden>
                                    </div>
                                    <div class="form-group col-md-4">
                                        
                                    </div>
                                </div>
                               <center>
                            <button type="submit" class="btn btn-primary" onclick="return Validate()">Change</button>
                            </center>

                        </form>
                        @endforeach
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
		
</div>
</div>



<script type="text/javascript">
        function Validate() 
        {
            var oldMobile = document.getElementById("oldMobile").value;
            var newMobile = document.getElementById("newMobile").value;
            if (oldMobile == newMobile) 
            {
                alert("New Mobile Number And Current Mobile Number are Same. Please Enter Another Mobile Number.");
                return false;
            }
            
            
        }
</script>
@endsection


