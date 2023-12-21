@extends('website.layouts.app')
@section('title')
    DGCA Press Release
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

@inject('CommonService', 'App\Http\Controllers\Common\CommonController')

<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
  .table-striped tbody tr:nth-of-type(2n+1) {

    background-color: #FEAD69;

}
</style>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="row text-center justify-content-center" style="margin-top: 15px;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">DGCA Press Release</h1>

      </div>
  </div>
    
<div class="container my-5">
    
    <div class="card box-shadow-1 mb-2">
    <div class="card-body">
      
       <div id="tableAjax">
           @if(count($allDGCSPressReleaseList) > 0)
            <div class="row table-responsive ">
            <!--<table  id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info" class="table">-->
            <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info" style="border: 1px solid;">
            <thead>
            <tr>
            <?php
               $count=0;
               ?>
            <th>Sn.</th>
            <th>Title</th>
            <th>Description</th>
            <th>PDF</th>
            
            
            </tr>
            </thead>
            <tbody>
            
            @foreach($allDGCSPressReleaseList as $getallDGCSPressReleaseList )
            <tr>   
            <td>{{ ++$count}}</td>
            <td>{{$getallDGCSPressReleaseList->title}}</td>
            <td>@if($getallDGCSPressReleaseList->content){{ $getallDGCSPressReleaseList->content}}@else {{'-'}}@endif</td>
            <td>@if($getallDGCSPressReleaseList->pdf)
                <a href="<?php echo env('APP_URL');?>public/asset/DGCAPressRelease/Pdf/{{$getallDGCSPressReleaseList->pdf}}" class="btn btn-primary dropdown" dropdown height="100" width="100" target="_blank">
					<i class="fa fa-download"></i> Download
				</a>
				@else {{'No Download Available'}}@endif
			</td>
            
            </tr>
            @endforeach
            
            
            
            </tbody>
            </table>
            </div>
            @else
            <div class="card  box-shadow-1 my-2">
                        <div class="card-body">
                             <h5 class="card-title">PRESS RELEASE</h5>
                            <div class="alert alert-danger" role="alert" >
                                
                                 <span style="align:center">No PRESS RELEASE Available !! </span>
                                  </div>
                        </div>
            </div>
            @endif
            </div>
          </div>
            
            
            </div>
       
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
    // $(document).ready(function()
    // {
    //     $('#pageDataTable').DataTable({searching: false,ordering: false,lengthChange: false,showNEntries: false});
        
    //     $('#pageDataTable').dataTable( {
    //         "createdRow": function( row, data, dataIndex){
                
    //                 $(row).addClass('redClass');
              
    //         }
    //     });
    // });


    
</script>


<script type="text/javascript">
   function getResultByState(stateId)
   {
     $('#tableAjax').empty();
     var url =APP_URL+'/'+'webftosearchbystatecity';
     $.ajax({
               type: "post",
               url: url,
               data :{
                   "_token": "{{ csrf_token() }}",
                   'stateId':stateId,
               },
               success: function(newdata)
               {
                 $('#tableAjax').empty();
                 $('#tableAjax').append(newdata);
   
               }
   
             });
   }
</script>

<script type="text/javascript">
   function getResultByCity(cityId)
   {
     var stateId=document.getElementById('stateId').value;
     $('#tableAjax').empty();
     var url =APP_URL+'/'+'webftosearchbystatecity';
     $.ajax({
               type: "post",
               url: url,
               data :{
                   "_token": "{{ csrf_token() }}",
                   'stateId':stateId,
                   'cityId':cityId,
               },
               success: function(newdata)
               {
                 $('#tableAjax').empty();
                 $('#tableAjax').append(newdata);
   
               }
   
             });
   }
</script>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<script>
var slideIndex = 0;
showSlidesnew();

function showSlidesnew() {
  var i;
  var slides = document.getElementsByClassName("mySlidesnew");
  var dots = document.getElementsByClassName("dotnew");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlidesnew, 2000); // Change image every 2 seconds
}
</script>
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection