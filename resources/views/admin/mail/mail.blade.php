@extends('admin.layout.header')
@section('content')
@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Mails</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mails List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#CourseModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#CourseModal">
								    Send Mail
								</a>
							</div>
						</div>
					</div>
				</div>
			
			    
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Mails List</h5>
						</div>
					</div>
					<div class="row table-responsive ">
					    @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        
                        
                        
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
						<table class="table table-striped" id="pageDataTable" >
							<thead>
								<tr>
								    <?php
								    $count=0;
								    ?>
									<!--<th class="table-plus datatable-nosort"></th>-->
									<th>Sr. No</th>
									<th>Pilot /FTO</th>
									<th>To Whome</th>
									<th>State</th>
									<th>Subject</th>
									<th>EMail Text</th>
								</tr>
							</thead>
							<tbody>
							    @foreach($mailSentList as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->sentTo}}</td>
                                    <td>{{$value->toWhome}}</td>
                                    <td>
                                    <?php 
                                        $finalStaateId=explode(",",$value->stateId);
                                        foreach($finalStaateId as $stateId)
                                        { 
                                            $stateName=$CommonService->getAllstate($stateId); 
                                            echo $stateName[0]->name; 
                                        }
                                    ?>  
                                    </td>
                                    <td>{{$value->subject}}</td>
                                    <td><?php echo $value->emailText; ?></td>
								</tr>
								@endforeach
							
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
		
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="CourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Send Mail</center></h4>
      </div>
      <div class="modal-body">
        	<!--<form method="post" enctype="multipart/form-data">-->
        	    <form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select name="sendTo[]" required class="form-control selectpicker" id="sendTo">
							        <!--<option value="1">All</option>-->
							        <option value="">Select FTO/Pilot</option>
							        <option value="1">FTO</option>
							        <option value="2">Pilot</option>
                                </select>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select name="state[]" required class="form-control selectpicker" id="state" multiple >
                                    <option value="">Choose State</option>
                                        @foreach($stateList as $key=>$state)
                                    <option value="{{$state->id}}" >{{$state->name}}</option>
                                        @endforeach                                
                                </select>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select name="whome" required class="form-control selectpicker" id="whome">
							        <option value="" >Select to whome</option>
                                    <option value="1" >All</option>
                                    <option value="2" >Approved</option>
                                    <option value="3" >Not Approved</option>
                                
                                </select>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
							</div>
						</div>
						
						
						<div class="form-group row">
                          <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
                              <div class="col-sm-12 col-md-11">
                                <textarea class="form-control" id="emailText" name="emailText" class="emailclass" placeholder="Enter Your Email Text"></textarea>
                              </div>
                        </div>

						<!--<div class="modal-footer">-->
      <!--                     <a class="btn btn-success" onclick="sendMail();"> Save </a>-->
		    <!--               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
      <!--                  </div>-->
                        
						<div class="modal-footer">
                           <input class="btn btn-success" type="button" onclick="sendMail();" value="Send">
		                        <!--Send-->
                          <!-- </button>-->
          
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                      

 </form>
      </div>
      
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!};
</script>                      
<script type="text/javascript">
function sendMail()
{
  var sendTo=$("#sendTo").val();
  var state=$("#state").val();
  var whome=$("#whome").val();
  var subject=$("#subject").val();
  var emailText=CKEDITOR.instances['emailText'].getData();
 
        if(sendTo=='' || sendTo==null)
        {
          alert("Select FTO or Pilot");
          return false;
        }
        
        if(state=='' || state==null)
        {
          alert("Select state");
          return false;
        }
        
        if(whome=='' || whome==null)
        {
          alert("Select all or approved or not aapproved");
          return false;
        }
        
        if(subject=='' || subject==null)
        {
          alert("Enter subject");
          return false;
        }
        
        if(emailText=='' || emailText==null)
        {
          alert("Enter email content");
          return false;
        }
        
       
    swal({
          title: "Are you sure?",
          text: "Mail Send  !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Mail Sent!',
              text: 'Mail Sent successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/sendmail';
                        $.ajax({
                          headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                          type: "POST",
                          url: url,
                          data:{
                                // 'editedOrFreshEntries':editedOrFreshEntries,
                                'sendTo': sendTo,
                                'state': state,
                                'whome': whome,
                                'subject': subject,
                                'emailText': emailText,
                                },
                          success: function(newdata)
                          {
                             window.location = url;
                          }

                        });
            });
          } else {
            swal("Cancelled", "Your are cancelled :)", "error");
          }
        });

}
</script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('emailText');
    charcount_limit: 20
</script>
@endsection