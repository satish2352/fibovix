@extends('website.layouts.app')
@section('title')
    Pilot Registeration 
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    
        
    <div class="row text-center justify-content-center" style="margin-top: 15px;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">Register Yourself as Pilot</h1>

      </div>
    @if(session('success'))
     <span class="alert alert-success" role="alert">
         <strong>{{ session('success') }}</strong>
     </span>
    @endif
  </div>
  <div class="row position-relative">
  <div class="container my-5" style="max-width: 800px">
            <div class="col-md-12">
                <div class="card shadow" style="margin-bottom: 150px;">
                    <div class="card-body">
                        <form action="{{route('savepilotregform')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row justify-content-between">

                                <!--<div class="form-group col-md-2">-->
                                <!--    <label for="">Prefix <span class="text-primary">*</span></label>-->
                                <!--    <select name="prefix" class="form-control">-->
                                <!--        <option value="1" >Mr.</option><option value="2" >Mrs.</option><option value="3" >Miss</option><option value="4" >Ms.</option><option value="5" >Dr.</option><option value="6" >Prof.</option><option value="7" >Rev.</option>                                        </option>-->
                                <!--    </select>-->
                                <!--</div>-->

                                <div class="form-group col-md-4">
                                    <label for="">First Name <span class="text-primary">*</span></label>
                                    <input name="firstname" type="text" class="form-control" id=""
                                           placeholder="Provide First Name" value="" required>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="">Middle Name <span class="text-primary">*</span></label>
                                    <input name="middlename" type="text" class="form-control" id=""
                                           placeholder="Provide Middle Name" value="" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">Last Name <span class="text-primary">*</span></label>
                                    <input name="lastname" type="text" class="form-control" id=""
                                           placeholder="Provide Last Name" value="" required>
                                </div>
                            </div>

                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">Email Address <span class="text-primary">*</span></label>
                                    <input name="email" type="text" class="form-control" id=""
                                           placeholder="Provide Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Mobile Number <span class="text-primary">*</span></label>
                                    <input name="mobile" type="text" class="form-control" id="" placeholder="Provide Mobile Number" pattern="^\d{10}$" required>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">Password <span class="text-primary">*</span></label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Provide Password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Password Confirmation<span class="text-primary">*</span></label>
                                    <input name="password_confirmation" type="password" class="form-control" id="confpassword"
                                           placeholder="Provide Password Confirmation" required>
                                </div>
                            </div>
                            
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="createInputState">State <span class="text-primary">*</span></label>
                                    <select name="state" id="stateId" class="selectpicker form-control " title="Choose..." data-live-search="true" onchange="getCity();" required>
                                        <option value="">Choose State</option>
                                        @foreach($stateList as $key=>$state)
                                        <option value="{{$state->id}}" >{{$state->name}}</option>
                                        @endforeach                                
                                    </select>
                                </div>
                                <div class="form-group col-md-6" >
                                <div id="city"></div>
                                </div>
                            </div>
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="createInputProfession">Pin Code<span class="text-primary">*</span></label>
                                    <input name="pincode" type="text" class="form-control" placeholder="Enter Pin Code" pattern="^\d{6}$" required>
                                </div>
                                
                                
                                <div class="form-group col-md-6">
                                    
                                    <label for="createInputProfession">OAN Number </label>
                                            
                                    <input name="oannumber" type="text" class="form-control" placeholder="OAN Number" >
                                </div>
                                
                            </div>
                            
                             <div class="form-group col-md-12" >
                                <label for="createInputState">FTO Name <span class="text-primary"></span></label>
                                    <select name="ftoId" class="selectpicker form-control " id="ftoId" title="Choose..." data-live-search="true" >
                                        <option value="">Select FTO</option>
                                        @foreach($FTOList as $key=>$FTOsList)
                                        <option value="{{$FTOsList->id}}" >{{$FTOsList->FTOName}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            
                            
                            
                            
                            
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="createInputProfession">Profession <span
                                            class="text-primary">*</span></label>
                                            
                                    <select name="profession[]" class="selectpicker form-control " title="Choose..." data-live-search="true" multiple required>
                                        
                                        @foreach($professionList as $key=>$professionsList)
                                        <option value="{{$professionsList->id}}" >{{$professionsList->profession}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                
                                <div class="form-group col-md-6">
                                    <label for="">Gender <span class="text-primary">*</span></label>
                                    <select name="gender" class="form-control " required>
                                        <option value="">Select Gender</option>
                                        <option value="0" >Male</option>
                                        <option value="1" >Female</option>
                                        <option value="2" >Other</option>
                                    </select>
                                </div>
                                
                            </div>
                            
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="createInputProfession">Provide Id Of <span
                                            class="text-primary">*</span></label>
                                            
                                    <select name="proofidof" class="form-control " title="Choose..." data-live-search="true" required onchange="checkDoc(this.value)">
                                        <option value="">Select Id Of</option>
                                        <option value="0" >Aadhar</option>
                                        <option value="1" >Passport</option>
                                    </select>
                                </div>
                                
                                
                                <div class="form-group col-md-6" style="display: none;" id="numberInput">
                                    <label for="">Provide ID Number<span class="text-primary">*</span></label>
                                    <input name="proffId" type="text" class="form-control" id="proffId"  required>
                                </div>
                                
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            <!--<div class="form-row justify-content-between">-->
                            <!--    <div class="form-group col-md-12">-->
                            <!--        <label for="">Addhar ID <span class="text-primary">*</span></label>-->
                            <!--        <input name="aadhar" type="text" class="form-control" id=""-->
                            <!--               placeholder="Provide aadhar ID" value="">-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <!--<div class="form-row justify-content-between">-->
                                <!--<div class="form-group col-md-6">-->
                                <!--    <label for="">Aadhar ID </label>-->
                                <!--    <input name="aadharNo" type="text" class="form-control" id=""-->
                                <!--           placeholder="Provide aadhar ID" pattern="^\d{12}$" >-->
                                <!--</div>-->
                                
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="createInputProfession">Category <span-->
                            <!--                class="text-primary">*</span></label>-->
                            <!--        <select name="category" class="form-control " title="Choose..." data-live-search="true" required="" onchange="ShowHideDiv()" id="category">-->
                                       
                            <!--            <option value="">Select Category</option>-->
                                            <!--@foreach($CategoryList as $key=>$CategoryList)-->
                                        <!--<option value="{{$CategoryList->id}}*{{$CategoryList->addInfoReq}}" >{{$CategoryList->category}}</option>-->
                                            <!--@endforeach-->
                            <!--        </select>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                        <!--<div style="display: none" id="requiredDiv">-->
                        <!--    <div class="form-row justify-content-between">-->
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="">UAOP Number <span class="text-primary">*</span></label>-->
                        <!--            <input name="uaopnumber" type="text" class="form-control" id="uaopnumber" placeholder="Provide UAOP Number"  >-->
                        <!--        </div>-->
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="">UAOP Validity <span class="text-primary">*</span></label>-->
                        <!--            <input name="uaopvalidity" type="date" class="form-control" id="uaopvalidity"  >-->
                        <!--        </div>-->
                        <!--    </div>-->
                            
                            
                        <!--    <div class="form-row justify-content-between">-->
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="">UIN Number </label>-->
                        <!--            <input name="uin" type="text" class="form-control" id="" placeholder="Provide UIN Number" value="" >-->
                        <!--        </div>-->
                                
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="">UIN Validity </label>-->
                        <!--            <input name="uinvalidity" type="date" class="form-control" id="" value="">-->
                        <!--        </div>-->
                        <!--    </div>-->
                            
                            
                        <!--    <div class="form-row justify-content-between">-->
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="">NPNT <span class="text-primary">*</span></label>-->
                        <!--            <input name="npnt" type="text" class="form-control" id="npnt"-->
                        <!--                   placeholder="Provide NPNT" >-->
                        <!--        </div>-->
                                
                        <!--        <div class="form-group col-md-6">-->
                                    <!--<label for="createInputState">FTO Name <span class="text-primary">*</span></label>-->
                                    <!--<select name="ftoId" class="selectpicker form-control " id="ftoId" title="Choose..." data-live-search="true" >-->
                                    <!--    <option value="">Select FTO</option>-->
                                    <!--    @foreach($FTOList as $key=>$FTOsList)-->
                                    <!--    <option value="{{$FTOsList->id}}" >{{$FTOsList->firstName}}</option>-->
                                    <!--    @endforeach-->
                                    <!--</select>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>   -->
                            

                            <!--<div class="form-row justify-content-between">-->
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="">Drone Serial No <span class="text-primary">*</span></label>-->
                            <!--        <input name="d_serial_no" type="text" class="form-control" id=""-->
                            <!--               placeholder="Provide Drone Serial Number" value="" required>-->
                            <!--    </div>-->
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="createInputProfession">DAN (Drone Acknowledge Number) Number <span-->
                            <!--                class="text-primary">*</span></label>-->
                            <!--        <input name="dan_no" type="text" class="form-control" id="" placeholder="Provide DAN Number" value="" required>-->
                            <!--    </div>-->
                            <!--</div>-->

                            
                            
                            <!--<div class="form-row justify-content-between">-->
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="">Drone Model No <span class="text-primary">*</span></label>-->
                            <!--        <input name="drnModelNumber" type="text" class="form-control" id=""-->
                            <!--               placeholder="Provide Drone Serial Number" value="" required>-->
                            <!--    </div>-->
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="createInputProfession">Drone Manufacturar Name <span-->
                            <!--                class="text-primary">*</span></label>-->
                            <!--        <input name="drnManufacturar" type="text" class="form-control" id="" placeholder="Provide Drone Manufacturar Name" value="" required>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            
                            <!--<div class="form-row justify-content-between">-->
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="">Is Insurance Available? <span class="text-primary">*</span></label>-->
                            <!--        <select name="insurance" id="insurance" class="form-control " title="Choose..." data-live-search="true" onchange="ShowHideInsDiv()" required>-->
                            <!--            <option value="" >Select</option>-->
                            <!--            <option value="1" >Yes</option>-->
                            <!--            <option value="0" >No</option>-->
                            <!--        </select>-->
                            <!--    </div>-->
                                <!--<div style="display: none" id="requiredInsDiv">-->
                            <!--    <div class="form-group col-md-6" style="display: none" id="requiredInsDiv">-->
                            <!--        <label for="createInputProfession"> Insurance Validity<span-->
                            <!--                class="text-primary"> *</span></label>-->
                            <!--        <input name="insVal" type="date" class="form-control" id="insVal"  >-->
                            <!--    </div>-->
                                <!--</div>-->
                            <!--</div>-->
                            
                            
                            
                            
                            <!--<div class="form-row justify-content-between">-->
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="createInputProfileImage">Profile Image</label>-->
                            <!--        <div class="custom-file mb-1">-->
                            <!--            <input name="image" type="file" class="custom-file-input"-->
                            <!--                   id="createInputProfileImage" accept="image/*">-->
                            <!--            <label class="custom-file-label" for="createInputProfileImage">Choose-->
                            <!--                file</label>-->
                            <!--        </div>-->
                            <!--    </div>-->


                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="createInputPilotCertificate">Pilot Certificate (PDF)</label>-->
                            <!--        <div class="custom-file mb-1">-->
                            <!--            <input name="pilot_certificate" type="file" class="custom-file-input"-->
                            <!--                   id="createInputPilotCertificate">-->
                            <!--            <label class="custom-file-label" for="createInputPilotCertificate">Choose-->
                            <!--                file</label>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <div class="form-group ">
                                <label for="createInputDescription">Experience in Brief</label>
                                <textarea name="profession_desc" class="form-control" id="createInputDescription"
                                          placeholder="Provide Brief Description"
                                          rows="4"></textarea>
                            </div>

                            <!--<div class="form-group ">-->
                            <!--    <label for="createInputDescription">Upload YouTube Links</label>-->
                            <!--    <input name="media[]" type="text" class="form-control mb-2" id=""-->
                            <!--           placeholder="Youtube Link #1">-->
                            <!--    <input name="media[]" type="text" class="form-control mb-2" id=""-->
                            <!--           placeholder="Youtube Link #2">-->
                            <!--    <input name="media[]" type="text" class="form-control mb-2" id=""-->
                            <!--           placeholder="Youtube Link #3">-->
                            <!--    <input name="media[]" type="text" class="form-control mb-2" id=""-->
                            <!--           placeholder="Youtube Link #4">-->
                            <!--    <input name="media[]" type="text" class="form-control mb-2" id=""-->
                            <!--           placeholder="Youtube Link #5">-->
                            <!--</div>-->
                             </br>Thanks for Registering on RPA PILOT . We all know  that our Country is passing through a Crisis Due to COVID-19 and Central and State Government may need volunteers to fly Drones  for various purpose . If you want to provide service to the Nation please  
                            </br>
                            <input type="checkbox" name="chbox" id="chbox">Tick here
                            <br>
                            <button type="submit" class="btn btn-primary" onclick="return Validate()">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('website/images/cloud_pattern_blue.png')}}" class="index-cloud-pattern">
    </div>
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>

