@extends('website.layouts.app')
@section('title')
    About
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
                <h1 class="text-uppercase text-primary">Bond Content</h1>

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


                        <form action="{{ route('certificatesave') }}" method="POST" class="mb-5" enctype="multipart/form-data">
                          @csrf  
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-12">
                                    <label for="">Certificate Name<span class="text-primary">*</span></label>
                                    <input name="certificate" type="text" class="form-control" id=""
                                           placeholder="Provide Certificate Name" value="" required>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">    
                                <div class="form-group col-md-12">
                                    <label for="">Certificate Number<span class="text-primary">*</span></label>
                                    <input name="number" type="text" class="form-control" id=""
                                           placeholder="Provide Certificate Number" value="" required>
                                </div>

                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                                <div class="form-group col-md-6">
                                    <button type="reset" class="btn btn-primary w-100">Reset</button>
                                </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

   @endsection
@section('footer')
    @include('website.layouts.footer')
@endsection