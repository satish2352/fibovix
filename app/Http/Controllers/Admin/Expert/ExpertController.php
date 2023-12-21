<?php

namespace App\Http\Controllers\Admin\Expert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Expert\ExpertService;

class ExpertController extends Controller
{
    public function __construct()
    {
        $this->service = new ExpertService();
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
	        	return view('admin/expert/expert',compact('allState','allStateForEdit','openModal'));

    		}
    	}

    	if(isset($req->editedOrFreshEntries))
    	{
    		if($req->editedOrFreshEntries=='1')
	    	{
	    	    $categoryId=$req->categoryId;
                $passportPhoto1=$req->passportPhoto1;
                $address1=$req->address1;
                $proffession1=$req->proffession1;
                $mobile1=$req->mobile1;
                $email1=$req->email1;
                $lastName1=$req->lastName1;
                $middleName1=$req->middleName1;
	    		$firstName1=$req->firstName1;
                $result=$this->service->updateState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1,$categoryId);
	    	}
	    	if($req->editedOrFreshEntries=='0')
	    	{
	    		$firstName1=$req->firstName1;
                $middleName1=$req->middleName1;
                $lastName1=$req->lastName1;
                $email1=$req->email1;
                $mobile1=$req->mobile1;
                $proffession1=$req->proffession1;
                $address1=$req->address1;
                $passportPhoto1=$req->passportPhoto1;
	    		$result=$this->service->addNewState($firstName1,$middleName1,$lastName1,$email1,$mobile1,$proffession1,$address1,$passportPhoto1);
         	}
    	}
    	$allStateForEdit="";
	   	$allState =$this->service->getAllState($categoryId='');
    	$openModal=0;
        return view('admin/expert/expert',compact('allState','allStateForEdit','openModal'));
    	
       
    }

}
