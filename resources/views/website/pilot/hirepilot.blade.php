@extends('website.layouts.app')
@section('title')
    Hire Pilot
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
        <div class="container my-5">
        <div class="row text-center justify-content-center">
            <div class="col-md-10">
                <h1 class=" text-uppercase text-primary">Hire Pilot</h1>

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

                        
                        
                        <form action="{{route('hirepilotsave')}}" method="POST" class="mb-5" enctype="multipart/form-data">
                            @csrf
                                 <div class="form-row justify-content-between">
                                
                                <div class="form-group col-md-12">
                                    <label for="">Hire Pilot<span class="text-primary">*</span></label>
                                   
                                     
                                    <select name="pilotId" id="" class="form-control " data-live-search="true" required="">
                                        <option value="">Select</option>
                                        @foreach($allPilots as $getallPilots )
                                        <option value="{{ $getallPilots->pilotIdFInal}}">{{ $getallPilots->firstName}} {{$getallPilots->middleName}} {{$getallPilots->lastName }}</option>
                                        @endforeach
                                    </select>
                                
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Name <span class="text-primary">*</span></label>
                                    <input name="fullname" type="text" class="form-control" id=""
                                           placeholder="Provide Name" value="" required="" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Email <span class="text-primary">*</span></label>
                                    <input name="email" type="email" class="form-control" id="" placeholder="Provide Email Address" value="" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Mobile Number<span class="text-primary">*</span></label>
                                    <input name="mobile" type="text" class="form-control" id="" placeholder="Provide Mobile Number" value="" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" required="">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Reason<span class="text-primary">*</span></label>
                                    <input name="reason" type="text" class="form-control" id="" placeholder="Provide Reason" value="" required="">
                                </div>
                            
                                <div class="form-group col-md-12">
                                    <label for="">Description<span class="text-primary">*</span></label>
                                    <textarea name="details" class="form-control" id="" placeholder="Provide Brief Description / Details " rows="8" required=""></textarea>
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
      
    </div>
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
