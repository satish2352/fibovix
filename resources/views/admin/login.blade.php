<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Basic Page Info -->
	
	<title>RPA Admin</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('admin/vendors/styles/style.css')}}">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<style type="text/css">
		.card-shadow {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2) !important;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}

.btn-outline-primaryNew {
    color: #fff;
    /*border-color: #007bff;*/
    background-color: #FF8923;
    border-color: #FF8923;
}

.btn {
    display: inline-block;
    font-weight: 500;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    /*background-color: transparent;*/
    border: 1px solid transparent;
    padding: 0.4rem 1.2rem;
    font-size: 0.9rem;
    line-height: 1.6;
    border-radius: 2rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
	</style>

</head>
<body>
    
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20" style="background-color: white">
	            <center>
                    @if(session('success'))
                     <span class="alert alert-success" role="alert">
                         <strong>{{ session('success') }}</strong>
                     </span>
                    @endif
                </center>
                <br>
		<div class="login-box bg-white box-shadow pd-30 border-radius-5 card card-shadow">
			<img src="{{ asset('admin/vendors/img/rpapilot_logo.png')}}" alt="login" class="login-img">
			<h2 class="text-center mb-30">Admin Login</h2>
			<form method="post" action={{route('loginadmin')}}>
				 @csrf
				 
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="Username" name="email" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
					@if($errors->has('email'))
	                <span>
	                    <strong style="color: red">{{ $errors->first('email',':message') }}</strong>
	                </span>
                     @endif
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Password" name="password" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
					@if($errors->has('password'))
	                <span>
	                    <strong style="color: red">{{ $errors->first('password',':message') }}</strong>
	                </span>
                     @endif
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
						
							<center><input class="btn btn-outline-primaryNew" type="submit" name="submit" value="Submit"></center>
						
						</div>
					</div>
					<div class="col-sm-6">
						<!--<div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div>-->
					</div>
				</div>
			</form>
		</div>
	</div>
		<!-- js -->
	<script src="{{ asset('admin/vendors/scripts/script.js')}}"></script>
</body>
</html>