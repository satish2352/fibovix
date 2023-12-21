<?php
namespace App\Http\Controllers\Admin\FTO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\FTO\FTOService;
use App\Http\Controllers\Common\CommonController;
use Session;
class FTOController extends Controller
{
   public function __construct()
	{
		$this->service=new FTOService();
		$this->serviceNew = new CommonController();
	}
   public function index()
   {
        $allFTO=$this->service->getAllFTOsList();
        return view('admin.fto.ftos', compact('allFTO'));
   }
   
   
   public function approveFTO($id,$approvalVal)
   {
       //dd($approvalVal);
      
        if($approvalVal==0)
        {
            $setApproval=1;
            // Session::flash('success','Pilot Approved Successfully');
        }
        else
        {
            $setApproval=0;
            // Session::flash('error','Pilot Dispproved Successfully');
        }
        $result=$this->service->approveFTO($id,$setApproval);
        
        $allFTO=$this->service->getAllFTOsList();
        //Session::flash('success','Pilot Approved Successfully');
        return view('admin.fto.ftos', compact('allFTO'));
   }
   
   
   
   /// All Below Code For FTO Search
   public function getAllFTOForSearchPage()
   {
        $allFTO=$this->service->getAllFTOsList();
        $stateList =$this->serviceNew->getAllstate('');
        return view('admin.fto.ftosearch', compact('allFTO','stateList'));
   }
   
   
   public function getAllFTOForSearchPageAfterSomeStateCityChange(Request $req)
   {
        $stateId=$req->stateId;
        $cityId=$req->cityId;
        $allFTO=$this->service->getAllFTOForSearchPageAfterSomeStateCityChange($stateId,$cityId);
        $stateList =$this->serviceNew->getAllstate('');
        $cityList=$this->serviceNew->getAllcityByStateId($stateId);
        return view('admin.fto.ftosearchajax', compact('allFTO','stateList','stateId','cityList','cityId'));
   }
   

}