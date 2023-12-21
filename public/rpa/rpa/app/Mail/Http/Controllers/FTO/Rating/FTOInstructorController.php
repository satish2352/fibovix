<?php

namespace App\Http\Controllers\FTO\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Rating\FTOInstructorService;

class FTOInstructorController extends Controller
{
    public function __construct()
    {
        $this->service = new FTOInstructorService();
    }
    public function index(Request $req){

    // 	if(isset($req->deleteOrEditState))
    // 	{

    // 		if($req->deleteOrEditState=='deleteSmstemplate')
    // 		{
    // 			// for delete template
    // 			$ftoInstructorId=$req->ftoInstructorId;
    // 			return $this->service->deleteState($ftoInstructorId);

    // 		}
    // 		if($req->deleteOrEditState=='editstate')
    // 		{
    // 			// for edit template
    // 			$ftoInstructorId=$req->ftoInstructorId;
    // 			$openModal=1;
    // 			$allState =$this->service->getAllState('');
    // 			$allStateForEdit =$this->service->getAllState($ftoInstructorId);
	   //     	return view('fto/rating/instructor',compact('allState','allStateForEdit','openModal'));

    // 		}
    // 	}

    // 	if(isset($req->editedOrFreshEntries))
    // 	{
    // 		if($req->editedOrFreshEntries=='1')
	   // 	{
	   // 	    $ftoInstructorId=$req->ftoInstructorId;
	   // 		$ftoInstructorName=$req->ftoInstructorName;
	    		
	   // 		$result=$this->service->updateState($ftoInstructorName,$ftoInstructorId);
	   // 	}
	   // 	if($req->editedOrFreshEntries=='0')
	   // 	{
	   // 		$ftoInstructorName=$req->ftoInstructorName;
	   // 		$result=$this->service->addNewState($ftoInstructorName);
	   // 	}
    // 	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllState($ftoInstructorId='');
    	$openModal=0;
        return view('fto/rating/instructor',compact('allState','allStateForEdit','openModal'));
    	
       
    }
    
    public function ftoInstructorRating($id,$instructorRating)
   {
        $result=$this->service->ftoInstructorRating($id,$instructorRating);
        // $allPilots=$this->service->getAllPilotsList();
        return redirect('instructorrating');
   }
   
    //

}
