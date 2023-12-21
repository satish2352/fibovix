@extends('website.layouts.app')
@section('title')
    Career
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<style>
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>

 <div class="row text-center justify-content-center" style="margin-top: 15px;">
            <div class="col-md-10">
                <h1 class="text-uppercase text-primary">CAREER</h1>

            </div>
        </div>
<div class="row position-relative">
        <div class="container my-5" style="max-width: 800px">
            <div class="col-md-12">
                <div class="card shadow" style="margin-bottom: 150px;">
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif 


                        <form action="{{ route('carriersave') }}" method="POST" class="mb-5" enctype="multipart/form-data">
                          @csrf  
                            <div class="form-row justify-content-between">
                                
                            <div class="form-group col-md-12">
                                <label for="">Name <span class="text-primary">*</span></label>
                                <input name="name" type="text" class="form-control" id="" placeholder="Provide Name" value="" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');" required="">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="">Email <span class="text-primary">*</span></label>
                                <input name="email" type="email" class="form-control" id="" placeholder="Provide Email Address" value="" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="">Mobile Number<span class="text-primary">*</span></label>
                                <input name="mobile" type="tel" class="form-control" id="" placeholder="Provide Mobile Number" value="" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" required="">
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="">Upload CV<span class="text-primary">*</span></label>
                                <input data-preview="#preview" type="file" name="cv" class="form-control" id="image" aria-describedby="fileHelp" required>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="">Position<span class="text-primary">*</span></label>
                                <select name="position" id="" class="form-control" data-live-search="true" required="" required="">
                                    <option value="">Select Position</option>
                                    <option value="Intern">Intern</option>
                                    <option value="Developer">Developer</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="reset" class="btn btn-primary w-100">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

<script type="text/javascript">
    $(document).ready(function(){
        //Image file input change event
        $("#image").change(function(){
            readImageData(this);//Call image read and render function
        });
    });
     
    function readImageData(imgData){
        if (imgData.files && imgData.files[0]) {
            var readerObj = new FileReader();
            
            readerObj.onload = function (element) {
                $('#preview_img').attr('src', element.target.result);
            }
            
            readerObj.readAsDataURL(imgData.files[0]);
        }
    }
</script>

   @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection