@extends('admin.layout.header')
@section('content')
<style>
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>
<div class="main-container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Expert</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Expert List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a href="#stateModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#stateModal">
								    Add Expert
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
							<h5 class="text-blue">Expert List</h5>
						</div>
					</div>
					<div class="row table-responsive ">
					     <?php //dd($allState); ?>                       
                     	<table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
							<thead>
								<tr>
								  <th>Sr.No.</th>
									<th>Expert Name</th>
                                      <th>Email</th>
                                      <th>Mobile</th>
                                      <th>Proffession</th>
                                      <th>Address</th>
                                      <th>Passport Photo</th>
                    				<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							    @foreach($allState as $key=>$value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->firstName}} {{$value->middleName}} {{$value->lastName}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->mobile}}</td>
                        <td>{{$value->proffession}}</td>
                        <td>{{$value->address}}</td>
                        <td><img src="<?php echo env('APP_URL');?>public/asset/expert/{{$value->passportPhoto}}"></td>
                        <td>@if($value->status==0) {{'Active'}} @else {{'Not Active'}} @endif</td>
                        <td>
                          <a href="{{route('expertlist',['categoryId'=>$value->id,'deleteOrEditState'=>'editstate'])}}" class="btn btn-edit btn-lg">
                            <i class="icon-copy fi-pencil btngreen" title="Edit"></i>
                          </a>
               
                          <a onclick="deleteCategory( {{$value->id}} )" class="btn btn-delete btn-lg">
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
        <h4 class="modal-title" id="myModalLabel"><center>Add Expert</center></h4>
      </div>
      <div class="modal-body">
        	<form>
					  <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <input class="form-control" type="text" name="" id="categoryId" placeholder="" value="@if($allStateForEdit){{$allStateForEdit[0]->id}}@endif" required="" hidden>
								<input class="form-control" type="text" name="" id="firstName1" placeholder="Enter First Name" value="@if($allStateForEdit){{$allStateForEdit[0]->firstName}}@endif" required="" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
								
							</div>
						</div>
						
            <div class="form-group row">
              <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
              <div class="col-sm-12 col-md-11">
                
                <input class="form-control" type="text" name="" id="middleName1" placeholder="Enter Middle Name" value="@if($allStateForEdit){{$allStateForEdit[0]->middleName}}@endif" required="" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');" >
                <p id="email-availability-status1" style="color: red"></p>
                                <p  id="loaderIcon1" style="display:none; color: red" ></p>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
              <div class="col-sm-12 col-md-11">
                
                <input class="form-control" type="text" name="" id="lastName1" placeholder="Enter Last Name" value="@if($allStateForEdit){{$allStateForEdit[0]->lastName}}@endif" required="" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                <p id="email-availability-status1" style="color: red"></p>
                                <p  id="loaderIcon1" style="display:none; color: red" ></p>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
              <div class="col-sm-12 col-md-11">
                  
                <input class="form-control" type="email" name="" id="email1" placeholder="Enter Email Address" value="@if($allStateForEdit){{$allStateForEdit[0]->email}}@endif" required="" >
                <p id="email-availability-status1" style="color: red"></p>
                                <p  id="loaderIcon1" style="display:none; color: red" ></p>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
              <div class="col-sm-12 col-md-11">
                  
                <input class="form-control" type="text" name="" id="mobile1" placeholder="Enter Mobile Number" value="@if($allStateForEdit){{$allStateForEdit[0]->mobile}}@endif" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" required="">
                <p id="email-availability-status1" style="color: red"></p>
                                <p  id="loaderIcon1" style="display:none; color: red" ></p>
              </div>
            </div>

            <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
									<select name="proffession"   id="proffession1" class="form-control" required>
                    <option value="" >Select Proffession</option>
                    <option value="BE" @if($allStateForEdit) @if($allStateForEdit[0]->proffession=='BE') {{'selected'}} @endif  @endif >BE</option>
                    <option value="ME" @if($allStateForEdit) @if($allStateForEdit[0]->proffession=='ME') {{'selected'}} @endif  @endif >ME</option>
                  </select>
                                    
							</div>
						</div>
						
            <div class="form-group row">
              <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
              <div class="col-sm-12 col-md-11">
                
                <textarea class="form-control" type="text" name="" id="address1" placeholder="Enter Address" required=""> @if($allStateForEdit){{$allStateForEdit[0]->address}}@endif</textarea>
                <p id="email-availability-status1" style="color: red"></p>
                                <p  id="loaderIcon1" style="display:none; color: red" ></p>
              </div>
            </div> 

            <div class="form-group row">
              <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
              <div class="col-sm-12 col-md-11">
                <img id="preview_img" src="<?php echo env('APP_URL');?>public/asset/expert/no-image-available.png" height="100" width="100"/>
                <input data-preview="#preview" class="form-control" type="file" name="passportPhoto" id="image" value="@if($allStateForEdit){{$allStateForEdit[0]->passportPhoto}}@endif" required="">
                <p id="email-availability-status1" style="color: red"></p>
                                <p  id="loaderIcon1" style="display:none; color: red" ></p>
              </div>
            </div>          
                      
                      <div class="modal-footer">
                         <button type="button" class="btn btn-success" onclick="saveCategory();" >Save</button>
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                  
                  
						<!--<div class="modal-footer">-->
                           
      <!--                     <button class="btn btn-success" type="submit" onclick="saveState();">-->
		    <!--                    Submit-->
      <!--                     </button>-->
                           
		    <!--               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
      <!--                  </div>-->
                </form>
      </div>
      
    </div>
  </div>
