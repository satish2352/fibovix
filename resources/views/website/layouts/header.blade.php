<style type="text/css">
/* Data Table row color change*/
  .table-striped tbody tr:nth-of-type(2n+1) {
    background-color: #FEAD69;
}
</style>
<style>
/* Large rounded green border */
hr.line {
    border: 2px solid #1C66DE;
    border-radius: 0px;
    margin-bottom: 1px;
    margin-top: -20px;
}
</style>
<style>
.divClassArrow{
    /*.col, .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col-auto, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-auto, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md-auto, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-auto */

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
        <img src="{{asset('website/images/rpapilot_logo.png')}}" style="width: 80px;">
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
            </li>

            <li class="nav-item">
                <!--<a class="nav-link " href="{{url('courses.search')}}">Courses</a>-->
                <a class="nav-link " href="{{url('webcoursessearch')}}">Courses</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilots
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item  border-bottom " href="{{route('webpilotsearch')}}">Search</a>
                    <a class="dropdown-item  border-bottom " href="{{route('pilotregform')}}">Registration</a>
                    <a class="dropdown-item border-bottom" href="{{route('uaopverification')}}">Verify a Pilot</a> 
                    <a class="dropdown-item border-bottom" href="{{url('hirepilot')}}">Hire Pilot</a>
                    <a class="dropdown-item" href="{{route('pilot')}}" target="_blank">Login</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle @if(Request::is('fto/*')) font-weight-bold text-primary @endif" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    FTO
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item  border-bottom " href="{{route('webftosearch')}}" >Search</a>
                    <a class="dropdown-item  border-bottom "  href="{{route('ftoregform')}}" >Register</a>
                    <a class="dropdown-item   "  href="{{route('fto')}}" target="_blank">Login</a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('student')}}" target="_blank">Login</a>
                </div>
            </li>

            <!--<li class="nav-item">-->
            <!--    <a class="nav-link" href="{{url('comingsoon')}}">NPNT</a>-->
            <!--</li>-->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Media & News
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item border-bottom" href="{{url('photogallery')}}">Photo Gallery</a>
                    <a class="dropdown-item border-bottom" href="{{url('videogallery')}}">Video Gallery</a>
                    <!--<a class="dropdown-item border-bottom" href="{{url('comingsoon')}}">Pilot Videos</a>-->
                    <a class="dropdown-item border-bottom" href="{{url('eventsearch')}}">Event Search</a>
                    <!--<a class="dropdown-item border-bottom" href="">Register Your Event</a>-->
                    <!--<a class="dropdown-item border-bottom" href="{{url('comingsoon')}}">RPA Pilot Blog</a>-->
                    <a class="dropdown-item border-bottom" href="{{url('govtpolicies')}}">Indian Government Policies</a>
                    <a class="dropdown-item border-bottom" href="{{url('webDGCSPressRelease')}}">DGCA Press Release</a>
                    <a class="dropdown-item " href="{{url('webDroneNewsFeed')}}">Drone News Feed</a>
                    <!--<a class="dropdown-item" href="{{url('comingsoon')}}">Webinars</a>-->
                </div>
            </li>
            
            <!--<li class="nav-item">-->
            <!--    <a class="nav-link" href="{{url('comingsoon')}}">Store</a>-->
            <!--</li>-->
        </ul>
    </div>
    
    <div class="nav-item order-2 order-md-3">
         <span class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
            <i class="material-icons">keyboard_arrow_down</i>
        </span>
    </div>



    </div>
    
</nav>
