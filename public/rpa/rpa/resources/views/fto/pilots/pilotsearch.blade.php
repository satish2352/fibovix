@extends('fto.layout.header')
@section('content')
@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<div class="main-container">
<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
   <div class="min-height-200px">
      <div class="page-header">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="title">
                  <h4>Pilots</h4>
               </div>
               <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{route('dashfto')}}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Pilots Search</li>
                  </ol>
               </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
            </div>
         </div>
      </div>
      <!-- Export Datatable start -->
      <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
         <div class="clearfix mb-20">
            <div class="pull-left">
               <h5 class="text-blue">Pilots Search</h5>
            </div>
         </div>
         <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
            <div class="clearfix">
               <!--<div class="pull-left">-->
               <!--	<h4 class="text-blue">Select 2</h4>-->
               <!--	<p class="mb-30 font-14">Select2 for custom search and select</p>-->
               <!--</div>-->
            </div>
            <form>
               <div id="tableAjax">
                  <div class="row">
                     <div class="form-group col-sm-4" >
                        <label>State</label>
                        <select name="state" id="stateId" class="custom-select col-12" onchange="getResultByState(this.value);" title="Choose..." data-live-search="true" required>
                           <option value="">Choose State</option>
                           @foreach($stateList as $key=>$state)
                           <option value="{{$state->id}}" >{{$state->name}}</option>
                           @endforeach                                
                        </select>
                     </div>
                     <div class="form-group col-sm-4">
                         <label>State</label>
                        <select name="state" id="stateId" class="custom-select col-12" onchange="getResultByState(this.value);" title="Choose..." data-live-search="true" required>
                           <option value="">Choose State</option>
                           @foreach($stateList as $key=>$state)
                           <option value="{{$state->id}}" >{{$state->name}}</option>
                           @endforeach                                
                        </select>
                     </div>
                     <div class="form-group col-sm-4">
                     </div>
                  </div>
            </form>
            <div class="row table-responsive ">
            <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr>
            <?php
               $count=0;
               ?>
            <!--<th class="table-plus datatable-nosort"></th>-->
            <th>Sn.</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Category</th>
            <th>Email</th>
            <th>State</th>
            <th>City</th>
            <th>FTO Approved</th>
            <th>Status</th>
            <th>Action</th>
            <!--<th>Entry By</th>-->
            <!--<th>Aadhar No.</th>-->
            <!--<th>Category</th>-->
            <!--<th>UAOP Number</th>-->
            <!--<th>UAOP Validity</th>-->
            <!--<th>UIN Number</th>-->
            <!--<th>UIN Validity</th>-->
            <!--<th>NPNT</th>-->
            <!--<th>FTO</th>-->
            <!--<th>Drone Serial Number</th>-->
            <!--<th>Proffession</th>-->
            <!--<th>Experience</th>-->
            <!--<th>Passport</th>-->
            <!--<th>Driving Licence</th>-->
            <!--<th>Qualification</th>-->
            <!--<th>Passport Photo</th>-->
            <!--<th>Registration Date</th>-->
            </tr>
            </thead>
            <tbody>
            @if(count($allPilots) > 0)
            <?php
               //dd($allPilots);
                                              foreach($allPilots as $getallPilots )
                                              {
                                    ?>
            <tr>
            <td>{{ ++$count}}</td>
            <td>{{ $getallPilots->firstName}} {{$getallPilots->middleName}} {{$getallPilots->lastName }}</td>
            <td>{{ $getallPilots->mobile }}</td>
            <td><?php $pilotDetails=$CommonService->getCategoryList($getallPilots->category);?>  {{$pilotDetails[0]->category}}</td>
            <td>{{ $getallPilots->email }}</td>
            <td><?php $pilotDetailsAbc=$CommonService->getPerticularStateById($getallPilots->stateID);?>  {{$pilotDetailsAbc[0]->name}}</td>
			<td><?php $pilotDetails=$CommonService->getPerticularCityById($getallPilots->cityId);?>  {{$pilotDetails[0]->name}}</td>
            <td>
            @if ($getallPilots->ftoApproved == 1)
            <font color="green">{{'FTO Approved'}}</font>
            @else
            <font color="red">{{'FTO Not Approved'}}</font>
            @endif
            </td>
            <td>
            @if ($getallPilots->adminApproved == 1 && $getallPilots->ftoApproved == 1)
            <a class="btn btn-success" href="{{route('admpilotdisapprove',array('pilotId'=>$getallPilots->pilotIdFInal,'approvalVal'=>$getallPilots->adminApproved))}}" title="Approved" role="button" >
            <i class="fa fa-thumbs-up"></i>
            </a>
            @elseif($getallPilots->adminApproved == 0 && $getallPilots->ftoApproved == 1 )
            <a class="btn btn-danger" href="{{route('admpilotapprove',array('pilotId'=>$getallPilots->pilotIdFInal,'approvalVal'=>$getallPilots->adminApproved))}}" title="DisApproved" role="button" >
            <i class="fa fa-thumbs-down"></i>
            </a>
            @elseif($getallPilots->ftoApproved == 0 )
            <font color="red">{{'Not Approved By FTO'}}</font>
            @endif
            </td>
            <td>
            <a class="btn btn-primary" href="#" role="button" >
            View
            </a>
            </td>
            <!--<td>-->
            <!--       @if ($getallPilots->entryBy == 0)-->
            <!--               User-->
            <!--       @else-->
            <!--               Admin-->
            <!--                               @endif-->
            <!--   </td>-->
            <!--<td>{{ $getallPilots->adharNumber }}</td>-->
            <!--<td>{{ $getallPilots->category }}</td>-->
            <!--<td>{{ $getallPilots->uaopnumber }}</td>-->
            <!--<td>{{ $getallPilots->uaopvalidity }}</td>-->
            <!--<td>{{ $getallPilots->uinnumber }}</td>-->
            <!--<td>{{ $getallPilots->uinvalidity }}</td>-->
            <!--<td>{{ $getallPilots->npnt }}</td>-->
            <!--<td>{{ $getallPilots->name }}</td>-->
            <!--<td>{{ $getallPilots->droneSerialNumber }}</td>-->
            <!--<td>{{ $getallPilots->proffession }}</td>-->
            <!--<td>{{ $getallPilots->experience }}</td>-->
            <!--<td>{{ $getallPilots->passport }}</td>-->
            <!--<td>{{ $getallPilots->drivingLicence }}</td>-->
            <!--<td>{{ $getallPilots->eduQualification }}</td>-->
            <!--<td>{{ $getallPilots->passportPhoto }}</td>-->
            <!--<td>{{ $getallPilots->createdAt }}</td>-->
            </tr>
            <?php
               }
               ?>
            @endif
            </tbody>
            </table>
            </div>
            </div>
         </div>
         <!-- Export Datatable End -->
      </div>
   </div>
</div>
<script type="text/javascript">
   function getResultByState(stateId)
   {
     $('#tableAjax').empty();
     var url =APP_URL+'/'+'pilotsearchbyftostatecity';
     $.ajax({
               type: "post",
               url: url,
               data :{
                   "_token": "{{ csrf_token() }}",
                   'stateId':stateId,
               },
               success: function(newdata)
               {
                 $('#tableAjax').empty();
                 $('#tableAjax').append(newdata);
   
               }
   
             });
   }
</script>
<script type="text/javascript">
   function getResultByCity(cityId)
   {
     var stateId=document.getElementById('stateId').value;
     $('#tableAjax').empty();
     var url =APP_URL+'/'+'pilotsearchbyftostatecity';
     $.ajax({
               type: "post",
               url: url,
               data :{
                   "_token": "{{ csrf_token() }}",
                   'stateId':stateId,
                   'cityId':cityId,
               },
               success: function(newdata)
               {
                 $('#tableAjax').empty();
                 $('#tableAjax').append(newdata);
   
               }
   
             });
   }
</script>
@endsection