<!DOCTYPE html>
<html>
<head>
  <title>
    Certificate Of Student
  </title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
<style>
  font-family: 'Work Sans', sans-serif;
</style>
</head>
<body>
<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
           
            <div class="col-md-6 col-sm-12 text-right">
              <div class="dropdown">
              </div>
            </div>
          </div>
        </div>
      
        <!-- Export Datatable start -->
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <div class="clearfix mb-20">
            <div class="pull-left">
              <h5 class="text-blue">Student Certificate</h5>
            </div>
          </div>
          <div class="row table-responsive ">
              @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        
                        
                        
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        
                        
                        
                        @if(count($allCertificateInfo) > 0)
                  <?php
                     foreach($allCertificateInfo as $getallCertificateInfo )
                                      {
                                ?>
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
                    <p> &nbsp;&nbsp;&nbsp; This is to certify that<strong> {{ $getallCertificateInfo->firstName }} {{ $getallCertificateInfo->middleName }} {{ $getallCertificateInfo->lastName }} </strong>has undergone Remotely Piloted Aircraft Systems (RPAS) training for<strong> _______ Category</strong> conducted at   _________(FTO name) from  ______  to _______.</p>
                    <p>{{ $getallCertificateInfo->firstName }} {{ $getallCertificateInfo->middleName }} {{ $getallCertificateInfo->lastName }} hereby attests with indemnity after verification and evaluation via simulated as well as real time flying training that   (Student name)   has successfully completed the course and displayed satisfactory theoretical knowledge and practical flying skill.</p>
                    
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
        
        
        <?php
                                          }
                                          ?>
                
                                  @endif
        
        
          </div>
        </div>
        <!-- Export Datatable End -->
      </div>
    
</div>
</div>
</body>
</html>

