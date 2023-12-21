@extends('admin.layout.header')
@section('content')
@inject('FTOInstructorService', 'App\Http\Service\Admin\FTO\FTOInstructorService')
@inject('CommonService', 'App\Http\Service\Common\CommonService')

<div class="main-container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Instructor Name</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Instructor Name List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#stateModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#stateModal">
								    Add Instructor Name
								</a>
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Instructor Name List</h5>
						</div>
					</div>
					<div class="row table-responsive ">
					     <?php //dd($allState); ?>                       
                     	<table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
                     	    <thead>
								<tr>
								    <th>Sr.No.</th>
								    <th>FTO Represented</th>
								    <th>Trainer Name</th>
								</tr>
							</thead>
							<tbody>
							    @foreach($ftoList as $key=>$FTOsList)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><?php $ftoDetails=$CommonService->getFTODetails($FTOsList->id);?>  {{$ftoDetails[0]->FTOName}}</td>
                                    <td>  <?php $allInstructorList=$FTOInstructorService->getAllInstructorListUderFTO($FTOsList->id); ?>
                                            @if(count($allInstructorList))
                                            @foreach($allInstructorList as $key=>$value)
                                             {{$key+1}} .{{$value->instructorName}}  &nbsp; 
                                             <?php //@if($value->status==0) {{'Active'}} @else {{'Not Active'}} @endif ?>
                                                 &nbsp;
                                                  <a href="{{route('ftoinstrctorlist',['ftoInstructorId'=>$value->id,'deleteOrEditState'=>'editstate'])}}" class="btn btn-edit btn-lg">
                                                    <i class="icon-copy fi-pencil btngreen" title="Edit"></i>
                                                   &nbsp;
                                                  <a onclick="deleteState({{$value->id}})" class="btn btn-delete btn-lg">
                                                    <i class="icon-copy fi-trash btndelete" title="Delete"></i>
                                                    </a>
                                                &nbsp;
                                            @endforeach
                                            @else
                                            <span class="text-danger">No Instructor Present</span>
                                            @endif
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
        <h4 class="modal-title" id="myModalLabel"><center>Add Instructor Name</center></h4>
      </div>
      <div class="modal-body">
        	    <form>
<?php //dd($ftoList); ?>
                    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="ftoId" id="ftoId" required="">
							        <option value="">Select FTO</option>
							         @foreach($ftoList as $key=>$FTOsList)
							        <option value="{{$FTOsList->id}}"@if($allStateForEdit)  @if($FTOsList->id==$allStateForEdit[0]->underFTO) {{'selected'}} @endif @endif >{{$FTOsList->FTOName}}</option>
							        @endforeach
							    </select>
							</div>
					</div>
					<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <input class="form-control" type="text" name="" id="ftoInstructorId" placeholder="" value="@if($allStateForEdit){{$allStateForEdit[0]->id}}@endif" required="" hidden>
								<input class="form-control" type="text" name="" id="ftoInstructorName" placeholder="Enter Instructor Name" value="@if($allStateForEdit){{$allStateForEdit[0]->instructorName}}@endif" required="" >
							</div>
					</div>
					

						<!--<div class="modal-footer">-->
      <!--                     <a class="btn btn-success" onclick="saveState();"> Save </a>-->
		    <!--               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
      <!--                </div>-->
                      
                      
                      <div class="modal-footer">
                           <button class="btn btn-success" type="submit" name="addCourse" onclick="saveState();">
		                        Save
                           </button>
          
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
  var ftoInstructorName=$("#ftoInstructorName").val();
  var ftoInstructorId=$("#ftoInstructorId").val();
  var ftoId=$("#ftoId").val();
   if(editedOrFreshEntries!=1)
   {
       
       if(ftoId=='' || ftoId==null)
        {
          alert("Select FTO Name");
          return false;
        }
        
        if(ftoInstructorName=='' || ftoInstructorName==null)
        {
          alert("Enter Instructor Name");
          return false;
        }
        
        
    }
    
    else
       {
          if(editedOrFreshEntries!=0)
          {
              if(ftoId=='' || ftoId==null)
                {
                  alert("Select FTO Name");
                  return false;
                }
        
        
               if(ftoInstructorName=='' || ftoInstructorName==null)
               {
                 alert("Enter Instructor Name");
                 return false;
               }
           } 
           
           
        
       }
       
       
    
    swal({
          title: "Are you sure?",
          text: "Save Instructor !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Instructor Saved!',
              text: 'Instructor Saved successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/ftoinstrctorlist';
                        $.ajax({
                          headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                          type: "POST",
                          url: url,
                           data:{
                                'editedOrFreshEntries':editedOrFreshEntries,
                                'ftoInstructorName': ftoInstructorName,
                                'ftoInstructorId': ftoInstructorId,
                                'ftoId': ftoId,
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
          text: "Delete Instructor !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Delete Instructor!',
              text: 'Instructor Deleted successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/ftoinstrctorlist';
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


