@extends('website.layouts.app')
@section('title')
    All Instructor List
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    
@inject('FTOInstructorService', 'App\Http\Service\Admin\FTO\FTOInstructorService')
@inject('CommonService', 'App\Http\Service\Common\CommonService')

<div class="container text-center">
    <br>
    
      
               <div id="tableAjax">
                  <div class="row">
                      
                     
                     <div class="form-group col-sm-4">
                     </div>
                  </div>
            </form>
            <div class="row table-responsive ">
					<div class="row table-responsive ">
					     <?php //dd($allState); ?>                       
                     	<table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
                     	    <thead>
								<tr>
								    <th>Sr.No.</th>
								    <th>FTO Name</th>
									<th>Instructor Name</th>
								    <th></th>
								    <th></th>
								</tr>
							</thead>
							<tbody>
							    @foreach($ftoList as $key=>$FTOsList)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><?php $ftoDetails=$CommonService->getFTODetails($FTOsList->id);?>  {{$ftoDetails[0]->firstName}}  {{$ftoDetails[0]->middleName}}  {{$ftoDetails[0]->lastName}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                                <?php $allInstructorList=$FTOInstructorService->getAllInstructorListUderFTO($FTOsList->id);
                                      //dd($allInstructorList);?>
                                @if(count($allInstructorList))
                                @foreach($allInstructorList as $key=>$value)
                                <tr>
                                    
                                    <td></td>
                                    <td align="right">{{$key+1}}</td>
                                    <td>{{$value->instructorName}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforeach
                                @else
                                <td colspan="5" align="center"><span class="text-danger">No Instructor Present</span></td>
                                @endif
                                
                                
                                @endforeach
							    
                     	    
                     	    
                     	    
                     	    
						
							    
							    
							 <!--   <tr>-->
							        
								<!--    <td>1</td>-->
								<!--	<td>Maharastra</td>-->
								<!--	<td>-->
								<!--	   	<button class="btn btn-danger" role="button">-->
        <!--								    <i class="fa fa-thumbs-down"></i>-->
        <!--								</button>-->
        <!--                        	</td>-->
								    
								<!--	<td>-->
								<!--	    <a class="btn btn-primary" href="#" role="button" >-->
								<!--	        View-->
								<!--        </a>-->
								<!--    </td>-->
								<!--</tr> -->
																


							</tbody>
						</table>
					</div>
				</div>
			</div>
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

                    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="ftoId" id="ftoId" required="">
							        <option value="">Select FTO</option>
							         @foreach($ftoList as $key=>$FTOsList)
							        <option value="{{$FTOsList->id}}"@if($allStateForEdit)  @if($FTOsList->id==$allStateForEdit[0]->underFTO) {{'selected'}} @endif @endif >{{$FTOsList->firstName}} {{$FTOsList->middleName}} {{$FTOsList->lastName}}</option>
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
@section('footer')
    @include('website.layouts.footer')
@endsection


