@extends('website.layouts.app')
@section('title')
    FTO Registration 
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

    <div class="row text-center justify-content-center" style="margin-top: 15px;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">Register Yourself as FTO</h1>

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
                        <form action="{{route('saveftoregform')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">FTO Name <span class="text-primary">*</span></label>
                                    <input name="ftoname" type="text" class="form-control" id="" placeholder="Provide FTO Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">FTO Logo<span class="text-primary">*</span></label>
                                    <input name="ftoImage" type="file" class="form-control" accept==".png, .jpg, .jpeg" required>
                                </div>
                            </div>
                            
                            
                            <center><h5>Representative Name</h5></center>
                            <div class="form-row justify-content-between" >
                                
                                    <div class="form-group col-md-4">
                                        <label for="">First Name <span class="text-primary"></span></label>
                                        <input name="firstname" type="text" class="form-control" id=""
                                               placeholder="Provide First Name" pattern="[a-zA-Z ]+" value="" >
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="">Middle Name <span class="text-primary"></span></label>
                                        <input name="middlename" type="text" class="form-control" id=""
                                               placeholder="Provide Middle Name" pattern="[a-zA-Z ]+" value="" >
                                    </div>
    
                                    <div class="form-group col-md-4">
                                        <label for="">Last Name <span class="text-primary"></span></label>
                                        <input name="lastname" type="text" class="form-control" id=""
                                               placeholder="Provide Last Name" pattern="[a-zA-Z ]+" value="" >
                                    </div>
                                
                            </div>

                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">Email Address <span class="text-primary"></span></label>
                                    <input name="email" type="text" class="form-control" id=""
                                           placeholder="Provide Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Mobile Number </label>
                                    <input name="mobile" type="text" class="form-control" id=""
                                           placeholder="Provide Mobile Number" pattern="^\d{10}$" >
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">Password <span class="text-primary">*</span></label>
                                    <input name="password" type="password" class="form-control" id="password"
                                           placeholder="Provide Password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Password Confirmation<span class="text-primary">*</span></label>
                                    <input name="password_confirmation" type="password" class="form-control" id="confpassword"
                                           placeholder="Provide Password Confirmation" required>
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
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="">Addhar ID <span class="text-primary">*</span></label>-->
                            <!--        <input name="aadharNo" type="text" class="form-control" id=""-->
                            <!--               placeholder="Provide aadhar ID" value="" required>-->
                            <!--    </div>-->
                                
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="createInputProfession">Category <span-->
                            <!--                class="text-primary">*</span></label>-->
                            <!--        <select name="category" id="category" class="form-control "-->
                            <!--                title="Choose..."-->
                            <!--                data-live-search="true" required="" onchange="ShowHideDiv()" id="category">-->
                            <!--            <option value="" >Select Category</option>-->
                            <!--            <option value="1">Nano (Below 250gms)</option>-->
                            <!--            <option value="2">Micro (250gms-2kg)</option>-->
                            <!--            <option value="3">Small (2-25Kg)</option>-->
                            <!--            <option value="4">Medium (25kg-150kg)</option>-->
                            <!--            <option value="5">Large (Above 150kg)</option>-->
                            <!--        </select>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                        <!--<div style="display: none" id="requiredDiv">-->
                        <!--    <div class="form-row justify-content-between">-->
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="">UAOP Number <span class="text-primary">*</span></label>-->
                        <!--            <input name="uaopnumber" type="text" class="form-control" id="" placeholder="Provide UAOP Number" value="" >-->
                        <!--        </div>-->
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="">UAOP Validity <span class="text-primary">*</span></label>-->
                        <!--            <input name="uaopvalidity" type="date" class="form-control" id="" value="" >-->
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
                        <!--            <input name="npnt" type="text" class="form-control" id=""-->
                        <!--                   placeholder="Provide NPNT" value="" >-->
                        <!--        </div>-->
                                
                        <!--        <div class="form-group col-md-6">-->
                        <!--            <label for="createInputState">FTO Name <span class="text-primary">*</span></label>-->
                        <!--            <select name="ftoId" class="selectpicker form-control " title="Choose..." data-live-search="true" >-->
                                        
                        <!--                <option value="1" >Nandkishor</option>-->
                        <!--                <option value="2" >Satish</option>-->
                        <!--                <option value="3" >Nilesh</option>-->
                        <!--            </select>-->
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
                            <!--        <label for="createInputProfession">Profession <span-->
                            <!--                class="text-primary">*</span></label>-->
                            <!--        <select name="profession" id="createInputProfession" class="form-control " title="Choose..." data-live-search="true" required>-->
                            <!--            <option value="1" >Cinematographer</option>-->
                            <!--            <option value="2" >Droner Racer</option>-->
                            <!--            <option value="3" >Wedding Droner</option>-->
                            <!--        </select>-->
                            <!--    </div>-->
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
                                <label for="createInputDescription">Address Line 1<span class="text-primary">*</span></label>
                                <textarea name="address1" class="form-control" id="createInputDescription" placeholder="Provide Your Address" rows="1" required></textarea>
                            </div>
                            
                            <div class="form-group ">
                                <label for="createInputDescription">Address Line 2<span class="text-primary"></span></label>
                                <textarea name="address2" class="form-control" id="createInputDescription" placeholder="Provide Your Address" rows="1" ></textarea>
                            </div>
                            
                            <div class="form-group ">
                                <label for="createInputDescription">Address Line 3<span class="text-primary"></span></label>
                                <textarea name="address3" class="form-control" id="createInputDescription" placeholder="Provide Your Address" rows="1" ></textarea>
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
                                
                                <div class="form-group col-md-6">
                                    <label for="createInputState">District </label>
                                    <input name="district" type="text" class="form-control" placeholder="Provide District Name" >
                                </div>
                            </div>
                            
                            <div id="city"></div>
                            
                            
                            
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="">Pin Code <span class="text-primary">*</span></label>
                                    <input name="pinCode" type="text" class="form-control" id=""
                                           placeholder="Enter Pin Code" pattern="^\d{6}$" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <!--<label for="">FTO Image<span class="text-primary">*</span> </label>-->
                                    <!--<input name="ftoImage" type="file" class="form-control" required>-->
                                </div>
                            </div>
                            
                            
                            <div class="form-group ">
                                <label for="createInputDescription">Description<span class="text-primary">*</span></label>
                                <textarea name="description" class="form-control" id="createInputDescription" placeholder="Description" rows="4" required></textarea>
                            </div>
                            
                            
                            
                            <!--<div class="form-row justify-content-between">-->
                            <!--    <div class="form-group col-md-6">-->
                            <!--        <label for="">Zip Code <span class="text-primary">*</span></label>-->
                            <!--        <input name="zipCode" type="text" class="form-control" id=""-->
                            <!--               placeholder="Enter Zip Code" pattern="^\d{6}$" required>-->
                            <!--    </div>-->
                            <!--    <div class="form-group col-md-6">-->
                                    <!--<label for="">FTO Image<span class="text-primary">*</span> </label>-->
                                    <!--<input name="ftoImage" type="file" class="form-control" required>-->
                            <!--    </div>-->
                            <!--</div>-->

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

                            <button type="submit" class="btn btn-primary" onclick="return Validate()">Create</button>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <img src="{{asset('website/images/cloud_pattern_blue.png')}}" class="index-cloud-pattern">
    </div>
    
    
    
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
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
            
        }
</script>




<script>
    
    function getCity(){
            var url=APP_URL+'/getcity';
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
                    $('#city').empty();
                    $('#city').append(response);
                    $('#city').show();
                }
            });
    }
    
    
</script>

    
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection

