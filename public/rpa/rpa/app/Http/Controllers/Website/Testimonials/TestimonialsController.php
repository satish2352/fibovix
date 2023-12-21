<?php
namespace App\Http\Controllers\Website\Testimonials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Testimonials\TestimonialsService;
use Session;
use DB;
class TestimonialsController extends Controller
{
   public function __construct()
	{
		$this->service=new TestimonialsService();
	}
   
   public function getAllTestimonialsList()
   {
       $cityList=DB::select("SELECT * FROM `citybyadmin`");
       $categoryInfo=DB::select("SELECT * FROM `category`");
        $allTestimonialsListFinal=DB::select("SELECT * FROM `testimonials`");
       // dd($allTestimonialsListFinal);
        return view('website.index', compact('allTestimonialsListFinal','cityList','categoryInfo'));
   }
}