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
									<td>{{ $getallPilots->category }}</td>
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

<script>
    $(document).ready(function(){
    $('#pageDataTable').DataTable({searching: true,ordering: false,lengthChange: false,showNEntries: false});
  });
</script>