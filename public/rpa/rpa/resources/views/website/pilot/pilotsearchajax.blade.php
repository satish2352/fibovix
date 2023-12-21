@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<div class="row">
   
   <div class="form-group col-sm-4" >
      <label>State</label>
      <select name="state" id="stateId" class="form-control" onchange="getResultByState(this.value);" title="Choose..." data-live-search="true" required>
         <option value="">Choose State</option>
         @foreach($stateList as $key=>$state)
         <option value="{{$state->id}}" @if($state->id==$stateId) {{'selected'}} @endif >{{$state->name}}</option>
         @endforeach                                
      </select>
   </div>
   
   <div class="form-group col-sm-4">
		<label>City</label>
		    <select class="form-control" name="city" required="" id="city" onchange="getResultByCity(this.value);" class="custom-select col-12">
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
									<!--<th class="table-plus datatable-nosort"></th>-->
									<th>Sn.</th>
									<th>Name</th>
									<th>Mobile</th>
									<th>Category</th>
									<th>Email</th>
									<th>State</th>
									<th>City</th>
									<th>Details</th>
								
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
									<td>{{ $getallPilots->category }}</td>
									<td>{{ $getallPilots->email }}</td>
									<td><?php $state=$CommonService->getPerticularStateById($getallPilots->stateID);?>   {{$state[0]->name}}</td>
			                        <td><?php $city=$CommonService->getPerticularCityById($getallPilots->cityId);?>  {{$city[0]->name}}</td>
								
									 <td>
                                        <a class="btn btn-primary" href="{{route('pilotdetails',['id'=>$getallPilots->pilotIdFInal])}}"role="button" >
                                        View
                                        </a>
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