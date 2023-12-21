<?php
namespace App\Http\Controllers\Website\FTO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\FTO\FTOService;
use App\Http\Controllers\Common\CommonController;
use Session;
class FTOController extends Controller
{
   public function __construct()
	{
		$this->service=new FTOService();
		$this->serviceNew = new CommonController();
	}
  
   /// All Below Code For FTO Search
   public function webFtoSearch()
   {
        $allFTOAdvertise=$this->service->getAllFTOsAdvertise();
        $allFTO=$this->service->getAllFTOsList();
        $stateList =$this->serviceNew->getAllstate('');
        return view('website.fto.ftosearch', compact('allFTO','stateList','allFTOAdvertise'));
   }
   
   
   public function getAllFTOForSearchPageAfterSomeStateCityChange(Request $req)
   {
        $stateId=$req->stateId;
        $cityId=$req->cityId;
        $allFTO=$this->service->getAllFTOForSearchPageAfterSomeStateCityChange($stateId,$cityId);
        $stateList =$this->serviceNew->getAllstate('');
        $cityList=$this->serviceNew->getAllcityByStateId($stateId);
        return view('website.fto.ftosearchajax', compact('allFTO','stateList','stateId','cityList','cityId'));
   }
   

}