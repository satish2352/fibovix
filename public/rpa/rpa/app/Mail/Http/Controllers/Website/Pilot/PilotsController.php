<?php
namespace App\Http\Controllers\Website\Pilot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Pilot\PilotsService;
use App\Http\Controllers\Common\CommonController;
use Session;
class PilotsController extends Controller
{
   public function __construct()
	{
		$this->service=new PilotsService();
		$this->serviceNew = new CommonController();
	}
  
   
   /// All Below Code For Pilot Search
   public function webPilotSearch()
   {
        $allPilotsAdvertise=$this->service->getAllPilotsAdvertise();
        $allPilots=$this->service->getAllPilotsList();
        $stateList =$this->serviceNew->getAllstate('');
        return view('website.pilot.pilotsearch', compact('allPilots','stateList','allPilotsAdvertise'));
   }
   
   
   public function getAllPilotForSearchPageAfterSomeStateCityChange(Request $req)
   {
        $stateId=$req->stateId;
        $cityId=$req->cityId;
        $ftoId=$req->ftoId;
        $allPilots=$this->service->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId);
        $stateList =$this->serviceNew->getAllstate('');
        $cityList=$this->serviceNew->getAllcityByStateId($stateId);
        return view('website.pilot.pilotsearchajax', compact('allPilots','stateList','stateId','cityList','cityId'));
   }
   
   
   public function hirePilot()
   {
       $allPilots=$this->service->getAllPilotsList();
       return view('website.hirepilot',compact('allPilots'));
   }
   
   public function hirePilotSave(Request $req)
   {
        $result=$this->service->hirePilotSave($req);
        return redirect('hirepilot')->with('status','Information Submitted Sucessfully');
        
   }

}