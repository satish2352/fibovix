<?php
namespace App\Http\Controllers\Website\Carrier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Carrier\CarrierService;
use App\Http\Controllers\Common\CommonController;
use Session;
class CarrierController extends Controller
{
   public function __construct()
	{
		$this->service=new CarrierService();
		$this->serviceNew = new CommonController();
	}

   public function index()
   {
      return view('website.carrier');
   }
     
   public function carrierSave(Request $req)
   {
        $result=$this->service->carrierSave($req);
        return redirect('carrier')->with('status','Information Submitted Sucessfully');
        
   }

}