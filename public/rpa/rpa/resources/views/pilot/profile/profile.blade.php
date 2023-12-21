@extends('pilot.layout.header')
@section('content')

<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashpilot')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Profile</li>
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
							<h5 class="text-blue">Profile</h5>
						</div>
					</div>
					<?php //dd($particularProfile); ?>
					<div class="row table-responsive " style="overflow: hidden;">
					 @foreach($particularProfile as $getparticularProfile )
					 <?php //dd($getparticularProfile); ?>
                     <form action="{{route('updatepilotprofile')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-4">
                                        <label for="">First Name <span class="text-primary">*</span></label>
                                        <input name="firstname" type="text" class="form-control" id=""
                                               placeholder="Provide First Name" value="{{ $getparticularProfile->firstName }}" required>
                                    </div>
                                    
                                   <div class="form-group col-md-4">
                                        <label for="">Middle Name <span class="text-primary">*</span></label>
                                        <input name="middlename" type="text" class="form-control" id=""
                                               placeholder="Provide Middle Name" value="{{ $getparticularProfile->middleName }}" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Last Name <span class="text-primary">*</span></label>
                                        <input name="lastname" type="text" class="form-control" id=""
                                               placeholder="Provide Last Name" value="{{ $getparticularProfile->lastName }}" required>
                                    </div>
                                </div>
                                
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-6">
                                        <label for="">Email Address <span class="text-primary">*</span></label>
                                        <input name="email" type="text" class="form-control" id=""
                                               placeholder="Provide Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="{{ $getparticularProfile->email }}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Mobile Number <span class="text-primary">*</span></label>
                                        <input name="mobile" type="text" class="form-control" id="" placeholder="Provide Mobile Number" value="{{ $getparticularProfile->mobile }}" pattern="^\d{10}$" readonly>
                                    </div>
                                </div>
                                
                                
                                <div class="form-row justify-content-between">
                                        <div class="form-group col-md-6">
                                            <label for="createInputState">State <span class="text-primary">*</span></label>
                                                <select name="state" id="stateId" class="selectpicker form-control " title="Choose..." data-live-search="true" onchange="getCity();" required>
                                                    <option value="">Choose State</option>
                                                    @foreach($stateList as $key=>$state)
                                                    <option value="{{$state->id}}" @if($state->id===$getparticularProfile->stateID) <?php  echo 'selected'; ?> @endif" >{{$state->name}}</option>
                                                    @endforeach                                
                                                </select>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <div id="cityNew">
                                            <label for="createInputState">City <span class="text-primary">*</span></label>
                                               <select name="city" id="city" class="form-control " title="Choose..." data-live-search="true" required>
                                                
                                                @foreach($cityList as $key=>$city)
                                                  
                                                <option value="{{$city->id}}" @if($city->id===$getparticularProfile->cityId ) <?php  echo 'selected'; ?> @endif" >{{$city->name}}</option>
                                                @endforeach                    
                                                </select>
                                                </div>
                                        </div>
                                </div>
                                
                                
                                   
                                <div class="form-row justify-content-between">
                                    
                                    <div class="form-group col-md-6">
                                         <label for="createInputState">FTO Name <span class="text-primary"></span></label>
                                           
                                            @if($getparticularProfile->ftoId===null || $getparticularProfile->ftoId===0)
                                            <select name="ftoId" class="selectpicker form-control " id="ftoId" title="Choose..." data-live-search="true" >
                                                <option value="">Select FTO</option>
                                                @foreach($FTOList as $key=>$FTOsList)
                                                <option value="{{$FTOsList->id}}" >{{$FTOsList->FTOName}}</option>
                                                @endforeach
                                            </select>
                                            @else
                                           
                                            <select name="ftoId" class="selectpicker form-control " id="ftoId" title="Choose..." data-live-search="true" >
                                                @foreach($FTOList as $key=>$FTOsList)
                                                <option value="">Select FTO</option>
                                                <option value="{{$FTOsList->id}}" @if($FTOsList->id==$getparticularProfile->ftoId) <?php  echo 'selected'; ?> @endif" >{{$FTOsList->FTOName}}</option>
                                                @endforeach
                                            </select>
                                         @endif
                                          
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6">
                                        
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-row justify-content-between">
                                    <?php $allProfession=explode(",",$getparticularProfile->proffession); ?>
                                    <div class="form-group col-md-6">
                                        <label for="createInputProfession">Profession <span class="text-primary">*</span></label>
                                                
                                        <select name="profession[]" class="selectpicker form-control " title="Choose..." data-live-search="true" multiple required>
                                            
                                            @foreach($professionList as $key=>$professionsList)
                                            <option value="{{$professionsList->id}}" <?php  if (in_array($professionsList->id, $allProfession)){  echo "selected";} ?> >{{$professionsList->profession}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6">
                                        <label for="">Gender <span class="text-primary">*</span></label>
                                        <select name="gender" class="form-control " required>
                                            <option value="0" @if($getparticularProfile->gender==0) {{'selected'}} @endif  >Male</option>
                                            <option value="1" @if($getparticularProfile->gender==1) {{'selected'}} @endif  >Female</option>
                                            <option value="2" @if($getparticularProfile->gender==2) {{'selected'}} @endif  >Other</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                
                            
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-6">
                                        <label for="createInputProfession">Pin Code<span class="text-primary">*</span></label>
                                        <input name="pincode" type="text" class="form-control" placeholder="Enter Pin Code" value="{{ $getparticularProfile->pincode }}" pattern="^\d{6}$" required>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6">
                                        
                                        <label for="createInputProfession">OAN Number </label>
                                                
                                        <input name="oannumber" type="text" class="form-control" value="{{ $getparticularProfile->oannumber }}" placeholder="OAN Number" >
                                    </div>
                                </div>
                                
                                <div class="form-row justify-content-between">
                                        <div class="form-group col-md-6">
                                            <label for="createInputProfession">Provide Id Of <span class="text-primary">*</span></label>
                                                    
                                            <select name="proofidof" class="form-control " title="Choose..." data-live-search="true" required onchange="checkDoc(this.value)">
                                                <option value="0" @if($getparticularProfile->proofidof==0) {{'selected'}} @endif  >Aadhar</option>
                                                <option value="1" @if($getparticularProfile->proofidof==1) {{'selected'}} @endif  >Passport</option>
                                            </select>
                                        </div>
                                        
                                        <!--style="display: none;"-->
                                        <div class="form-group col-md-6"  id="numberInput">
                                            <label for="">Provide ID Number<span class="text-primary">*</span></label>
                                            <input name="proffId" type="text" class="form-control" id="proffId" value="{{ $getparticularProfile->proffId }}"  required>
                                        </div>
                                </div>
                                
                                <div class="form-row justify-content-between">
                                        <div class="form-group col-md-6">
                                            <label for="createInputDescription">Experience in Brief</label>
                                            <textarea name="profession_desc" class="form-control" id="createInputDescription" placeholder="Provide Brief Description" rows="2" value="{{ $getparticularProfile->experience }}">{{ $getparticularProfile->experience }}</textarea>
                                        </div>
                                        
                                        <div class="form-group col-md-6"  id="numberInput">
                                            <label for="">Profile Photo</label>
                                            <br>
                                            
                                            <?php
        									if(!empty($getparticularProfile->profilePhoto))
        									{
        									?>
        									    <img src="<?php echo env('APP_URL');?>public/asset/Pilot/Image/{{$getparticularProfile->profilePhoto}}" height="70" width="70">
        								        
        									<?php
        									}
        									else
        									{
        									?>
        									      <img src="<?php echo env('APP_URL');?>public/asset/no-image-available.png" height="70" width="70">
        									<?php
        									}
        									?>
        									<input name="unlinkprofilePhoto" type="text" class="form-control" accept=".png, .jpg, .jpeg" value="<?php if(!empty($getparticularProfile->profilePhoto))
            									{
            									?>{{$getparticularProfile->profilePhoto}}
            									<?php 
            									} 
            									?>" hidden>
                                            <input name="profilePhoto" type="file" class="form-control" accept=".png, .jpg, .jpeg" >
                                            
                                        </div>
                                </div>
                                
                                <!--<div class="form-group ">-->
                                <!--    <label for="createInputDescription">Experience in Brief</label>-->
                                <!--    <textarea name="profession_desc" class="form-control" id="createInputDescription" placeholder="Provide Brief Description" rows="2" value="{{ $getparticularProfile->experience }}">{{ $getparticularProfile->experience }}</textarea>-->
                                <!--</div>-->
                            
                                </br>Thanks for Registering on RPA PILOT . We all know  that our Country is passing through a Crisis Due to COVID-19 and Central and State Government may need volunteers to fly Drones  for various purpose . If you want to provide service to the Nation please  
                                </br>
                                    @if($getparticularProfile->covid19==0)
                                        <input type="checkbox" name="chbox" id="chbox" checked>Tick here
                                    @else
                                        <input type="checkbox" name="chbox" id="chbox" >Tick here
                                    @endif
                                <br>
                                
                            <button type="submit" class="btn btn-primary" >Update</button>

                        </form>
                        @endforeach
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
		
</div>
</div>

<script>
    
    function getCity(){
            var url=APP_URL+'/getcityforupdate';
            let stateId = $('#stateId').val();
            // alert(stateId);
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
                    
                    $('#cityNew').empty();
                    $('#cityNew').append(response);
                    $('#cityNew').show();
                }
                
                
                
                
            });
    }
    
    
</script>

<script>
    function checkDoc(valueSelected)
    {
        if(valueSelected=='0')
        {
            $("#numberInput").show();
            $("#proffId").attr("placeholder","Provide Addhar Card Number");
        }
        else
        {
            $("#numberInput").show();
            $("#proffId").attr("placeholder","Provide Passport Number");
        }
    }
</script>
@endsection


