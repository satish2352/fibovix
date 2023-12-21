@extends('admin.layout.header')
@section('content')
@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<div class="main-container">
<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
   <div class="min-height-200px">
      <div class="page-header">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="title">
                  <h4>FTOs</h4>
               </div>
               <nav aria-label="breadcrumb" role="navigation">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">FTOs Search</li>
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
               <h5 class="text-blue">FTOs Search</h5>
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
            <th>Sn.</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>State</th>
            <th>City</th>
            <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @if(count($allFTO) > 0)
            <?php
               foreach($allFTO as $getallFTOs )
               {
               ?>
            <tr>
            <td>{{ ++$count}}</td>
            <td>{{ $getallFTOs->firstName}} {{$getallFTOs->middleName}} {{$getallFTOs->lastName }}</td>
            <td>{{ $getallFTOs->mobile }}</td>
            <td>{{ $getallFTOs->email }}</td>
            <td><?php $state=$CommonService->getPerticularStateById($getallFTOs->stateID);?>  {{$state[0]->name}}</td>
            <td><?php $city=$CommonService->getPerticularCityById($getallFTOs->cityId);?>  {{$city[0]->name}}</td>
            
            <td>
            @if ($getallFTOs->adminApproved == 1)
            <a class="btn btn-success" href="{{route('admftodisapprove',array('ftotId'=>$getallFTOs->ftoIdFInal,'approvalVal'=>$getallFTOs->adminApproved))}}" title="Approved" role="button" >
            <i class="fa fa-thumbs-up"></i>
            </a>
            @else
            <a class="btn btn-danger" href="{{route('admftoapprove',array('ftotId'=>$getallFTOs->ftoIdFInal,'approvalVal'=>$getallFTOs->adminApproved))}}" title="DisApproved" role="button" >
            <i class="fa fa-thumbs-down"></i>
            </a>
            @endif
            </td>
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
     var url =APP_URL+'/'+'ftosearchbystatecity';
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
     var url =APP_URL+'/'+'ftosearchbystatecity';
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