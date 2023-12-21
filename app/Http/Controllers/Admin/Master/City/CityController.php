<?php

namespace App\Http\Controllers\Admin\Master\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Master\City\CityService;

class CityController extends Controller
{
    public function __construct()
    {
        $this->service = new CityService();
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
    			$cityId=$req->cityId;
    			$openModal=1;
    			$allState =$this->service->getAllState('');
    			$allStateForEdit =$this->service->getAllState($cityId);
    			$allStateNew =$this->service->getAllStateNew();
	        	return view('admin/master/city/city',compact('allState','allStateForEdit','openModal','allStateNew'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    $cityId=$req->cityId;
	    	    $stateId=$req->stateId;
	    		$cityName=$req->cityName;
	    		
	    		$result=$this->service->updateState($cityName,$cityId);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$stateId=$req->stateId;
	    		$cityName=$req->cityName;
	    		$result=$this->service->addNewState($stateId,$cityName);
	    	}
    	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllState($stateId='');
	   	$allStateNew =$this->service->getAllStateNew();
    	$openModal=0;
        return view('admin/master/city/city',compact('allState','allStateForEdit','openModal','allStateNew'));
    	
       
    }

}
