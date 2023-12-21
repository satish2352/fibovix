<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Basic Page Info -->
	
	<title>RPA Admin</title>

	<!-- Site favicon -->
	<link rel="shortcut icon" href="{{asset('admin/vendors/img/favicon.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('admin/vendors/styles/style.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/datatables/media/css/jquery.dataTables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/datatables/media/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/datatables/media/css/responsive.dataTables.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('admin/src/styles/rating/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    
    <style>
     .btndelete {
        font-family: 'Work Sans', sans-serif;
        letter-spacing: 0.035em;
        color: red;
        background: transparent;
    }
    
    .btngreen {
    font-family: 'Work Sans', sans-serif;
    letter-spacing: 0.035em;
    color: green;
    background: transparent;
}

  .table-striped tbody tr:nth-of-type(2n+1) {

    background-color: #FEAD69;

}

    </style>
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>

</head>
<body>

	<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="{{route('dashadmin')}}">
					<img src="{{asset('admin/vendors/img/rpapilot_logo.png')}}" height="50px" width="80px" alt="" class="mobile-logo" >
				</a>
			</div>

			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon" ><i class="fa fa-user-o"></i></span>
						<span class="user-name" >{{session()->get('adminName')}} ( Admin )</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<!--<a class="dropdown-item" href="profile.php"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>-->
						<!--<a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>-->
						<!--<a class="dropdown-item" href="faq.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>-->
						<a class="dropdown-item" href="{{route('logOutAdmin')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<!--<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">-->
					<!--	<i class="fa fa-bell" aria-hidden="true"></i>-->
					<!--	<span class="badge notification-active"></span>-->
					<!--</a>-->
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="{{asset('admin/vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('admin/vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('admin/vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('admin/vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('admin/vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('admin/vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('admin/vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Sidebar -->
<div class="left-side-bar">
		<div class="brand-logo">
			<a href="{{route('dashadmin')}}">
				<img src="{{asset('admin/vendors/img/rpapilot_logo.png')}}" height="30px" width="100px" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				    
				    <li>
						<a href="{{route('dashadmin')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-th"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					
					<li class="dropdown ">
						<a href="javascript:;" class="dropdown-toggle" data-option="on">
							<span class="fa fa-table"></span><span class="mtext">Master</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('statelist')}}">State</a></li>
							<li><a href="{{route('citylist')}}">City</a></li>
							<li><a href="{{route('categorylist')}}">Category</a></li>
							<li><a href="{{route('durationlist')}}">Duration</a></li>
							<li><a href="{{route('professionlist')}}">Profession</a></li>
							<li><a href="{{route('servicecategory')}}">Service Category</a></li>
							<li><a href="{{route('subcategory')}}">Sub Service Category</a></li>
						</ul>
					</li>
					
					
					
					<li class="dropdown ">
						<a href="javascript:;" class="dropdown-toggle" data-option="on">
							<span class="fa fa-table"></span><span class="mtext">Website</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('advisoryboardlist')}}">Advisory Board</a></li>
						</ul>
						<ul class="submenu">
							<li><a href="{{route('allhirepilot')}}">Pilot Hire</a></li>
						</ul>
						<ul class="submenu">
							<li><a href="{{route('requestacallback')}}">Request A Callback</a></li>
						</ul>
						<ul class="submenu">
							<li><a href="{{route('reportanerrorlist')}}">Report An Error</a></li>
						</ul>
					</li>
					
					
					
					<!--<li>-->
					<!--	<a href="#" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-list-ol"></span><span class="mtext">Orders</span>-->
					<!--	</a>-->
					<!--</li>-->
					
					
					
					<li class="dropdown ">
						<a href="javascript:;" class="dropdown-toggle" data-option="on">
							<span class="fa fa-fighter-jet"></span><span class="mtext">FTO</span>
						</a>
						<ul class="submenu" >
							<li><a href="{{route('ftoList')}}">All FTO</a></li>
							<li><a href="{{route('ftoinstrctorlist')}}">FTO Instructor</a></li>
							<li><a href="{{route('ftosearch')}}">Search FTO</a></li>
						</ul>
					</li>
					
					
					<!--<li>-->
					<!--	<a href="#" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-calendar-o"></span><span class="mtext">Events</span>-->
					<!--	</a>-->
					<!--</li>-->
				
					<li class="dropdown ">
						<a href="javascript:;" class="dropdown-toggle" data-option="on">
							<span class="fa fa-book"></span><span class="mtext">Courses</span>
						</a>
						<ul class="submenu" >
							<li><a href="{{route('courseslist')}}">Courses</a></li>
							<li><a href="{{route('coursesearchadm')}}">Search Courses</a></li>
						</ul>
					</li>
					
					
					
					<li class="dropdown ">
						<a href="javascript:;" class="dropdown-toggle" data-option="on">
							<span class="fa fa-user"></span><span class="mtext">Pilots</span>
						</a>
						<ul class="submenu" >
							<li><a href="{{route('pilotslist')}}">Pilots</a></li>
							<li><a href="{{route('pilotslistcovid')}}">Pilots Covid Help List</a></li>
							<li><a href="{{route('pilotsearch')}}">Search Pilot</a></li>
							
						</ul>
					</li>
					
					<li>
						<a href="{{route('expertlist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-newspaper-o"></span><span class="mtext">Expert</span>
						</a>
					</li>
					
					
					<li>
						<a href="{{route('adminadvertiselist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-newspaper-o"></span><span class="mtext">Advertise</span>
						</a>
					</li>
					
					<li>
						<a href="{{route('admineventlist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar"></span><span class="mtext">Event</span>
						</a>
					</li>
					
					<li>
						<a href="{{route('adminnewslist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-address-card-o"></span><span class="mtext">News</span>
						</a>
					</li>
					
					<li>
						<a href="{{route('adminachievementlist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-trophy"></span><span class="mtext">Achievement</span>
						</a>
					</li>
					
					<li>
						<a href="{{route('adminbloglist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-bars"></span><span class="mtext">Blog</span>
						</a>
					</li>
					
					<li class="dropdown ">
						<a href="javascript:;" class="dropdown-toggle" data-option="on">
							<span class="fa fa-upload"></span><span class="mtext">Upload</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('adminphotolist')}}">Photo</a></li>
							<li><a href="{{route('adminvideolist')}}">Video</a></li>
							<li><a href="{{route('admintpmlist')}}">Training Process Manual</a></li>
							<li><a href="{{route('adminDGCAPressReleaselist')}}">DGCA Press Release</a></li>
							<li><a href="{{route('adminDroneNewsFeedlist')}}">Drone News Feed</a></li>
						</ul>
					</li>
					
					
					
					<li>
						<a href="{{route('sendmail')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-envelope"></span><span class="mtext">Send Mail</span>
						</a>
					</li>
					
			
                    <li class="dropdown ">
						<a href="javascript:;" class="dropdown-toggle" data-option="on">
							<span class="fa fa-star"></span><span class="mtext">Rating</span>
						</a>
						<ul class="submenu" >
						    <li><a href="{{route('ftorating')}}">FTO Rating</a></li>
						    <li><a href="{{route('adminstructorrate')}}">FTO Instructor Rating</a></li>
							<li><a href="{{route('admpilotsrating')}}">Pilots</a></li>
						</ul>
					</li>
					
					<li>
						<a href="{{route('admintestimonialslist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-quote-left"></span><span class="mtext">Testimonials</span>
						</a>
					</li>
					
					<li>
						<a href="{{route('logOutAdmin')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-sign-out"></span><span class="mtext">Log Out</span>
						</a>
					</li>
					
				

					<img src="{{asset('admin/vendors/img/rays-aviation.jpeg')}}"  style="padding: 30px 50px 50px 50px;">
					
				
				</ul>
			</div>
		</div>
	</div>


	<!-- end Sidebar -->
@yield('content')
@extends('admin.layout.toast')
@extends('admin.layout.footer')
