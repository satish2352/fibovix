<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Basic Page Info -->

    <title>FIBOVIX Admin</title>

    <!-- Site favicon -->


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/favicon//favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/favicon//favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('admin/favicon//site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('admin/favicon//safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/styles/style.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/src/plugins/datatables/media/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/src/plugins/datatables/media/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/src/plugins/datatables/media/css/responsive.dataTables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/styles/rating/style.css') }}">
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
                <a href="{{ route('dashadmin') }}">
                    <img src="{{ asset('admin/vendors/img/fibovix_logo.png') }}" height="50px" width="80px"
                        alt="" class="mobile-logo">
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
                        <span class="user-icon"><i class="fa fa-user-o"></i></span>
                        <span class="user-name">{{ session()->get('adminName') }} ( Admin )</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!--<a class="dropdown-item" href="profile.php"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>-->
                        <!--<a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>-->
                        <!--<a class="dropdown-item" href="faq.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>-->
                        <a class="dropdown-item" href="{{ route('logOutAdmin') }}"><i class="fa fa-sign-out"
                                aria-hidden="true"></i> Log Out</a>
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
                                        <img src="{{ asset('admin/vendors/images/img.jpg') }}" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('admin/vendors/images/img.jpg') }}" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('admin/vendors/images/img.jpg') }}" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('admin/vendors/images/img.jpg') }}" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('admin/vendors/images/img.jpg') }}" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('admin/vendors/images/img.jpg') }}" alt="">
                                        <h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('admin/vendors/images/img.jpg') }}" alt="">
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
            <a href="{{ route('dashadmin') }}">
                <img src="{{ asset('admin/vendors/img/fibovix_logo.png') }}" height="30px" width="100px"
                    alt="">
            </a>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">

                    <li>
                        <a href="{{ route('dashadmin') }}" class="dropdown-toggle no-arrow">
                            <span class="fa fa-th"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="dropdown ">
                        <a href="javascript:;" class="dropdown-toggle" data-option="on">
                            <span class="fa fa-table"></span><span class="mtext">Master</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="">State</a></li>
                            <li><a href="">City</a></li>

                        </ul>
                    </li>






                    <li class="dropdown ">
                        <a href="javascript:;" class="dropdown-toggle" data-option="on">
                            <span class="fa fa-fighter-jet"></span><span class="mtext">FTO</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="">All FTO</a></li>
                            <li><a href="">FTO Instructor</a></li>
                            <li><a href="">Search FTO</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="" class="dropdown-toggle no-arrow">
                            <span class="fa fa-envelope"></span><span class="mtext">Send Mail</span>
                        </a>
                    </li>



                    <li>
                        <a href="" class="dropdown-toggle no-arrow">
                            <span class="fa fa-quote-left"></span><span class="mtext">Testimonials</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('logOutAdmin') }}" class="dropdown-toggle no-arrow">
                            <span class="fa fa-sign-out"></span><span class="mtext">Log Out</span>
                        </a>
                    </li>



                    <img src="{{ asset('admin/vendors/img/fibovix_logo.png') }}"
                        style="padding: 30px 50px 50px 50px;">


                </ul>
            </div>
        </div>
    </div>


    <!-- end Sidebar -->
    @yield('content')
    @extends('admin.layout.toast')
    @extends('admin.layout.footer')
