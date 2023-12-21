<?php
namespace App\Http\Controllers\Admin\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Rating\FTOService;
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
        return view('admin.rating.fto', compact('allFTO'));
   }
   
   
   public function admFTORating($id,$rating)
   {
       //dd($rating);
      
      
        $result=$this->service->admFTORating($id,$rating);
        $allFTO=$this->service->getAllFTOsList();
        return redirect('ftorating');
   }
}