@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<div class="row">
   <div class="form-group col-sm-4" >
      <label>State</label>
      <select name="state" id="stateId" class="custom-select col-12" onchange="getResultByState(this.value);" title="Choose..." data-live-search="true" required>
         <option value="">Choose State</option>
         @foreach($stateList as $key=>$state)
         <option value="{{$state->id}}" @if($state->id==$stateId) {{'selected'}} @endif >{{$state->name}}</option>
         @endforeach                                
      </select>
   </div>
   
   <div class="form-group col-sm-4">
		<label>City</label>
		    <select class="form-control" name="city" required="" id="city" onchange="getResultByCity(this.value);">
		        <option value="">Select City</option>
                        @foreach($cityList as $key=>$cityListNew)
                       <option value="{{$cityListNew->id}}" @if($cityListNew->id==$cityId) {{'selected'}} @endif  >{{$cityListNew->name}}</option>
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
            <td><?php $pilotDetailsAbc=$CommonService->getPerticularStateById($getallFTOs->stateID);?>  {{$pilotDetailsAbc[0]->name}}</td>
            <td><?php $pilotDetails=$CommonService->getPerticularCityById($getallFTOs->cityId);?>  {{$pilotDetails[0]->name}}</td>
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

<script>
    $(document).ready(function(){
    $('#pageDataTable').DataTable({searching: true,ordering: false,lengthChange: false,showNEntries: false});
  });
</script>