<?php
namespace App\Http\Controllers\Website\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Courses\CoursesService;
use App\Http\Controllers\Common\CommonController;
use Session;
class CoursesController extends Controller
{
   public function __construct()
	{
		$this->service=new CoursesService();
		$this->serviceNew = new CommonController();
	}
  
   
   /// All Below Code For Pilot Search
   public function webCoursesSearch()
   {
        $allPilotsAdvertise=$this->service->getAllPilotsAdvertise();
        $allCourses=$this->service->getAllCoursesList();
        $stateList =$this->serviceNew->getAllstate('');
        return view('website.courses.coursesearch', compact('allCourses','stateList','allPilotsAdvertise'));
   }
   
   
   public function getAllPilotForSearchPageAfterSomeStateCityChange(Request $req)
   {
        $stateId=$req->stateId;
        $cityId=$req->cityId;
        $ftoId=$req->ftoId;
        $allCourses=$this->service->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId);
        $stateList =$this->serviceNew->getAllstate('');
        $cityList=$this->serviceNew->getAllcityByStateId($stateId);
        return view('website.pilot.pilotsearchajax', compact('allCourses','stateList','stateId','cityList','cityId'));
   }
}