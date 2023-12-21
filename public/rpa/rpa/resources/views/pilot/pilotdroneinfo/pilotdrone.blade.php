@extends('pilot.layout.header')
@section('content')
<div class="main-container">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
      <div class="min-height-200px">
         <div class="page-header">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  <div class="title">
                     <h4>Drone Information</h4>
                  </div>
                  <nav aria-label="breadcrumb" role="navigation">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Drone List</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <div class="dropdown">
                     <a href="#stateModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#stateModal">
                     Add Drone Information
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
                  <h5 class="text-blue">Drone List</h5>
               </div>
            </div>
            <div class="row table-responsive ">
                              
               <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
                  <thead>
                     <tr>
                        <th>Sr.No.</th>
                        <th>Category</th>
                        <th>UAOP Number</th>
                        <th>UAOP Validity</th>
                        <th>UIN Number</th>
                        <th>UIN Validity</th>
                        <!--<th>UAOP Validity</th>-->
                        <th>NPNT</th>
                        <th>Drone Serial Number</th>
                        <th>DAN Number</th>
                        <th>Drone Model No.</th>
                        <th>Drone Make</th>
                        <th>Drone Manufacturar Name</th>
                        <th>Insurance</th>
                        <th>Insurance Validity</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($allPilotDrone as $key=>$value)
                     <tr>
                        <td>{{$key+1}}</td>
                        <td><?php $result=DB::select("select category from category where id='".$value->category."'"); ?> {{$result[0]->category}}</td>
                        <td>{{$value->uaopnumber}}</td>
                        <td>{{$value->uaopvalidity}}</td>
                        <td>{{$value->uinnumber}}</td>
                        <td>{{$value->uinvalidity}}</td>
                        <!--<td>{{$value->uaopvalidity}}</td>-->
                        <td>{{$value->npnt}}</td>
                        <td>{{$value->droneSerialNumber}}</td>
                        <td>{{$value->danNumber}}</td>
                        <td>{{$value->drnModelNum}}</td>
                        <td>{{$value->droneMake}}</td>
                        <td>{{$value->drnManufacturarName}}</td>
                        <td>@if($value->insurance=='1'){{'Yes'}}@else {{'No'}}@endif</td>
                        <td>{{$value->insVal}}</td>
                       
                        <td>
                           <!--<a href="{{route('pilotdroneinfo',['id'=>$value->id,'deleteOrEditDrone'=>'editdrone'])}}" class="btn btn-edit btn-lg">-->
                           <!--<i class="icon-copy fi-pencil btngreen" title="Edit"></i>-->
                           <!--</a>-->
                           <a onclick="deleteDrone({{$value->id}})" class="btn btn-delete btn-lg"><i class="icon-copy fi-trash btndelete" title="Delete"></i></a>
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
                  <center>Add Drone Information</center>
               </h4>
            </div>
            <div class="modal-body">
              
               <form id="myForm" name="myForm">
             
    @csrf
    
        <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
                <select name="category" class="form-control col-sm-12 col-md-6" id="category" title="Choose..." data-live-search="true" required="" onchange="ShowHideDiv()" id="category">

                    <option value="">Select Category</option>
                    @foreach($CategoryListNew as $key=>$CategoryList)
                    <option value="{{$CategoryList->id}}*{{$CategoryList->addInfoReq}}">{{$CategoryList->category}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div style="display: none" id="requiredDiv">
           <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
                    <input name="uaopnumber" type="text" class="form-control" id="uaopnumber" placeholder="Provide UAOP Number">
                </div>
        </div>
        
                <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
                    <input name="uaopvalidity" type="date" class="form-control" id="uaopvalidity" placeholder="Provide UAOP Validity">
                </div>
            </div>

            <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red"></span></label>
							<div class="col-sm-12 col-md-11">
                    <input name="uin" type="text" class="form-control" id="uin" placeholder="Provide UIN Number" value="">
                </div>
            </div>

                <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red"></span></label>
							<div class="col-sm-12 col-md-11">
                    <input name="uinvalidity" type="date" class="form-control" id="uinvalidity" value="" placholder="Provide UIN Validity">
                </div>
            </div>

            <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
                    <input name="npnt" type="text" class="form-control" id="npnt" placeholder="Provide NPNT">
                </div>

                
            </div>
 
 </div>

        <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red"></span></label>
							<div class="col-sm-12 col-md-11">
                <input name="d_serial_no" type="text" class="form-control" id="d_serial_no" placeholder="Provide Drone Serial Number" value="">
            </div>
        </div>
        
            <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red"></span></label>
							<div class="col-sm-12 col-md-11">
                <input name="dan_no" type="text" class="form-control" id="dan_no" placeholder="Provide DAN Number" value="">
            </div>
        </div>

        <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red"></span></label>
							<div class="col-sm-12 col-md-11">
                <input name="drnModelNumber" type="text" class="form-control" id="drnModelNumber" placeholder="Provide Drone Model Number" value="">
            </div>
        </div>
        
        <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red"></span></label>
							<div class="col-sm-12 col-md-11">
                <input name="droneMake" type="text" class="form-control" id="droneMake" placeholder="Provide Drone Make" value="">
            </div>
        </div>
        
            
        <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
                <input name="drnManufacturar" type="text" class="form-control" id="drnManufacturar" placeholder="Provide Drone Manufacturer Name" value="" required>
            </div>
        </div>

        <div class="form-group row">
			<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
			<div class="col-sm-12 col-md-11">
                <select name="insurance" id="insurance" class="col-sm-12 col-md-6 col-form-label" title="Choose..." data-live-search="true" onchange="ShowHideInsDiv()" required>
                    <option value="">Select Is Insurance Available? </option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
        </div>
        
            <div class="form-group row" style="display: none" id="requiredInsDiv">
                
            <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
                <input name="insVal" type="date" class="form-control" id="insVal">
            </div>
        </div>
        
        
						
        </div>
        
           <center>
     
             <button type="button" class="btn btn-success" onclick="saveDrone();">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </center>

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
   function saveDrone()
   {
     
     var editedOrFreshEntries=<?php echo $openModal; ?>;
     var category=$("#category"). val();
     var uaopnumber=$("#uaopnumber"). val();
     var uin=$("#uin"). val();
     var uinvalidity=$("#uinvalidity"). val();
     var uaopvalidity=$("#uaopvalidity"). val();
     var npnt=$("#npnt"). val();
     var d_serial_no=$("#d_serial_no"). val();
     var dan_no=$("#dan_no"). val();
     var drnModelNumber=$("#drnModelNumber"). val();
     var droneMake=$("#droneMake"). val();
     var drnManufacturar=$("#drnManufacturar"). val();
     var insurance=$("#insurance"). val();
     var insVal=$("#insVal"). val();
      if(editedOrFreshEntries!=1)
      {
          if(category=='' || category==null)
          {
             alert("Select Category Name");
             return false;
          }
           
        //   if(uaopnumber=='' || uaopnumber==null)
        //   {
        //      alert("Enter UAOPsss Number");
        //      return false;
        //   }
          
        //   if(uaopvalidity=='' || uaopvalidity==null)
        //   {
        //      alert("Enter UAOP Validity");
        //   }
          
        //   if(npnt=='' || npnt==null)
        //       {
        //          alert("Enter NPNT");
        //          return false;
        //       }
              
              
          if(drnManufacturar=='' || drnManufacturar==null)
              {
                 alert("Enter Manufacturer Name");
                 return false;
              }
              
              
              if(insurance=='' || insurance==null)
              {
                 alert("Select Is Insurance Available?");
                 return false;
              }
              
              if(editedOrFreshEntries!=1 && insurance==1)
                {
                      if(insVal=='' || insVal==null)
                      {
                         alert("Select Insurance Validity");
                         return false;
                      }
                }
              
      }
       
      else
      {
          if(editedOrFreshEntries!=0)
          {
              if(category=='' || category==null)
              {
                 alert("Select Category");
                 return false;
              }
               
              if(uaopnumber=='' || uaopnumber==null)
              {
                 alert("Enter UAOP Number");
                 return false;
              }
              
              if(uaopvalidity=='' || uaopvalidity==null)
              {
                 alert("Enter UAOP Validity");
                 return false;
              }
              
              if(npnt=='' || npnt==null)
              {
                 alert("Enter NPNT");
                 return false;
              }
              
              if(drnManufacturar=='' || drnManufacturar==null)
              {
                 alert("Enter Manufacturer Name");
                 return false;
              }
              
              if(insurance=='' || insurance==null)
              {
                 alert("Select Is Insurance Available?");
                 return false;
              }
              
              if(editedOrFreshEntries!=1 && insurance==1)
                {
                      if(insVal=='' || insVal==null)
                      {
                         alert("Select Insurance Validity");
                         return false;
                      }
                }
              
          } 
      }
       
       
       
       swal({
             title: "Are you sure?",
             text: "Save Drone Information !",
             icon: "warning",
             buttons: [
               'No !',
               'Yes !'
             ],
             dangerMode: true,
           }).then(function(isConfirm) {
             if (isConfirm) {
               swal({
                 title: 'Drone Information Saved!',
                 text: 'Drone Information Saved successfully!',
                 icon: 'success'
               }).then(function() {
                 
                           var url =APP_URL+'/pilotdroneinfo';
                           $.ajax({
                             headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                             type: "POST",
                             url: url,
                              data:{
                                  'editedOrFreshEntries':editedOrFreshEntries,
                                  'category': category,
                                  'uaopnumber': uaopnumber,
                                  'uin': uin,
                                  'uaopvalidity':uaopvalidity,
                                  'uinvalidity': uinvalidity,
                                  'npnt': npnt,
                                  'd_serial_no': d_serial_no,
                                  'dan_no': dan_no,
                                  'drnModelNumber': drnModelNumber,
                                  'droneMake': droneMake,
                                  'drnManufacturar': drnManufacturar,
                                  'insurance': insurance,
                                  'insVal': insVal,
                               
                                  },
                            //  data:$('#myForm').serializeArray(),
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
   
   
   function deleteDrone(id)
   {
   
       swal({
             title: "Are you sure?",
             text: "Delete Drone Information !",
             icon: "warning",
             buttons: [
               'No !',
               'Yes !'
             ],
             dangerMode: true,
           }).then(function(isConfirm) {
             if (isConfirm) {
               swal({
                 title: 'Delete Drone Information!',
                 text: 'Drone Information Deleted successfully!',
                 icon: 'success'
               }).then(function() {
                 
                           var url =APP_URL+'/pilotdroneinfo';
                           $('#loader').show();
                           $.ajax({
                             headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                             type: "GET",
                             url: url,
                              data:{
                                   'deleteOrEditDrone':'deleteDrone',
                                   'id': id,
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




<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>



<script type="text/javascript">
    function ShowHideDiv() 
    {
        var category = document.getElementById("category").value;
        var categoryId=category.toString().split("*");
        var requiredDiv = document.getElementById("requiredDiv");
        requiredDiv.style.display = categoryId[1] == "1" ? "block" : "none";
    }
</script> 


<script type="text/javascript">
    function ShowHideInsDiv() 
    {
        var insurance = document.getElementById("insurance").value;
        // var categoryId=category.toString().split("*");
        var requiredInsDiv = document.getElementById("requiredInsDiv");
        requiredInsDiv.style.display = insurance == "1" ? "block" : "none";
    }
</script> 



<script type="text/javascript">
        function Validate() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confpassword").value;
            if (password != confirmPassword) 
            {
                alert("Passwords do not match.");
                return false;
            }

        var category = document.getElementById("category").value;
        var categoryId=category.toString().split("*");
        
        if(categoryId[1]==1)
        {
           
          var uaopnumber=$("#uaopnumber"). val();
           
            if(uaopnumber=='' || uaopnumber==null)
               {
                 alert("Enter UAOP Name");
                 return false;
               }
               
               
           var uaopvalidity=$("#uaopvalidity"). val();
           
            if(uaopvalidity=='' || uaopvalidity==null)
               {
                 alert("Select UAOP Validity");
                 return false;
               }
               
               
               
               var npnt=$("#npnt"). val();
           
            if(npnt=='' || npnt==null)
               {
                 alert("Enter NPNT");
                 return false;
               }
               
               
               
               var ftoId=$("#ftoId"). val();
           
            if(ftoId=='' || ftoId==null)
               {
                 alert("Select FTO Name");
                 return false;
               }
            
        }
        
            return true;
        }
</script>