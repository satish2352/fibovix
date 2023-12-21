@extends('fto.layout.header')
@section('content')
@inject('CommonService', 'App\Http\Service\Common\CommonService')
<div class="main-container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Date</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashfto')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Date List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#stateModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#stateModal">
								    Add Date
								</a>
								
							
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Date List</h5>
						</div>
					</div>
					<div class="row table-responsive ">
                     	<table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr>
								    <th>Sr.No.</th>
								    <th>Course Name</th>
									<th>From Date</th>
									<th>To Date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							    <?php //dd($dateList); ?>
							    @foreach($dateList as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><?php $courseDetails=$CommonService->getAllCoursesDetails($value->courseId);?>  {{$courseDetails[0]->courseName}}</td>
                                    <td>{{$value->fromDate}}</td>
                                    <td>{{$value->toDate}}</td>
                                    <td>@if($value->status==0) {{'Active'}} @else {{'Not Active'}} @endif</td>
                                    <td>
                                        <a href="{{route('ftocoursesdatelist',['ftoInstructorId'=>$value->id,'deleteOrEditState'=>'editstate'])}}" class="btn btn-edit btn-xs">
                                        <!--<i class="icon-copy fi-pencil" title="Edit"></i>-->
                                        <i class="icon-copy fi-pencil btngreen" title="Edit"></i>
                                      </a>
                                      
                                      <a onclick="deleteState({{$value->id}})" class="btn btn-delete btn-lg">
                                         <i class="icon-copy fi-trash btndelete" title="Delete"></i>
                                      </a>
                                      
                                        
                                    </td>
                                </tr>
                                @endforeach

							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
		
</div>



<!-- Modal -->
<div class="modal fade" id="stateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Add Date</center></h4>
      </div>
      <div class="modal-body">
        	    <form>
        	        
        	        <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="course" id="courseId" required="">
							        <option value="">Select Course</option>
							         @foreach($allCourseList as $key=>$courseList)
							        <option value="{{$courseList->id}}" @if($allDateForEdit) @if($allDateForEdit[0]->courseId==$courseList->id) {{'selected'}} @endif @endif>{{$courseList->courseName}}</option>
							        @endforeach
							    </select>
							</div>
					</div>
					<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control date-picker " placeholder="Select From Date" type="text" name="fromDate" id="fromDate"  value="@if($allDateForEdit){{$allDateForEdit[0]->fromDate}}@endif" required="" >
							</div>
					</div>
					
					
					<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							<input class="form-control date-picker " placeholder="Select To Date" type="text" name="toDate" id="toDate"  value="@if($allDateForEdit){{$allDateForEdit[0]->toDate}}@endif" required="" >
							
							</div>
					</div>
					
					
					
					
					
					
					 <!--       <div class="form-group row">-->
      <!--                      <div class="form-group col-md-6">-->
      <!--                              <label class="col-sm-12  col-form-label"><span style="color: red">*</span>Course Name</label>-->
      <!--                              <select name="courseId" id="courseId" class="selectpicker form-control " title="Choose..." data-live-search="true" required>-->
      <!--                                  <option value="">Select Course</option>-->
      <!--                                  @foreach($allCourseList as $key=>$courseList)-->
      <!--                                  <option value="{{$courseList->id}}" @if($allDateForEdit) @if($allDateForEdit[0]->courseId==$courseList->id) {{'selected'}} @endif @endif>{{$courseList->courseName}}</option>-->
      <!--                                  @endforeach-->
                                        
                                        
                                        
      <!--                              </select>-->
      <!--                          </div>-->
                                
						<!--	<div class="col-sm-12 col-md-11">-->
							    <!--<input class="form-control date-picker" placeholder="Select Date" type="text" name="fromDate" id="fromDate">-->
							    <!--<input class="form-control date-picker" placeholder="Select Date" type="text" name="toDate" id="toDate">-->
						<!--	    <input class="form-control" type="text" name="" id="ftoInstructorId" placeholder="" value="@if($allDateForEdit) {{$allDateForEdit[0]->id}} @endif" required="" hidden>-->
						<!--	   <label class="col-sm-12  col-form-label"><span style="color: red">*</span>From Date</label>-->
						<!--		<input class="form-control date-picker col-sm-12 col-md-10" placeholder="Select Date" type="text" name="fromDate" id="fromDate"  value="@if($allDateForEdit) {{$allDateForEdit[0]->fromDate}} @endif" required="" >-->
						<!--		<label class="col-sm-12  col-form-label"><span style="color: red">*</span>To Date</label>-->
						<!--		<input class="form-control date-picker col-sm-12 col-md-10" placeholder="Select Date" type="text" name="toDate" id="toDate"  value="@if($allDateForEdit) {{$allDateForEdit[0]->toDate}} @endif" required="" >-->
						<!--	</div>-->
						<!--</div>-->

						<!--<div class="modal-footer">-->
      <!--                     <a class="btn btn-success" onclick="saveState();"> Save </a>-->
		    <!--               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
      <!--                </div>-->
                      
                      
                      <div class="modal-footer">
                     <button type="button" class="btn btn-success" onclick="saveState();" >Save</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                 </form>
      </div>
      
    </div>
  </div>
</div>


</div>

	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!};
</script>
<script>
$(document).ready(function(){
    var openModal=<?php echo $openModal; ?>;
    if(openModal==1)
    {
            $('#stateModal').modal('show');
    }
});
</script>
<script type="text/javascript">
function saveState()
{
  
  var editedOrFreshEntries=<?php echo $openModal; ?>;
  var courseId=$("#courseId"). val();
  var fromDate=$("#fromDate"). val();
  var toDate=$("#toDate"). val();
  var ftoInstructorId=$("#ftoInstructorId"). val();
   if(editedOrFreshEntries!=1)
   {
        if(courseId=='' || courseId==null)
        {
          alert("Select Course");
          return false;
        }
        
        if(fromDate=='' || fromDate==null)
        {
          alert("Select From Date");
          return false;
        }
        
        if(toDate=='' || toDate==null)
        {
          alert("Select To Date");
          return false;
        }
       
    }
    
    swal({
          title: "Are you sure?",
          text: "Save Course Date !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Course Date Saved!',
              text: 'Course Date Saved successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/ftocoursesdatelist';
                        $.ajax({
                          headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                          type: "POST",
                          url: url,
                           data:{
                                'editedOrFreshEntries':editedOrFreshEntries,
                                'courseId': courseId,
                                'fromDate': fromDate,
                                'toDate': toDate,
                                'ftoInstructorId': ftoInstructorId,
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


function deleteState(ftoInstructorId)
{

    swal({
          title: "Are you sure?",
          text: "Delete Course Date !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Delete Course Date!',
              text: 'Course Date Deleted successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/ftocoursesdatelist';
                        $('#loader').show();
                        $.ajax({
                          headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                          type: "GET",
                          url: url,
                           data:{
                                'deleteOrEditState':'deleteSmstemplate',
                                'ftoInstructorId': ftoInstructorId,
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
@endsection

