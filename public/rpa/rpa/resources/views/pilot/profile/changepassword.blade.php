@extends('pilot.layout.header')
@section('content')

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Change Password</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashpilot')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
							<h5 class="text-blue">Change Password</h5>
						</div>
					</div>
					
					<div class="row table-responsive " style="overflow: hidden;">
					 @foreach($particularProfile as $getparticularProfile )
					 
                     <form action="{{route('updatepilotchangepasswordverify')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-4">
                                        <label for="">Current Password <span class="text-primary">*</span></label>
                                        <input name="oldPassword" type="text" class="form-control" id="oldPassword"
                                               placeholder="Provide Current Password" value="" required>
                                               
                                        <input name="oldPasswordhidden" type="text" class="form-control" id="oldPasswordhidden"
                                               placeholder="Provide Old Password" value="{{ $getparticularProfile->password }}" hidden>
                                               
                                        <input name="mobile" type="text" class="form-control" id="oldPasswordhidden" value="{{ $getparticularProfile->mobile }}" hidden>
                                    </div>
                                    
                                   <div class="form-group col-md-4">
                                        <label for="">New Password <span class="text-primary">*</span></label>
                                        <input name="newPassword" type="text" class="form-control" id="newPassword"
                                               placeholder="Provide New Password" value="" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Confirm Password <span class="text-primary">*</span></label>
                                        <input name="confirmPassword" type="text" class="form-control" id="confirmPassword"
                                               placeholder="Provide Confirm Password" value="" required>
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
            
            var oldPassword = document.getElementById("oldPassword").value;
            var oldPasswordhidden = document.getElementById("oldPasswordhidden").value;
            if (oldPassword != oldPasswordhidden) 
            {
                alert("Current Password is Wrong. Please Enter Valid Password.");
                return false;
            }
            
            
            var newPassword = document.getElementById("newPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            if (newPassword != confirmPassword) 
            {
                alert("New Password and Confirm Password do not match.");
                return false;
            }
            
        }
</script>
@endsection