</div>


</div>

<script type="text/javascript">
    $(document).ready(function(){
        //Image file input change event
        $("#image").change(function(){
            readImageData(this);//Call image read and render function
        });
    });
     
    function readImageData(imgData){
        if (imgData.files && imgData.files[0]) {
            var readerObj = new FileReader();
            
            readerObj.onload = function (element) {
                $('#preview_img').attr('src', element.target.result);
            }
            
            readerObj.readAsDataURL(imgData.files[0]);
        }
    }
</script>	
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
function saveCategory()
{
  
  var editedOrFreshEntries=<?php echo $openModal; ?>;
  var firstName1=$("#firstName1"). val();
  var middleName1=$("#middleName1"). val();
  var lastName1=$("#lastName1"). val();
  var email1=$("#email1"). val();
  var mobile1=$("#mobile1"). val();
  var proffession1=$("#proffession1"). val();
  var address1=$("#address1"). val();
  var passportPhoto1=$("#image"). val();
  
   if(editedOrFreshEntries!=1)
   {
        if(firstName1=='' || firstName1==null)
        {
          alert("Enter First Name");
          return false;
        }
        if(middleName1=='' || middleName1==null)
        {
          alert("Enter Middle Name");
          return false;
        }
        if(lastName1=='' || lastName1==null)
        {
          alert("Enter Last Name");
          return false;
        }
        if(email1=='' || email1==null)
        {
          alert("Enter Email Address");
          return false;
        }
        if(mobile1=='' || mobile1==null)
        {
          alert("Enter Mobile Number");
          return false;
        }
        if(proffession1=='' || proffession1==null)
        {
          alert("Select Proffession");
          return false;
        }
        if(address1=='' || address1==null)
        {
          alert("Enter Address");
          return false;
        }
        // if(passportPhoto1=='' || passportPhoto1==null)
        // {
        //   alert("Select Photo?");
        //   return false;
        // }
      
    }
    
    
     else
       {
          if(editedOrFreshEntries!=0)
          {
              if(firstName1=='' || firstName1==null)
              {
                alert("Enter First Name");
                return false;
              }
              if(middleName1=='' || middleName1==null)
              {
                alert("Enter Middle Name");
                return false;
              }
              if(lastName1=='' || lastName1==null)
              {
                alert("Enter Last Name");
                return false;
              }
              if(email1=='' || email1==null)
              {
                alert("Enter Email Address");
                return false;
              }
              if(mobile1=='' || mobile1==null)
              {
                alert("Enter Mobile Number");
                return false;
              }
              if(proffession1=='' || proffession1==null)
              {
                alert("Select Proffession");
                return false;
              }
              if(address1=='' || address1==null)
              {
                alert("Enter Address");
                return false;
              }
              // if(passportPhoto=='' || passportPhoto==null)
              // {
              //   alert("Select Photo?");
              //   return false;
              // }
           }
         
       }
       
       
    
    swal({
          title: "Are you sure?",
          text: "Add Expert !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Expert Added!',
              text: 'Expert Added successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/expertlist';
                       
                        $.ajax({
                          headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                          type: "POST",
                          url: url,
                           data:{
                                'editedOrFreshEntries':editedOrFreshEntries,
                                'firstName1': firstName1,
                                'middleName1': middleName1,
                                'lastName1': lastName1,
                                'email1': email1,
                                'mobile1': mobile1,
                                'proffession1': proffession1,
                                'address1': address1,
                                'passportPhoto1': passportPhoto1,
                            
                                },
                          success: function(newdata)
                          {
                            window.location = url;
                          }

                         });
            });
          } else {
            swal("Cancelled", "You are cancelled :)", "error");
          }
        });

}


function deleteCategory(categoryId)
{

    swal({
          title: "Are you sure?",
          text: "Delete Expert !",
          icon: "warning",
          buttons: [
            'No !',
            'Yes !'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Delete Expert!',
              text: 'Expert Deleted successfully!',
              icon: 'success'
            }).then(function() {
              
                        var url =APP_URL+'/expertlist';
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


