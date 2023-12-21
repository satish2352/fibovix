@extends('website.layouts.app')
@section('title')
    Search FTO
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

@inject('CommonService', 'App\Http\Controllers\Common\CommonController')

<meta name="viewport" content="width=device-width, initial-scale=1">
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



<div class="container text-center">
    
    
    
    
    <br>
    


    <div class="row">
        <div class="slideshow-container">
             <?php
            foreach($allFTOAdvertise as $getallFTOAdvertiseList)
                {
		        ?>
		        <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="public/asset/Advertise/Image/{{$getallFTOAdvertiseList->image}}" alt="Lights" style="width:100%;height:150px">
  <div class="text">{{$getallFTOAdvertiseList->title}}</div>
</div>
		         
           
            <?php
                }
            ?>
            
            <br>

<div style="text-align:center">
    @foreach($allFTOAdvertise as $getallFTOAdvertiseList)
  <span class="dot"></span> 
    @endforeach
</div>
            </div>
      </div>
      
      
      
      
      
       <div id="tableAjax">
                  <div class="row">
                     <div class="form-group col-sm-4" >
                        <label>State</label>
                        <select name="state" id="stateId" class="form-control" onchange="getResultByState(this.value);" title="Choose..." data-live-search="true" required>
                           <option value="">Choose State</option>
                           @foreach($stateList as $key=>$state)
                           <option value="{{$state->id}}" >{{$state->name}}</option>
                           @endforeach                                
                        </select>
                     </div>
                     <div class="form-group col-sm-4">
                     </div>
                     <div class="form-group col-sm-4">
                     </div>
                  </div>
            </form>
            <div class="row table-responsive ">
            <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr>
            <?php
               $count=0;
               ?>
            <th>Sn.</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>State</th>
            <th>City</th>
            <th>Details</th>
            </tr>
            </thead>
            <tbody>
            @if(count($allFTO) > 0)
            <?php
               foreach($allFTO as $getallFTOs )
               {
               ?>
            <tr>
            <td>{{ ++$count}}</td>
            <td>{{ $getallFTOs->firstName}} {{$getallFTOs->middleName}} {{$getallFTOs->lastName }}</td>
            <td>{{ $getallFTOs->mobile }}</td>
            <td>{{ $getallFTOs->email }}</td>
            <td><?php $state=$CommonService->getPerticularStateById($getallFTOs->stateID);?>  {{$state[0]->name}}</td>
            <td><?php $city=$CommonService->getPerticularCityById($getallFTOs->cityId);?>  {{$city[0]->name}}</td>
            
             <td>
               <a class="btn btn-primary" href="#" role="button">View</a>
            </td>
            </tr>
            <?php
               }
               ?>
            @endif
            </tbody>
            </table>
            </div>
            
            
            
            
            
            </div>
            
            
            
         <div class="row">
        <div class="slideshow-container">
             <?php
            foreach($allFTOAdvertise as $getallFTOAdvertiseList)
                {
		        ?>
		        <div class="mySlidesnew fade">
  <div class="numbertext">1 / 3</div>
  <img src="public/asset/Advertise/Image/{{$getallFTOAdvertiseList->image}}" alt="Lights" style="width:100%;height:150px">
  <div class="text">{{$getallFTOAdvertiseList->title}}</div>
</div>
		         
           
            <?php
                }
            ?>
            
            <br>

<div style="text-align:center">
    @foreach($allFTOAdvertise as $getallFTOAdvertiseList)
  <span class="dotnew"></span> 
    @endforeach
</div>
            </div>
      </div>   
            
            
            
            
</div>



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