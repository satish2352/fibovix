@extends('website.layouts.app')
@section('title')
    Photo Gallery
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')

    <style type="text/css">
  #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #ccc;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
    </style>
    
    <div class="row text-center justify-content-center" style="margin-top: 15px;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">PHOTO GALLERY</h1>

      </div>
  </div>
  <div class="container my-5">
   <div class="card box-shadow-1 mb-2">
    <div class="card-body">
       
        <div class="row">
            
               
               <div class="col-md-4">
      <a href="#" data-target="#modalIMG1" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
        <div class="ba-0 ds-1">
          <img alt="Card image cap" class="card-img-top" src="public/asset/PhotoGallery/Image/1585219812.jpg" />
          <div class="card-body">
            
          </div>
        </div>  
      </a>
    </div>

<div aria-hidden="true" aria-labelledby="myModal" class="modal fade" id="modalIMG1" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body mb-0 p-0">
        <img src="public/asset/PhotoGallery/Image/1585219812.jpg" alt="" style="height: 150px; width: 100%;">
      </div>
      <div class="modal-footer">
        
        <button class="btn btn-outline-primary btn-lg btn-rounded btn-md ml-4 text-center" data-dismiss="modal"  type="button">Close</button>


      </div>
    </div>
  </div>
</div>









            <!-- <div class="col-md-4">
              <div class="column">
                <a href="/w3images/lights.jpg" target="_blank">
                  <img src="public/asset/PhotoGallery/Image/{{$getallPhotoGalleryList->image}}" alt="Lights" style="width:100, height:100">
                </a>
              </div>
            </div> -->
            
      </div>
      <br>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>






@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection
