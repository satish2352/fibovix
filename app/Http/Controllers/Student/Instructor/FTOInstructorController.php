<?php

namespace App\Http\Controllers\FTO\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Instructor\FTOInstructorService;

class FTOInstructorController extends Controller
{
    public function __construct()
    {
        $this->service = new FTOInstructorService();
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
    			$allState =$this->service->getAllState('');
    			$allStateForEdit =$this->service->getAllState($ftoInstructorId);
	        	return view('fto/instructor/instructor',compact('allState','allStateForEdit','openModal'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    $ftoInstructorId=$req->ftoInstructorId;
	    		$ftoInstructorName=$req->ftoInstructorName;
	    		
	    		$result=$this->service->updateState($ftoInstructorName,$ftoInstructorId);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$ftoInstructorName=$req->ftoInstructorName;
	    		$result=$this->service->addNewState($ftoInstructorName);
	    	}
    	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllState($ftoInstructorId='');
    	$openModal=0;
        return view('fto/instructor/instructor',compact('allState','allStateForEdit','openModal'));
    	
       
    }

}
