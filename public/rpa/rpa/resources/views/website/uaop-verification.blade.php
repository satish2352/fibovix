@extends('website.layouts.app')
@section('title')
    Verify a UOAP 
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
  
   <div class="row text-center justify-content-center" style="margin-top: 15px;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">Verify a Pilot</h1>
      </div>
    @if(session('error'))
     <span class="alert alert-danger" role="alert">
         <strong>{{ session('error') }}</strong>
     </span>
    @endif
  </div>
  
    <div class="row justify-content-center position-relative">
        <div class="col-md-3" style="margin: 160px 0 !important;">
            <div class="container">
                <form action="{{route('uaopverification')}}" method="POST" class="mb-5">
                    @csrf
                    <div class="form-group">
                        <label for="">Enter UAOP Number</label>
                        <input name="uaop" type="text" class="form-control" id="" placeholder="Provide UAOP Number">
                    </div>
                    <button type="submit" class="btn btn-primary">Get Details</button>
                </form>
            </div>
        </div>
        <img src="{{asset('website/images/cloud_pattern_blue.png')}}" class="index-cloud-pattern">
    </div>

@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
