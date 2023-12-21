<?php
namespace App\Http\Controllers\FTO\Pilot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Pilots\PilotsService;
use App\Http\Controllers\Common\CommonController;
use Session;
class PilotsController extends Controller
{
   public function __construct()
	{
		$this->service=new PilotsService();
		$this->serviceNew = new CommonController();
	}
   public function index()
   {
        $allPilots=$this->service->getAllPilotsList();
        //dd($allPilots);
        return view('fto.pilots.pilots', compact('allPilots'));
   }
   
   
   public function approvePilot($id,$approvalVal)
   {
      
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
        $result=$this->service->approvePilot($id,$setApproval);
        
        $allPilots=$this->service->getAllPilotsList();
        //Session::flash('success','Pilot Approved Successfully');
        return view('fto.pilots.pilots', compact('allPilots'));
   }
   
   
   /// All Below Code For Pilot Search
   public function getAllPilotForSearchPage()
   {
        $allPilots=$this->service->getAllPilotsList();
        $stateList =$this->serviceNew->getAllstate('');
        return view('fto.pilots.pilotsearch', compact('allPilots','stateList'));
   }
   
   
   public function getAllPilotForSearchPageAfterSomeStateCityChange(Request $req)
   {
        $stateId=$req->stateId;
        $cityId=$req->cityId;
        $allPilots=$this->service->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId);
        $stateList =$this->serviceNew->getAllstate('');
        $cityList=$this->serviceNew->getAllcityByStateId($stateId);
        return view('fto.pilots.pilotsearchajax', compact('allPilots','stateList','stateId','cityList','cityId'));
   }

}