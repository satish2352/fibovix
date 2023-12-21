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
   <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info" style="border: 1px solid;">
                        <thead>
                            <tr>
                                <?php        $count=0;             ?>
                                    <th>Sn.</th>
                                    <th>Logo</th>
                                     <th>FTO Name</th>
                                    <th>Description</th>
                                    <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($allFTO) > 0) 
                            @foreach($allFTO as $getallFTOs )
                            <tr>
                                <td>{{ ++$count}}</td>
                                <td style="width:200px"><img src="<?php echo env('APP_URL'); ?>public/asset/FTOLogo/Image/{{$getallFTOs->FTOLogo}}" style="height: 150px; width: 300px; margin-top: 10px"> </td>
                                <td style="width:175px">{{ $getallFTOs->FTOName}}</td>
                                <td style=" text-align: justify;">{{ $getallFTOs->description}}</td>
                                 <td>
                                    <a class="btn btn-primary" href="{{route('ftodetails',['id'=>$getallFTOs->ftoIdFInal])}}"role="button">View</a> 
                                </td>
                            </tr>
                            @endforeach 
                            @endif
                        </tbody>
                    </table>
   
</div>

<script>
    $(document).ready(function(){
    $('#pageDataTable').DataTable({searching: true,ordering: false,lengthChange: false,showNEntries: false});
  });
</script>