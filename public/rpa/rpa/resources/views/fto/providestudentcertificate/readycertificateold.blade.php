@extends('fto.layout.header')
@section('content')
        <div class="row text-center justify-content-center" style="margin-top: 15px;">
            <div class="col-md-10">
                <h1 class=" text-uppercase text-primary">Certificate</h1>

            </div>
        </div>

        <div class="row position-relative">
          <div class="container my-5" style="max-width: 1000px">
            <div class="col-md-12">
                <div class="card box-shadow-1 mb-2" style="margin-bottom: 150px;">
                    <div class="card-body">
                      <div class="row display-8">
                        <div class="col-md-6">
                             <div class="row">
                               <label>Date: ___________</label>
                             </div>
                             <div class="row">
                               <label>Certificate No.: ______________</label>
                             </div>
                             <div class="row">
                               <label>Photo ID Type:  ______________</label>
                             </div>
                             <div class="row">
                               <label>Photo ID Number:____________</label>
                             </div>
                        </div>
                    <div class="col-md-6">
                          <center><img src="images/img_20200311.png" width="150" height="150"></center><br>
                          <h5 style=" text-align:center;border: 1px solid black; padding: 30px; margin-right: 100px;margin-left: 100px;"></h5>  
                          <small>(Affix student photo above & student signature inside the box)</small>
                    </div>
               </div>
            <div class="display-7">
                    <p> &nbsp;&nbsp;&nbsp; This is to certify that<strong>____(Student name)</strong>____has undergone Remotely Piloted Aircraft Systems (RPAS) training for<strong> _______ Category</strong> conducted at   _________(FTO name) from  ______  to _______.</p>
                    <p>__________________(FTO name) hereby attests with indemnity after verification and evaluation via simulated as well as real time flying training that   (Student name)   has successfully completed the course and displayed satisfactory theoretical knowledge and practical flying skill.</p>
                    
            </div>
            <center>
            <div class="row display-8">
                    <div class="col-md-4">
                           ___________  <br>                                
                        Accountable Manager
                    </div>
                    <div class="col-md-4">
                           ___________  <br>                                
                             Dy.CFI    
                    </div>
                    <div class="col-md-4">
                           ___________  <br>                                
                           RPAS Trainer
                    </div>
                    
            </div>
            </center>
        </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
