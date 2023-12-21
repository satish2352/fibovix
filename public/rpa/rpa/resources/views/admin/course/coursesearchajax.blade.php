@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<div class="row">
    <div class="form-group col-sm-4" >
        <label>State</label>
        <select name="fto" id="ftoId" class="custom-select col-12" onchange="getResultByfto(this.value);" title="Choose..." data-live-search="true" required>
           <option value="">Choose FTO</option>
           @foreach($allFTO as $allFTOs )
           <option value="{{$allFTOs->id}}" @if($allFTOs->id==$ftoId) {{'selected'}} @endif  >{{ $allFTOs->firstName}} {{$allFTOs->middleName}} {{$allFTOs->lastName }}</option>
           @endforeach                                
        </select>
     </div>
   <div class="form-group col-sm-4" >
      <label>State</label>
      <select name="state" id="stateId" class="custom-select col-12" onchange="getResultByState(this.value);" title="Choose..." data-live-search="true" required>
         <option value="">Choose State</option>
        @foreach($stateList as $key=>$statesofAdminList)
        <option value="{{$statesofAdminList->id}}"  @if($statesofAdminList->id==$stateId) {{'selected'}} @endif>{{$statesofAdminList->state}}</option>
        @endforeach                               
      </select>
   </div>
   <?php // dd($cityList); ?>
   <div class="form-group col-sm-4">
		<label>City</label>
		    <select class="form-control" name="city" required="" id="city" onchange="getResultByCity(this.value);">
		        <option value="">Select City</option>
                        @foreach($cityList as $key=>$admincityList)
                        <option value="{{$admincityList->id}}" @if($admincityList->id==$cityId) {{'selected'}} @endif >{{$admincityList->city}}</option>
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
									<th>Category</th>
									<th>Course Name</th>
									<th>Duration</th>
									<th>Price</th>
									<th>State</th>
									<th>City</th>
									<th>Image</th>
									<th>PDF</th>
									<th>Description</th>
									<th>Created By</th>
									<!--<th>Status</th>-->
									<!--<th>Action</th>-->
								</tr>
							</thead>
							<tbody>
							    
							    @if(count($allCourses) > 0)
							    <?php
                                    foreach($allCourses as $getallCourses )
                                      {
                                ?>
								<tr>
								    <td>{{ ++$count}}</td>
									<td><?php $courseDetails=$CommonService->getCategoryList($getallCourses->category);?>  {{$courseDetails[0]->category}}</td>
									<td>{{ $getallCourses->courseName }}</td>
									<td><?php $courseDetails=$CommonService->getDurationList($getallCourses->duration);?>  {{$courseDetails[0]->duration}}</td>
									<td>{{ $getallCourses->price }}</td>
									<td><?php $courseDetails=$CommonService->getPerticularAdminStateById($getallCourses->state);?>  {{$courseDetails[0]->state}}</td>
									<td><?php $courseDetails=$CommonService->getPerticularAdminCityById($getallCourses->city);?>  {{$courseDetails[0]->city}}</td>
									<?php
									if($getallCourses->image)
									{
									?>
									<td>
									    <img src="<?php echo env('APP_URL');?>public/asset/Course/Image/{{$getallCourses->image}}" height="200" width="200">
									</td>
									<?php
									}
									else
									{
									?>
									  <td>
									      <img src="<?php echo env('APP_URL');?>public/asset/no-image-available.png" height="200" width="200">
									  </td>
									<?php
									}
									?>
									
									
									
									<?php
									if($getallCourses->pdf)
									{
									?>
									<td >
									    <a href="<?php echo env('APP_URL');?>public/asset/Course/Pdf/{{$getallCourses->pdf}}" class="btn btn-success dropdown">
									        <i class="fa fa-download"></i>
									    </a>
									</td>
									<?php
									}
									else
									{
									?>
									  <td>
									      <img src="<?php echo env('APP_URL');?>public/asset/no-pdf.png" height="200" width="200">
									  </td>
									<?php
									}
									?>
									
									<td>{{ $getallCourses->description }}</td>
									
									<?php
									if($getallCourses->createdBy==1)
									{
									?>
        									<td>
        									    <center>
        									    You
        									    </center>
        									</td>
    								<?php
    								}
    								else
    								{
    								?>
        									<td>
        									    <center>
        									     FTO
        									     </center>
        									</td>
    									
									<?php
									}
									?>
									
									
									<!--<td>-->
									<!--    <center>-->
    					<!--			        @if ($getallCourses->status == 1)-->
        	<!--							        <button class="btn btn-success" role="button">-->
        	<!--							            <i class="fa fa-thumbs-up"></i>-->
        	<!--							        </button>-->
    					<!--			        @else-->
        	<!--							        <button class="btn btn-danger" role="button">-->
        	<!--							            <i class="fa fa-thumbs-down"></i>-->
        	<!--							        </button>-->
         <!--                                   @endif-->
         <!--                               </center>-->
								 <!--   </td>-->
								    
									<!--<td>-->
									<!--    <a class="btn btn-primary" href="#" role="button" >-->
									<!--        View-->
								 <!--       </a>-->
								 <!--   </td>-->
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