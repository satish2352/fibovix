<?php

namespace App\Http\Controllers\Admin\Master\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Master\SubCategory\SubCategoryService;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->service = new SubCategoryService();
    }
    public function index(Request $req){

    	if(isset($req->deleteOrEditState))
    	{

    		if($req->deleteOrEditState=='deleteSmstemplate')
    		{
    			// for delete template
    			$serviceCategoryId=$req->serviceCategoryId;
    			return $this->service->deleteState($serviceCategoryId);

    		}
    		if($req->deleteOrEditState=='editstate')
    		{
    			// for edit template
    			$subcategoryId=$req->subcategoryId;
    			$openModal=1;
    			$allState =$this->service->getAllState('');
    			$allStateForEdit =$this->service->getAllState($subcategoryId);
    			$allStateNew =$this->service->getAllStateNew();
	        	return view('admin/master/SubCategory/subcategory',compact('allState','allStateForEdit','openModal','allStateNew'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    $subcategoryId=$req->subcategoryId;
	    	    $serviceCategoryId=$req->serviceCategoryId;
	    		$cityName=$req->cityName;
	    		
	    		$result=$this->service->updateState($cityName,$subcategoryId);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$serviceCategoryId=$req->serviceCategoryId;
	    		$cityName=$req->cityName;
	    		$result=$this->service->addNewState($serviceCategoryId,$cityName);

	    	}
    	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllState($serviceCategoryId='');
	   	$allStateNew =$this->service->getAllStateNew();
    	$openModal=0;
        return view('admin/master/SubCategory/subcategory',compact('allState','allStateForEdit','openModal','allStateNew'));
    	
       
    }

}
