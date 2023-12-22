<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="{{asset('website/css/index.css')}}">
  </head>
  <body>
    <!-- navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right-border">

<<<<<<< HEAD
        <a class="navbar-brand" href="#">+ 91- 8888352777  </a>
        <a class="navbar-brand" href="#"> 0253-7966831</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
=======
    position: relative;
    width: auto;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;

}
</style>
   
    <style type="text/css">
     /*Style For Image arrow shape*/
section{padding: 0px 0;}
.bg-color-gray{background: #f7f7f7;}
.img-title {
padding: 20px;
background: #fff;
text-align: center;
position: relative;
}
.img-title:before {
position: absolute;
width: 50px;
height: 50px;
left: 0;
content: '';
transform: rotate(90deg);
z-index: 1;
background: linear-gradient(-45deg, white 17px, rgba(0,0,0,0.2) 17px, rgba(0,0,0,0.2) 21px, transparent 21px), linear-gradient(225deg, white 17px, rgba(0,0,0,0.2) 17px, rgba(0,0,0,0.2) 21px, transparent 21px);
background-position: left 0px, right bottom;
background-size: 100% 50%;
background-repeat: no-repeat;
right: 0;
margin: auto;
text-align: center;
top: -50px;
}
</style>
<style>
    /*Slider Style*/
    .slider {
  max-width: 1307px;
  margin: 0 auto;
}
.slick-slide {
  margin: 0 5px;
}
.slick-list {
  margin: 0px -5px 0px -5px;
}
button.slick-next, button.slick-next:hover {
  position: absolute;
  top: 41%;
  right: 54px;
  width: 47px;
  height: 75px;
  background-image: url("http://maggiesadler.com/wp-content/uploads/2015/10/left-right-arrow.png");
  background-size: 95px;
}
button.slick-prev, button.slick-prev:hover {
  position: absolute;
  top: 41%;
  left: 15px;
  z-index: 1;
  width: 47px;
  height: 75px;
  background-image: url("http://maggiesadler.com/wp-content/uploads/2015/10/left-right-arrow.png");
  background-size: 95px;
      background-position-x: right;
}
.slick-prev:before, .slick-next:before {
  font-size: 70px;
  color: #EA8496;
  line-height: inherit;
  font-weight: bold;
}
.slider img {
  height: 324px;
}

/* Slick Slider Styles -- Provided by https://kenwheeler.github.io/slick/ */
/* Slider */
.slick-slider
{
    position: relative;

    display: block;

    -moz-box-sizing: border-box;
         box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
@charset 'UTF-8';
/* Slider */
.slick-loading .slick-list
{
    background: #fff url('http://maggiesadler.com/wp-content/uploads/2015/10/ajax-loader.gif') center center no-repeat;
}

/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

   
}
/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    margin-top: -10px;
    padding: 0;

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '';
}
[dir='rtl'] .slick-prev:before
{
    content: '';
    font-weight: bold;
    font-size: 20px;
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '';
}
[dir='rtl'] .slick-next:before
{
    content: '';
}

/* Dots */
.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -45px;

    display: block;

    width: 100%;
    padding: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: '•';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: black;
}

</style>
<style>

    .navbar-light .navbar-nav .nav-link {
        color: #111 !important;
        font-size: 16px;
        font-weight: 450;
    }
    .navbar-nav,
    .mr-auto {
        flex: 1;
        /*margin: auto !important;*/
        display: flex;
        justify-content: space-between;
    }
    
    
    
    .button {
  
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #FF8923; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF8923; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #FF8923; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #FF8923; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF8923; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #FF8923; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #FF8923; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF8923; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #FF8923; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #FF8923; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF8923; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #FF8923; box-shadow: 0 0 3px #B20000; }
}



</style>


<nav class="navbar navbar-expand-md navbar-light nav-fill nav-justified">
    <div class="container" style="max-width: 1400px;">
        
        <div class="nav-item order-2 order-md-1">
        
    </div>
    
    
    <a href="{{url('index')}}" class="navbar-brand order-1 order-md-1 b-sidebar-trigger" style="float:left">
        <img src="{{asset('website/images/fibovix_logo.png')}}" style="width: 80px;">
    </a>


    <div class="collapse navbar-collapse order-3 order-md-2 " id="navbarNav" style="float:right">
        <ul class="navbar-nav "> 
        <!-- class  justify-content-between-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Explore
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item  border-bottom" href="{{url('about')}}">About</a>
                    <a class="dropdown-item  border-bottom" href="#POSSIBILITIESAREENDLESS">Drone Application</a> <?php //{{url('droneapplication')}} ?>
                    <a class="dropdown-item  border-bottom" href="{{url('library')}}">Library Membership</a>
                    <a class="dropdown-item  border-bottom" href="{{url('advisoryboard')}}">Advisory Board</a>
                    <a class="dropdown-item" href="{{url('ftoinstrctorlistweb')}}">Instructor List</a>
                </div>
>>>>>>> 29ca29c8ab38ed7e4be15a6d1de54c4bf2c68a51
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resources & insights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
          </ul>
        </div>
    </nav> --}}

    
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right-border">
    <a class="navbar-brand" href="#">+ 91- 8888352777  </a>
        <a class="navbar-brand" href="#"> 0253-7966831</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Resources & insights</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
    <!-- end navbar -->

 



