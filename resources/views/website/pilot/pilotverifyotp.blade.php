@extends('website.layouts.app')
@section('title')
    Verify OTP
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
        <div class="container my-5">
        <div class="row text-center justify-content-center">
            <div class="col-md-10">
                <h1 class=" text-uppercase text-primary">Verify Your Mobile Number </h1>

            </div>
        </div>
        <div class="row position-relative">
        <div class="container my-5" style="max-width: 800px">
            
            <div class="col-md-12">
                <div class="card shadow" style="margin-bottom: 150px;">
                    <div class="card-body">
                        <form action="{{route('pilototpverified')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                                 <div class="form-row justify-content-between">
                                     
                                <div class="form-group col-md-12">
                                    <label for=""><span class="text-primary">OTP Sent on Your Registered Mobile Number</span></label>
                                    <input name="otp" type="text" class="form-control" id="otp" placeholder="Enter OTP" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10">
                                    
                                    <input name="verifyotp" type="hidden" class="form-control" id="verifyotp" placeholder="Enter OTP" value="<?php echo $sentOtp; ?>" >
                                </div>
                            
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary w-100" onclick="return Validate()">Submit</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
      
    </div>
    
    
<script type="text/javascript">
        function Validate() {
            var otp = document.getElementById("otp").value;
            var verifyotp = document.getElementById("verifyotp").value;
            if (otp != verifyotp) 
            {
                alert("Invalid OTP, Please Enter Valid OTP");
                return false;
            }
            alert("OTP Verified Successfully");
            return true;
        }
</script>



@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