<script>
    
    function getCity(){
            var url=APP_URL+'/getcity';
            let stateId = $('#stateId').val();
            //alert(stateId); 
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
                    $('#city').empty();
                    $('#city').append(response);
                    $('#city').show();
                }
            });
    }
    
    
</script>


<script type="text/javascript">
    function ShowHideDiv() 
    {
        var category = document.getElementById("category").value;
        var categoryId=category.toString().split("*");
        var requiredDiv = document.getElementById("requiredDiv");
        requiredDiv.style.display = categoryId[1] == "1" ? "block" : "none";
    }
</script> 


<script type="text/javascript">
    function ShowHideInsDiv() 
    {
        var insurance = document.getElementById("insurance").value;
        // var categoryId=category.toString().split("*");
        var requiredInsDiv = document.getElementById("requiredInsDiv");
        requiredInsDiv.style.display = insurance == "1" ? "block" : "none";
    }
</script> 



<script type="text/javascript">
        function Validate() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confpassword").value;
            if (password != confirmPassword) 
            {
                alert("Passwords do not match.");
                return false;
            }

        var category = document.getElementById("category").value;
        var categoryId=category.toString().split("*");
        
        if(categoryId[1]==1)
        {
           
          var uaopnumber=$("#uaopnumber"). val();
           
            if(uaopnumber=='' || uaopnumber==null)
               {
                 alert("Enter UAOP Name");
                 return false;
               }
               
               
           var uaopvalidity=$("#uaopvalidity"). val();
           
            if(uaopvalidity=='' || uaopvalidity==null)
               {
                 alert("Select UAOP Validity");
                 return false;
               }
               
               
               
               var npnt=$("#npnt"). val();
           
            if(npnt=='' || npnt==null)
               {
                 alert("Enter NPNT");
                 return false;
               }
               
               
               
               var ftoId=$("#ftoId"). val();
           
            if(ftoId=='' || ftoId==null)
               {
                 alert("Select FTO Name");
                 return false;
               }
            
        }
        
            return true;
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
@section('footer')
    @include('website.layouts.footer')
@endsection

