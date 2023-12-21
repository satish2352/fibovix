@inject('CommonService', 'App\Http\Controllers\Common\CommonController')
<div class="row">

   <div class="form-group col-sm-4">
   </div>
</div>
</form>
<div class="row table-responsive ">
   <table class="table table-hover" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info" style="border: none;">
            <thead>
            <tr style="border: none;">
              <td style="border: none;"></td>
            </tr>
            </thead>
            <tbody>
                  @if(count($allCourses) > 0)
            <?php
               foreach($allCourses as $getallCourses )
                   {
            ?>
            <tr style="border-style: none;">
              <td style="border: none;">
                
                <div class="card box-shadow-1">
                <div class="card-body1">
                <div class="row no-gutters">
                 <div class="col-md-6 courses-card-image">
                    <center>
                      <img src="{{asset('website/images/GreenTown.png')}}" style="height: 200px; width: 200px; margin-top: 50px">
                    </center>
                 </div>
                 <div class="col-md-6">
                  <div class="card-body">
                      
                    <h5 class="card-title">Category: {{ $getallCourses->category}}</h5>
                    <p class="card-text1">Course Name: {{ $getallCourses->courseName }}</p>
                    <p class="card-text1">Duration: {{ $getallCourses->duration }}</p>
                    <p class="card-text1">Price: {{ $getallCourses->price }}</p>
                    <p class="card-text1">State: <?php $state=$CommonService->getPerticularAdminStateById($getallCourses->state);?>  {{$state[0]->state}}</p>
                    <p class="card-text1">City: <?php $city=$CommonService->getPerticularAdminCityById($getallCourses->city);?>  {{$city[0]->city}}</p>
                    <form action="{{route('studentregistration')}}" method="POST" >
                            @csrf
                    <a class="btn btn-primary" href="{{route('webcoursedetails',array('id'=>$getallCourses->id))}}">Details</a>
                    <button type="submit" class="btn btn-primary" align="right">Get Now</button>
                    <input type="text" name="courseId" class="btn btn-primary" value="{{$getallCourses->id}}" hidden>
                    </form>
    
                  </div>
                </div>
            </div>
        </div>
    </div>
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
    $('#pageDataTable').DataTable({searching: false,ordering: false,lengthChange: false,showNEntries: false});
  });
</script>