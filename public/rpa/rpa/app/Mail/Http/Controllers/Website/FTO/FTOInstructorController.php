<?php

namespace App\Http\Controllers\Website\FTO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\CommonController;
use App\Http\Service\Admin\FTO\FTOInstructorService;

class FTOInstructorController extends Controller
{
    public function __construct()
    {
        $this->service = new FTOInstructorService();
        $this->serviceNew = new CommonController();
    }
   public function index(Request $req){

    	if(isset($req->deleteOrEditState))
    	{

    		if($req->deleteOrEditState=='deleteSmstemplate')
    		{
    			// for delete template
    			$ftoInstructorId=$req->ftoInstructorId;
    			return $this->service->deleteState($ftoInstructorId);

    		}
    		if($req->deleteOrEditState=='editstate')
    		{
    			// for edit template
    			$ftoInstructorId=$req->ftoInstructorId;
    			$openModal=1;
    			$allState =$this->service->getAllInstructorList('');
    			$allStateForEdit =$this->service->getAllInstructorList($ftoInstructorId);
    			$ftoList =$this->serviceNew->getFTOList(0);
	        	return view('website/fto/instructor',compact('allState','allStateForEdit','openModal','ftoList'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    $ftoInstructorId=$req->ftoInstructorId;
	    		$ftoInstructorName=$req->ftoInstructorName;
	    		$underFTO=$req->ftoId;
	    		$result=$this->service->updateState($ftoInstructorName,$ftoInstructorId,$underFTO);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$ftoInstructorName=$req->ftoInstructorName;
	    		$underFTO=$req->ftoId;
	    		$result=$this->service->addNewInstructor($ftoInstructorName,$underFTO);
	    	}
    	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllInstructorList($ftoInstructorId='');
	   	$ftoList =$this->serviceNew->getFTOList(0);
    	$openModal=0;
        return view('website/fto/instructor',compact('allState','allStateForEdit','openModal','ftoList'));
    	
       
    }

}
