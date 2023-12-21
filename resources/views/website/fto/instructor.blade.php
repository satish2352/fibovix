@extends('website.layouts.app')
@section('title')
    All Instructor List
@endsection
@section('header')
    @include('website.layouts.header')
@endsection
@section('content')
    @include('website.style')
    
@inject('FTOInstructorService', 'App\Http\Service\Admin\FTO\FTOInstructorService')
@inject('CommonService', 'App\Http\Service\Common\CommonService')

<style type="text/css">
  .table-striped tbody tr:nth-of-type(2n+1) {

    background-color: #FEAD69;

}
</style>
<div class="row text-center justify-content-center" style="margin-top: 15px;">
      <div class="col-md-12">
          <h1 class=" text-uppercase text-primary">FTO Instructor List</h1>

      </div>
  </div>
<div class="container my-5">
   <div class="card box-shadow-1 mb-2">
    <div class="card-body text-center">
        <div class="row">
                <table class="table table-striped" id="pageDataTable" role="grid" aria-describedby="DataTables_Table_0_info" style="border: 1px solid;">
                     	    <thead>
								<tr>
								    <th>Sr.No.</th>
								    <th>Trainer Name</th>
								    <th>FTO Represented</th>
									
								</tr>
							</thead>
							<tbody>
							    @foreach($ftoList as $key=>$FTOsList)
                                <tr>
                                    <td style="width:20px">{{$key+1}}</td>
                                     <td>
                                         <?php $allInstructorList=$FTOInstructorService->getAllInstructorListUderFTO($FTOsList->id); ?>
                                        @if(count($allInstructorList))
                                            @foreach($allInstructorList as $key=>$value)
                                                @if(count($allInstructorList)>1)
                                                    {{$key+1}}
                                                @endif
                                                {{$value->instructorName}}
                                            @endforeach
                                        @else
                                        <span class="text-danger">No Instructor Present</span>
                                         @endif
                                        @endforeach
                                        
                                    </td>
                                    <td>
                                        <?php //$ftoDetails=$CommonService->getFTODetails($FTOsList->id);?>
                                    {{ $FTOsList->FTOName}}
                                    </td>
                                   
                                    
                                </tr>
                                
                               
                                

							</tbody>
						</table>
					</div>
				</div>
			</div>
    </div>
 
   
@endsection
@section('footer')
    @include('website.layouts.footer')
@endsection


