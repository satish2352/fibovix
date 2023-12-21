<?php
namespace App\Http\Controllers\FTO\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Rating\PilotsService;
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
        return view('fto.rating.pilots', compact('allPilots'));
   }
   
   
   public function FTOPilotRating($id,$pilotRating)
   {
        $result=$this->service->FTOPilotRating($id,$pilotRating);
        $allPilots=$this->service->getAllPilotsList();
        return redirect('pilotsrating');
   }
   
}