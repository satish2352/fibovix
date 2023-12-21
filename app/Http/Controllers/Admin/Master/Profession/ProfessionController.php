<?php

namespace App\Http\Controllers\Admin\Master\Profession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Master\Profession\ProfessionService;

class ProfessionController extends Controller
{
    public function __construct()
    {
        $this->service = new ProfessionService();
    }
    public function index(Request $req){

    	if(isset($req->deleteOrEditState))
    	{

    		if($req->deleteOrEditState=='deleteSmstemplate')
    		{
    			// for delete template
    			$stateId=$req->stateId;
    			return $this->service->deleteState($stateId);

    		}
    		if($req->deleteOrEditState=='editstate')
    		{
    			// for edit template
    			$stateId=$req->stateId;
    			$openModal=1;
    			$allState =$this->service->getAllState('');
    			$allStateForEdit =$this->service->getAllState($stateId);
	        	return view('admin/master/profession/profession',compact('allState','allStateForEdit','openModal'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    $stateId=$req->stateId;
	    		$stateName=$req->stateName;
	    		
	    		$result=$this->service->updateState($stateName,$stateId);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$stateName=$req->stateName;
	    		$result=$this->service->addNewState($stateName);
	    	}
    	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllState($stateId='');
    	$openModal=0;
        return view('admin/master/profession/profession',compact('allState','allStateForEdit','openModal'));
    	
       
    }

}
