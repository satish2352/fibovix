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
                     <h4>Courses</h4>
                  </div>
                  <nav aria-label="breadcrumb" role="navigation">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashadmin')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses List</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <div class="dropdown">
                  	<a href="#CourseModal" class="btn btn-primary" role="button" data-toggle="modal" data-target="#CourseModal">
                  	    Create Course
                  	</a>
                  <!--	<div class="dropdown-menu dropdown-menu-right">-->
                  <!--		<a class="dropdown-item" href="#">Export List</a>-->
                  <!--		<a class="dropdown-item" href="#">Policies</a>-->
                  <!--		<a class="dropdown-item" href="#">View Assets</a>-->
                  <!--	</div>-->
                  <!--</div>-->
               </div>
            </div>
         </div>
         <!-- Export Datatable start -->
         <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
            <div class="clearfix mb-20">
               <div class="pull-left">
                  <h5 class="text-blue">Courses List</h5>
               </div>
            </div>
            <div class="row table-responsive ">
               @if(session()->has('success'))
               <div class="alert alert-success">
                  {{ session()->get('success') }}
               </div>
               @endif
               @if(session()->has('error'))
               <div class="alert alert-danger">
                  {{ session()->get('error') }}
               </div>
               @endif
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
                     //dd($allCourses);
                        foreach($allCourses as $getallCourses )
                          {
                        ?>
                     <tr>
                        <td>{{ ++$count}}</td>
                        <td><?php $courseDetails=$CommonService->getCategoryList($getallCourses->category);?>  {{$courseDetails[0]->category}}</td>
                        <td>{{ $getallCourses->courseName }}</td>
                        <td><?php $courseDetails=$CommonService->getDurationList($getallCourses->duration);?>  {{$courseDetails[0]->duration}}</td>
                        <td>{{ $getallCourses->price }}</td>
                        <td><?php $courseDetails=$CommonService->getAllAdminState($getallCourses->state); //dd($courseDetails); ?>  {{$courseDetails[0]->state}}</td>
                        <td><?php $courseDetails=$CommonService->getPerticularAdminCityById($getallCourses->city); //dd($courseDetails);?>  {{$courseDetails[0]->city}}  </td>
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
                           if($getallCourses->pdf!="")
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
                           if($getallCourses->createdBy!=0)
                           {
                           ?>
                        <td>
                           <center>
                              FTO
                           </center>
                        </td>
                        <?php
                           }
                           else
                           {
                           ?>
                        <td>
                           <center>
                              Admin
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
         </div>
         <!-- Export Datatable End -->
      </div>
   </div>
</div>
@endsection





<!-- Modal -->
<div class="modal fade" id="CourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel"><center>Create Course</center></h4>
      </div>
      <div class="modal-body">
        	<!--<form method="post" enctype="multipart/form-data">-->
        	    <form action="{{route('savecourse')}}" method="POST" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="courseTitle" id="" placeholder="Enter Course Title" required="" >
								
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="category" required="">
							        <option value="">Select Category</option>
                                            @foreach($CategoryList as $key=>$CategoryList)
                                        <option value="{{$CategoryList->id}}*{{$CategoryList->addInfoReq}}" >{{$CategoryList->category}}</option>
                                            @endforeach
							    </select>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="duration" required="">
							        <option value="">Select Duration</option>
                                            @foreach($DurationList as $key=>$DurationList)
                                        <option value="{{$DurationList->id}}" >{{$DurationList->duration}}</option>
                                            @endforeach
							    </select>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
							    <select class="form-control" name="state" required="" id="stateId" onchange="getCity();">
							        <option value="">Select State</option>
                                            @foreach($statesofAdminList as $key=>$statesofAdminList)
                                        <option value="{{$statesofAdminList->id}}" >{{$statesofAdminList->state}}</option>
                                            @endforeach
							    </select>
							</div>
						</div>
						
						<div id="citys"></div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="text" name="coursePrice" pattern="[0-9]+" placeholder="Enter Course Price in Digit. Ex. 1000" required="" >
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label"></label>
							<div class="col-sm-12 col-md-11">
							    <textarea class="form-control" name="description" placeholder="Course Description"></textarea>
							</div>
						</div>
						
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label">IMG</label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="file" name="image" accept=".png, .jpg">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-1 col-form-label">PDF</label>
							<div class="col-sm-12 col-md-11">
								<input class="form-control" type="file" name="pdf" accept=".pdf">
							</div>
						</div>
                	
					
					
				        <div class="modal-footer">
                           <button class="btn btn-success" type="submit" name="addCourse" >
		                        Submit
                           </button>
          
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>	
						
 </form>
      </div>
      
    </div>
  </div>
</div>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>
<script>
    
    function getCity(){
            var url=APP_URL+'/getadmincity';
            let stateId = $('#stateId').val();
            
            if(stateId==null || stateId=='')
            {
                alert("Select City");
                return false;
            }
            
            $.ajax({
                url:url,
                type: 'post',
                dataType: 'html',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'stateId': stateId
                },
                
                
                success: function (response) {
                    
                    $('#citys').empty();
                    $('#citys').append(response);
                    $('#citys').show();
                }
            });
    }
    
    
</script>






<!-- Modal -->
<!--<div class="modal fade" id="CourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
<!--   <div class="modal-dialog" role="document">-->
<!--      <div class="modal-content">-->
<!--         <div class="modal-header">-->
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
<!--            <h4 class="modal-title" id="myModalLabel">-->
<!--               <center>Add Course</center>-->
<!--            </h4>-->
<!--         </div>-->
<!--         <div class="modal-body">-->
            <!--<form method="post" enctype="multipart/form-data">-->
<!--            <form action="{{route('savecourse')}}" method="POST" enctype="multipart/form-data">-->
<!--               @csrf-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <input class="form-control" type="text" name="courseTitle" id="gds" placeholder="Enter Course Title" onkeyup="checkAvailability1()" required="" >-->
<!--                     <p id="email-availability-status1" style="color: red"></p>-->
<!--                     <p  id="loaderIcon1" style="display:none; color: red" ></p>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <select class="form-control" name="category" required="">-->
<!--                        <option value="">Select Category</option>-->
<!--                        <option value="1">Nano (Below 250gms)</option>-->
<!--                        <option value="2">Micro (250gms-2kg)</option>-->
<!--                        <option value="3">Small (2-25Kg)</option>-->
<!--                        <option value="4">Medium (25kg-150kg)</option>-->
<!--                        <option value="5">Large (Above 150kg)</option>-->
<!--                     </select>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <select class="form-control" name="duration" required="">-->
<!--                        <option value="">Select Duration</option>-->
<!--                        <option value="1">1 Day</option>-->
<!--                        <option value="2">2 Days</option>-->
<!--                        <option value="3">3 Days</option>-->
<!--                        <option value="4">4 Days</option>-->
<!--                        <option value="5">5 Days</option>-->
<!--                        <option value="6">6 Days</option>-->
<!--                        <option value="7">7 Days</option>-->
<!--                        <option value="8">8 Days</option>-->
<!--                        <option value="15">15 Days</option>-->
<!--                     </select>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <select class="form-control" name="state" required="">-->
<!--                        <option value="">Choose States</option>-->
<!--                        <option value="1" >Andaman & Nicobar [AN]</option>-->
<!--                        <option value="2" >Andhra Pradesh [AP]</option>-->
<!--                        <option value="3" >Arunachal Pradesh [AR]</option>-->
<!--                        <option value="4" >Assam [AS]</option>-->
<!--                        <option value="5" >Bihar [BH]</option>-->
<!--                        <option value="6" >Chandigarh [CH]</option>-->
<!--                        <option value="7" >Chhattisgarh [CG]</option>-->
<!--                        <option value="8" >Dadra & Nagar Haveli [DN]</option>-->
<!--                        <option value="9" >Daman & Diu [DD]</option>-->
<!--                        <option value="10" >Delhi [DL]</option>-->
<!--                        <option value="11" >Goa [GO]</option>-->
<!--                        <option value="12" >Gujarat [GU]</option>-->
<!--                        <option value="13" >Haryana [HR]</option>-->
<!--                        <option value="14" >Himachal Pradesh [HP]</option>-->
<!--                        <option value="15" >Jammu & Kashmir [JK]</option>-->
<!--                        <option value="16" >Jharkhand [JH]</option>-->
<!--                        <option value="17" >Karnataka [KR]</option>-->
<!--                        <option value="18" >Kerala [KL]</option>-->
<!--                        <option value="19" >Lakshadweep [LD]</option>-->
<!--                        <option value="20" >Madhya Pradesh [MP]</option>-->
<!--                        <option value="21" >Maharashtra [MH]</option>-->
<!--                        <option value="22" >Manipur [MN]</option>-->
<!--                        <option value="23" >Meghalaya [ML]</option>-->
<!--                        <option value="24" >Mizoram [MM]</option>-->
<!--                        <option value="25" >Nagaland [NL]</option>-->
<!--                        <option value="26" >Orissa [OR]</option>-->
<!--                        <option value="27" >Pondicherry [PC]</option>-->
<!--                        <option value="28" >Punjab [PJ]</option>-->
<!--                        <option value="29" >Rajasthan [RJ]</option>-->
<!--                        <option value="30" >Sikkim [SK]</option>-->
<!--                        <option value="31" >Tamil Nadu [TN]</option>-->
<!--                        <option value="32" >Tripura [TR]</option>-->
<!--                        <option value="33" >Uttar Pradesh [UP]</option>-->
<!--                        <option value="34" >Uttaranchal [UT]</option>-->
<!--                        <option value="35" >West Bengal [WB]</option>-->
<!--                     </select>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <select class="form-control" name="city" required="">-->
<!--                        <option value="" >Choose City</option>-->
<!--                        <option value="1" >Nashik</option>-->
<!--                        <option value="2" >Mumbai</option>-->
<!--                        <option value="3" >Pune</option>-->
<!--                     </select>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"><span style="color: red">*</span></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <input class="form-control" type="text" name="coursePrice" id="gds" pattern="[0-9]+" placeholder="Enter Course Price" required="" >-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <textarea class="form-control" name="description" placeholder="Description"></textarea>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 col-form-label"></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <input class="form-control" type="file" name="image" accept=".png, .jpg">-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="form-group row">-->
<!--                  <label class="col-sm-12 col-md-1 "></label>-->
<!--                  <div class="col-sm-12 col-md-11">-->
<!--                     <input class="form-control" type="file" name="pdf" accept=".pdf">-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="modal-footer">-->
<!--                  <button class="btn btn-success" type="submit" name="addCourse">-->
<!--                  Submit-->
<!--                  </button>-->
<!--                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
<!--               </div>-->
               <!--<script type="text/javascript">-->
               <!--    function checkAvailability1() {-->
               <!--    $("#loaderIcon1").show();-->
               <!--    var gd=$("#gds").val();-->
               <!--    jQuery.ajax({-->
               <!--    url: "goods_exist.php",-->
               <!--    data:{god : gd},-->
               <!--    type: "POST",-->
               <!--    success:function(data){-->
               <!--    $("#email-availability-status1").html(data);-->
               <!--    $("#loaderIcon1").hide();-->
               <!--    },-->
               <!--    error:function (){}-->
               <!--    });-->
               <!--    }-->
               <!--</script>-->
<!--            </form>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->