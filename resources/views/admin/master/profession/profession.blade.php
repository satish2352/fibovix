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
                     <h4>Profession</h4>
                  </div>
                  <nav aria-label="breadcrumb" role="navigation">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profession List</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <a href="#stateModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#stateModal">
                  Add Profession
                  </a>
               </div>
            </div>
         </div>
         <!-- Export Datatable start -->
         <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
            <div class="clearfix mb-20">
               <div class="pull-left">
                  <h5 class="text-blue">Profession List</h5>
               </div>
            </div>
            <div class="row table-responsive ">
               <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
                  <thead>
                     <tr>
                        <th>Sr.No.</th>
                        <th>Profession</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($allState as $key=>$value)
                     <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->profession}}</td>
                        <td>@if($value->status==0) {{'Active'}} @else {{'Not Active'}} @endif</td>
                        <td>
                           <a href="{{route('professionlist',['stateId'=>$value->id,'deleteOrEditState'=>'editstate'])}}" class="btn btn-edit btn-lg">
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
              
               <h4 class="modal-title" id="myModalLabel">
                  <center>Add Profession</center>
               </h4>
            </div>
            <div class="modal-body">
               <form>
                  <div class="form-group row">
                     <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
                     <div class="col-sm-12 col-md-11">
                        <input class="form-control" type="text" name="" id="stateId" placeholder="" value="@if($allStateForEdit) {{$allStateForEdit[0]->id}} @endif" required="" hidden>
                        <input class="form-control" type="text" name="" id="stateName" placeholder="Enter Profession Name" value="@if($allStateForEdit){{$allStateForEdit[0]->profession}}@endif" required="" >
                     </div>
                  </div>
                 
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
     var stateName=$("#stateName"). val();
     var stateId=$("#stateId"). val();
      if(editedOrFreshEntries!=1)
      {
           if(stateName=='' || stateName==null)
           {
             alert("Enter Profession Name");
             return false;
           }
          
       }
       
       else
       {
          if(editedOrFreshEntries!=0)
          {
               if(stateName=='' || stateName==null)
               {
                 alert("Enter Profession Name");
                 return false;
               }
           } 
       }
       
       
       swal({
             title: "Are you sure?",
             text: "Save Profession !",
             icon: "warning",
             buttons: [
               'No !',
               'Yes !'
             ],
             dangerMode: true,
           }).then(function(isConfirm) {
             if (isConfirm) {
               swal({
                 title: 'Profession Saved!',
                 text: 'Profession Saved successfully!',
                 icon: 'success'
               }).then(function() {
                 
                           var url =APP_URL+'/professionlist';
                           $.ajax({
                             headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                             type: "POST",
                             url: url,
                              data:{
                                   'editedOrFreshEntries':editedOrFreshEntries,
                                   'stateName': stateName,
                                   'stateId': stateId,
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
   
   
   function deleteState(stateId)
   {
   
       swal({
             title: "Are you sure?",
             text: "Delete State !",
             icon: "warning",
             buttons: [
               'No !',
               'Yes !'
             ],
             dangerMode: true,
           }).then(function(isConfirm) {
             if (isConfirm) {
               swal({
                 title: 'Delete Profession!',
                 text: 'Profession Deleted successfully!',
                 icon: 'success'
               }).then(function() {
                 
                           var url =APP_URL+'/professionlist';
                           $('#loader').show();
                           $.ajax({
                             headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                             type: "GET",
                             url: url,
                              data:{
                                   'deleteOrEditState':'deleteSmstemplate',
                                   'stateId': stateId,
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