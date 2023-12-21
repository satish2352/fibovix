<?php
namespace App\Http\Controllers\Website\Advertise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Advertise\AdvertiseService;
use Session;
use DB;
class AdvertiseController extends Controller
{
   public function __construct()
	{
		$this->service=new AdvertiseService();
		//$this->servicenew=new TestimonialsService();
	}
   
   public function getAllAdvertiseList()
   {
        $cityList=DB::select("SELECT * FROM `citybyadmin`");
        $categoryInfo=DB::select("SELECT * FROM `category`");
        $allTestimonialsListFinal=DB::select("SELECT * FROM `testimonials`");
        $allAdvertiseList=$this->service->getAllAdvertiseList();
        return view('website.index', compact('allAdvertiseList','allTestimonialsListFinal','cityList','categoryInfo'));
   }
}