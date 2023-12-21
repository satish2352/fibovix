@extends('website.layouts.app')
@section('title')
    About
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    <div class="container my-5">
        <div class="row justify-content-center" style="margin: 100px 0;">
            <div class="col-md-6">
                <img src="{{asset('website/images/coming-soon.png')}}">
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
