<?php
namespace App\Http\Controllers\Website\Pilot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Pilot\PilotsService;
use App\Http\Controllers\Common\CommonController;
use Session;
use DB;
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
       //dd($allPilots);
       return view('website.pilot.hirepilot',compact('allPilots'));
   }
   
   public function hirePilotSave(Request $req)
   {
        $result=$this->service->hirePilotSave($req);
        return redirect('hirepilot')->with('status','Information Submitted Sucessfully');
        
   }
   
   public function uaopVerification(Request $req)
   {
       $uaop=$req->uaop;
       $pilotrdroneinfo=DB::select("SELECT * FROM `pilotrdroneinfo` WHERE `uaopnumber`='".$uaop."' ");
       if(count($pilotrdroneinfo)>0)
       {
           $pilotid=$pilotrdroneinfo[0]->pilotId;
           $result=DB::select("SELECT * FROM `pilotregistration` WHERE `id`='".$pilotid."' ");
           //dd($result);
           return view('website.uaopverificationdetails',compact('result','pilotrdroneinfo'));
           
       }
       else
       {
           return view('website.uaop-verification')->with('error', 'No Information is found');
       }
   }
   
   public function pilotDetails(Request $req)
   {
       $pilotId=$req->id;
       $pilotrdroneinfo=DB::select("SELECT * FROM `pilotrdroneinfo` WHERE `pilotId`='".$pilotId."' ");
       $result=DB::select("SELECT * FROM `pilotregistration` WHERE `id`='".$pilotId."' ");
       return view('website.pilot.pilotdetails',compact('result','pilotrdroneinfo'));
   }

}