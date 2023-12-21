@extends('admin.layout.header')
@section('content')

<div class="main-container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Duration</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Duration List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#stateModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#stateModal">
								    Add Duration
								</a>
								
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Duration List</h5>
						</div>
					</div>
					<div class="row table-responsive ">
					     <?php //dd($allState); ?>                       
                     	<table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr>
								    <th>Sr.No.</th>
									<th>Duration</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							    @foreach($allState as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->duration}}</td>
                                    <td>@if($value->status==0) {{'Active'}} @else {{'Not Active'}} @endif</td>
                                    <td>
                                      <a href="{{route('durationlist',['categoryId'=>$value->id,'deleteOrEditState'=>'editstate'])}}" class="btn btn-edit btn-lg">
                                        <i class="icon-copy fi-pencil btngreen" title="Edit"></i>
                                      </a>
                           
                                      
                                      <a onclick="deleteDuration({{$value->id}})" class="btn btn-delete btn-lg">
                                        <i class="icon-copy fi-trash btndelete" title="Delete"></i>
                                        </a>
                                    </td>
                                </tr>
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
				<!-- Export Datatable End -->
			</div>
		
</div>



<!-- Modal -->
<div class="modal fade" id="stateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Add Duration</center></h4>
      </div>
      <div class="modal-body">
        	    <form>
					        <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <input class="form-control" type="text" name="" id="categoryId" placeholder="" value="@if($allStateForEdit){{$allStateForEdit[0]->id}}@endif"  required="" hidden>
								<input class="form-control" type="text" name="" id="categoryName" placeholder="Enter Duration" value="@if($allStateForEdit){{$allStateForEdit[0]->duration}}@endif"  required="" >
								
							</div>
						</div>

						<div class="modal-footer">
                           <button type="button" class="btn btn-success" onclick="saveDuration();" >Save</button>
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
function saveDuration()
{
  
  var editedOrFreshEntries=<?php echo $openModal; ?>;
  var categoryName=$("#categoryName"). val();
  var categoryId=$("#categoryId"). val();
   if(editedOrFreshEntries!=1)
   {
        if(categoryName=='' || categoryName==null)
        {
          alert("Enter Duration");
          return false;
        }
       
    }
    
    
    else
       {
          if(editedOrFreshEntries!=0)
          {
               if(categoryName=='' || categoryName==null)
               {
                 alert("Enter Duration Name");
                 return false;
               }
           } 
           
           
        
       }
       
       
    
    swal({
          title: "Are you sure?",
          text: "Save Duration !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Duration Saved!',
              text: 'Duration Saved successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/durationlist';
                        $.ajax({
                          headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                          type: "POST",
                          url: url,
                           data:{
                                'editedOrFreshEntries':editedOrFreshEntries,
                                'categoryName': categoryName,
                                'categoryId': categoryId,
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


function deleteDuration(categoryId)
{

    swal({
          title: "Are you sure?",
          text: "Delete Duration !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Delete Duration!',
              text: 'Duration Deleted successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/durationlist';
                        $('#loader').show();
                        $.ajax({
                          headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                          type: "GET",
                          url: url,
                           data:{
                                'deleteOrEditState':'deleteSmstemplate',
                                'categoryId': categoryId,
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


