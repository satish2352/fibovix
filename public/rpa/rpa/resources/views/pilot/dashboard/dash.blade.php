@extends('pilot.layout.header')
@section('content')
<?php
$pilotId=session()->get('pilotId');
?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10" style="background-color: #EEEEEE">
		    <div class="row">
	        <div class="col-sm-12">
    	        <center>
                    @if(session('success'))
                     <span class="alert alert-success" role="alert">
                         <strong>{{ session('success') }}</strong>
                     </span>
                    @endif
                </center>
            </div>
        </div>
        <br>
			<div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-briefcase"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php $result=DB::select("SELECT * FROM `pilotrdroneinfo` where pilotId ='$pilotId'"); echo count($result); ?> </span>
								<p class="weight-400 font-18">Drone</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-handshake-o"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php $result=DB::select("SELECT * FROM `advertise` where advertiseBy ='0' and whoadvertising = '$pilotId' "); echo count($result); ?> </span></span>
								<p class="weight-400 font-18">Advertise</p>
							</div>
						</div>
						<!--<div class="project-info-progress">-->
						<!--	<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Target</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>-->
						<!--	</div>-->
						<!--	<div class="progress" style="height: 10px;">-->
						<!--		<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-list-alt"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php $result=DB::select("SELECT * FROM `events` where eventBy ='0' and whoeventing = '$pilotId' "); echo count($result); ?> </span></span>
								<p class="weight-400 font-18">Events</p>
							</div>
						</div>
						<!--<div class="project-info-progress">-->
						<!--	<div class="row clearfix">-->
						<!--		<div class="col-sm-6 text-muted weight-500">Review</div>-->
						<!--		<div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>-->
						<!--	</div>-->
						<!--	<div class="progress" style="height: 10px;">-->
						<!--		<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-purple text-white">
									<i class="fa fa-podcast"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-purple weight-500 font-24"><?php $result=DB::select("SELECT * FROM `achievement` where achievementBy ='0' and whoseachievement = '$pilotId' "); echo count($result); ?> </span></span>
								<p class="weight-400 font-18">Achievements</p>
							</div>
						</div>
						<!--<div class="project-info-progress">-->
						<!--	<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Review</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>-->
						<!--	</div>-->
						<!--	<div class="progress" style="height: 10px;">-->
						<!--		<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
			</div>
			<div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-blue text-white">
									<i class="fa fa-briefcase"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-blue weight-500 font-24"><?php $result=DB::select("SELECT * FROM `blog` where blogBy ='0' and whoseblog = '$pilotId' "); echo count($result); ?> </span>
								<p class="weight-400 font-18">Blogs</p>
							</div>
						</div>
						<!--<div class="project-info-progress">-->
						<!--	<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Target</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>-->
						<!--	</div>-->
						<!--	<div class="progress" style="height: 10px;">-->
						<!--		<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-green text-white">
									<i class="fa fa-handshake-o"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-green weight-500 font-24"><?php $result=DB::select("SELECT * FROM `photogallery` where PhotoGalleryBy ='0' and whosePhotoGallery = '$pilotId' "); echo count($result); ?> </span>
								<p class="weight-400 font-18">Uploaded Photo</p>
							</div>
						</div>
						<!--<div class="project-info-progress">-->
						<!--	<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Target</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>-->
						<!--	</div>-->
						<!--	<div class="progress" style="height: 10px;">-->
						<!--		<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<div class="project-info clearfix">
							<div class="project-info-left">
								<div class="icon box-shadow bg-light-orange text-white">
									<i class="fa fa-list-alt"></i>
								</div>
							</div>
							<div class="project-info-right">
								<span class="no text-light-orange weight-500 font-24"><?php $result=DB::select("SELECT * FROM `videogallery` where VideoGalleryBy ='0' and whoseVideoGallery = '$pilotId' "); echo count($result); ?></span>
								<p class="weight-400 font-18">Uploaded Videos</p>
							</div>
						</div>
						<!--<div class="project-info-progress">-->
						<!--	<div class="row clearfix">-->
						<!--		<div class="col-sm-6 text-muted weight-500">Review</div>-->
						<!--		<div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>-->
						<!--	</div>-->
						<!--	<div class="progress" style="height: 10px;">-->
						<!--		<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<!--<div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">-->
					<!--	<div class="project-info clearfix">-->
					<!--		<div class="project-info-left">-->
					<!--			<div class="icon box-shadow bg-light-purple text-white">-->
					<!--				<i class="fa fa-podcast"></i>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--		<div class="project-info-right">-->
					<!--			<span class="no text-light-purple weight-500 font-24">5.1 Lakhs</span>-->
					<!--			<p class="weight-400 font-18">Pending Business</p>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--	<div class="project-info-progress">-->
					<!--		<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Review</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>-->
					<!--		</div>-->
					<!--		<div class="progress" style="height: 10px;">-->
					<!--			<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
			<!--<div class="row clearfix progress-box">-->
			<!--	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">-->
			<!--		<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">-->
			<!--			<div class="project-info clearfix">-->
			<!--				<div class="project-info-left">-->
			<!--					<div class="icon box-shadow bg-blue text-white">-->
			<!--						<i class="fa fa-briefcase"></i>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="project-info-right">-->
			<!--					<span class="no text-blue weight-500 font-24">40</span>-->
			<!--					<p class="weight-400 font-18">My Earnings</p>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--			<div class="project-info-progress">-->
			<!--				<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Target</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">40</div>-->
			<!--				</div>-->
			<!--				<div class="progress" style="height: 10px;">-->
			<!--					<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">-->
			<!--		<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">-->
			<!--			<div class="project-info clearfix">-->
			<!--				<div class="project-info-left">-->
			<!--					<div class="icon box-shadow bg-light-green text-white">-->
			<!--						<i class="fa fa-handshake-o"></i>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="project-info-right">-->
			<!--					<span class="no text-light-green weight-500 font-24">50</span>-->
			<!--					<p class="weight-400 font-18">Business Captured</p>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--			<div class="project-info-progress">-->
			<!--				<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Target</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">50</div>-->
			<!--				</div>-->
			<!--				<div class="progress" style="height: 10px;">-->
			<!--					<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">-->
			<!--		<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">-->
			<!--			<div class="project-info clearfix">-->
			<!--				<div class="project-info-left">-->
			<!--					<div class="icon box-shadow bg-light-orange text-white">-->
			<!--						<i class="fa fa-list-alt"></i>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="project-info-right">-->
			<!--					<span class="no text-light-orange weight-500 font-24">2 Lakhs</span>-->
			<!--					<p class="weight-400 font-18">Projects Complete</p>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--			<div class="project-info-progress">-->
			<!--				<div class="row clearfix">-->
			<!--					<div class="col-sm-6 text-muted weight-500">Review</div>-->
			<!--					<div class="col-sm-6 text-right weight-500 font-14 text-muted">Good</div>-->
			<!--				</div>-->
			<!--				<div class="progress" style="height: 10px;">-->
			<!--					<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--	<div class="col-lg-3 col-md-6 col-sm-12 mb-30">-->
			<!--		<div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">-->
			<!--			<div class="project-info clearfix">-->
			<!--				<div class="project-info-left">-->
			<!--					<div class="icon box-shadow bg-light-purple text-white">-->
			<!--						<i class="fa fa-podcast"></i>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="project-info-right">-->
			<!--					<span class="no text-light-purple weight-500 font-24">5.1 Lakhs</span>-->
			<!--					<p class="weight-400 font-18">Pending Business</p>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--			<div class="project-info-progress">-->
			<!--				<div class="row clearfix">-->
								<!--<div class="col-sm-6 text-muted weight-500">Review</div>-->
								<!--<div class="col-sm-6 text-right weight-500 font-14 text-muted">Average</div>-->
			<!--				</div>-->
			<!--				<div class="progress" style="height: 10px;">-->
			<!--					<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->

		<br><br><br><br><br><br>


@endsection