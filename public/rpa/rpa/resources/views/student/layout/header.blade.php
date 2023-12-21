<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Basic Page Info -->
	
	<title>RPA Student</title>

	<!-- Site favicon -->
	<link rel="shortcut icon" href="{{asset('vendors/img/favicon.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('vendors/styles/style.css')}}">
	
	
	<link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/media/css/jquery.dataTables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/media/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/media/css/responsive.dataTables.css')}}">
    
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    
    <style>
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
        }
    </style>
    
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
    </style>
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>
<link rel="stylesheet" type="text/css" href="{{asset('src/styles/rating/style.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

	<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="index.php">
					<img src="{{asset('vendors/img/rpapilot_logo.png')}}" height="50px" width="80px" alt="" class="mobile-logo" >
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
						<span class="user-name" >Student</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<!--<a class="dropdown-item" href="profile.php"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>-->
						<!--<a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>-->
						<!--<a class="dropdown-item" href="faq.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>-->
						<a class="dropdown-item" href="{{route('logoutstudent')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
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
										<img src="{{asset('vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('vendors/images/img.jpg')}}" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{asset('vendors/images/img.jpg')}}" alt="">
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
			<a href="{{route('dashstudent')}}">
				<img src="{{asset('vendors/img/rpapilot_logo.png')}}" height="30px" width="100px" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				    
				    <li>
						<a href="{{route('dashstudent')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-th"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					
					
					<!--<li>-->
					<!--	<a href="{{route('ftoinstrctorlistbyfto')}}" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-user"></span><span class="mtext">Instructor</span>-->
					<!--	</a>-->
					<!--</li>-->
					
					<li>
						<a href="{{route('studentcourseslist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-book"></span><span class="mtext">Courses</span>
						</a>
					</li>
					
					<!--<li class="dropdown ">-->
					<!--	<a href="javascript:;" class="dropdown-toggle" data-option="on">-->
					<!--		<span class="fa fa-plane"></span><span class="mtext">Pilots</span>-->
					<!--	</a>-->
					<!--	<ul class="submenu">-->
					<!--		<li><a href="{{route('ftopilotlist')}}">Pilots</a></li>-->
					<!--		<li><a href="{{route('pilotsearchbyfto')}}">Search Pilot</a></li>-->
					<!--	</ul>-->
					<!--</li>-->
					
					
				 <!--   <li>-->
					<!--	<a href="{{route('ftoadvertiselist')}}" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-newspaper-o"></span><span class="mtext">Advertise</span>-->
					<!--	</a>-->
					<!--</li>-->
					
					
					<!--<li>-->
					<!--	<a href="{{route('ftoeventlist')}}" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-calendar"></span><span class="mtext">Event</span>-->
					<!--	</a>-->
					<!--</li>-->
					
					<li>
						<a href="{{route('tpmlist')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-address-card-o"></span><span class="mtext">Training Process Manual</span>
						</a>
					</li>
					
					<!--<li>-->
					<!--	<a href="{{route('ftoachievementlist')}}" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-trophy"></span><span class="mtext">Achievement</span>-->
					<!--	</a>-->
					<!--</li>-->
					
					<!--<li>-->
					<!--	<a href="{{route('ftobloglist')}}" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-bars"></span><span class="mtext">Blog</span>-->
					<!--	</a>-->
					<!--</li>-->
					
				
					
					
					<!--<li class="dropdown ">-->
					<!--	<a href="javascript:;" class="dropdown-toggle" data-option="on">-->
					<!--		<span class="fa fa-user"></span><span class="mtext">Rating</span>-->
					<!--	</a>-->
					<!--	<ul class="submenu" >-->
					<!--		<li><a href="{{route('instructorrating')}}">Instructor Rating</a></li>  -->
							<!--ftoinstructorrating-->
					<!--		<li><a href="{{route('pilotsrating')}}">Pilots</a></li>-->
							<!--ftopilotrating-->
							
					<!--	</ul>-->
					<!--</li>-->
					
					
					
					<!--<li>-->
					<!--	<a href="" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-list-ol"></span><span class="mtext">Orders</span>-->
					<!--	</a>-->
					<!--</li>-->
					
					<!--<li>-->
					<!--	<a href="" class="dropdown-toggle no-arrow">-->
					<!--		<span class="fa fa-cog"></span><span class="mtext">Settings</span>-->
					<!--	</a>-->
					<!--</li>-->
					
					
					<li>
						<a href="{{route('logoutstudent')}}" class="dropdown-toggle no-arrow">
							<span class="fa fa-sign-out"></span><span class="mtext">Log Out</span>
						</a>
					</li>

					<img src="{{asset('vendors/img/rays-aviation.jpeg')}}"  style="padding: 30px 50px 50px 50px;">
					
				
				</ul>
			</div>
		</div>
	</div>


	<!-- end Sidebar -->
@yield('content')
@extends('student.layout.toast')
@extends('student.layout.footer')
