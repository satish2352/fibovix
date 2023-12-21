<?php

namespace App\Http\Controllers\Admin\Master\Duration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Master\Duration\DurationService;

class DurationController extends Controller
{
    public function __construct()
    {
        $this->service = new DurationService();
    }
    public function index(Request $req){

    	if(isset($req->deleteOrEditState))
    	{

    		if($req->deleteOrEditState=='deleteSmstemplate')
    		{
    			// for delete template
    			$categoryId=$req->categoryId;
    			return $this->service->deleteState($categoryId);

    		}
    		if($req->deleteOrEditState=='editstate')
    		{
    			// for edit template
    			$categoryId=$req->categoryId;
    			$openModal=1;
    			$allState =$this->service->getAllState('');
    			$allStateForEdit =$this->service->getAllState($categoryId);
	        	return view('admin/master/duration/duration',compact('allState','allStateForEdit','openModal'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    $categoryId=$req->categoryId;
	    		$categoryName=$req->categoryName;
	    		
	    		$result=$this->service->updateState($categoryName,$categoryId);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$categoryName=$req->categoryName;
	    		$result=$this->service->addNewState($categoryName);
	    	}
    	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllState($categoryId='');
    	$openModal=0;
        return view('admin/master/duration/duration',compact('allState','allStateForEdit','openModal'));
    	
       
    }

}
