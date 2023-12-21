<?php
namespace App\Http\Controllers\Website\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Courses\CoursesService;
use App\Http\Controllers\Common\CommonController;
use Session;
use DB;
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
        $stateList =$this->serviceNew->getAllAdminState('');
        $cityList=DB::select("SELECT * FROM `citybyadmin`");
        $courseDuration=DB::select("SELECT * FROM `duration`");
        $categoryInfo=DB::select("SELECT * FROM `category`");
        return view('website.courses.coursesearch', compact('allCourses','stateList','allPilotsAdvertise','cityList','courseDuration','categoryInfo'));
   }
   
   
   public function webcourseDetails($id)
    {
        $courseDetails=$this->service->webcourseDetails($id);
        
        return view('website.courses.coursedetail', compact('courseDetails'));
    }
    
    
   
   public function getWebCourseSerachAjax(Request $req)
   {
        $stateId=$req->stateId;
        $cityId=$req->cityId;
        $courseId=$req->course;
        $courseDuration=$req->courseDuration;
        $ftoId=$req->ftoId;
        $categoryId=$req->categoryId;
        
        if($stateId=='null' || $stateId=='')
        {
            $stateIdFinal="";
        }
        else
        {
            $stateIdFinal="and state=".$stateId." ";
        }
        
        if($cityId=='null' || $cityId=='')
        {
            $cityIdFinal="";
        }
        else
        {
            $cityIdFinal="and city=".$cityId." ";
        }
        
        
        if($courseId=='null' || $courseId=='')
        {
            $courseIdFinal="";
        }
        else
        {
            $courseIdFinal="and id=".$courseId." ";
        }
        
        if($courseDuration=='null' || $courseDuration=='')
        {
            $courseDurationFinal="";
        }
        else
        {
            $courseDurationFinal="and duration=".$courseDuration." ";
        }
        
        if($categoryId=='null' || $categoryId=='')
        {
            $categoryFinal="";
        }
        else
        {
            $categoryFinal="and category=".$categoryId." ";
        }
        
        // echo "SELECT * FROM `courses` WHERE `status`='1' $stateIdFinal $cityIdFinal $courseIdFinal $courseDurationFinal";
        // die();
        
        $allCourses=DB::select(DB::raw("SELECT * FROM `courses` WHERE `status`='1' $stateIdFinal $cityIdFinal $courseIdFinal $courseDurationFinal $categoryFinal "));
        return view('website.courses.coursesearchajax', compact('allCourses','stateList','stateId','cityList','cityId'));
   }
   
   
   /// Index Page Search For Course
   public function indexPageCourseSearch()
   {
        $allPilotsAdvertise=$this->service->getAllPilotsAdvertise();
        $allCourses=$this->service->getAllCoursesList();
        $stateList =$this->serviceNew->getAllAdminState('');
        $cityList=DB::select("SELECT * FROM `citybyadmin`");
        $courseDuration=DB::select("SELECT * FROM `duration`");
        $categoryInfo=DB::select("SELECT * FROM `category`");
        return view('website.courses.coursesearch', compact('allCourses','stateList','allPilotsAdvertise','cityList','courseDuration','categoryInfo'));
   }
}