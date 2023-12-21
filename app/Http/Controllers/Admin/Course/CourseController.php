<?php
namespace App\Http\Controllers\Admin\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Courses\CourseService;
use App\Http\Controllers\Common\CommonController;
use Session;
class CourseController extends Controller
{
   public function __construct()
	{
		$this->service=new CourseService();
		$this->serviceNew = new CommonController();
	}
   public function index()
   {
        $allCourses=$this->service->getAllCoursesList();
        //dd($allPilots);
        return view('admin.course.courses', compact('allCourses'));
   }
   
   
   public function approvePilot($id,$approvalVal)
   {
      
        if($approvalVal==0)
        {
            $setApproval=1;
            // Session::flash('success','Pilot Approved Successfully');
        }
        else
        {
            $setApproval=0;
            // Session::flash('error','Pilot Dispproved Successfully');
        }
        $result=$this->service->approvePilot($id,$setApproval);
        
        $allPilots=$this->service->getAllPilotsList();
        //Session::flash('success','Pilot Approved Successfully');
        return view('fto.pilots.pilots', compact('allPilots'));
   }
   
   
      public function savecourse(Request $req)
      {
      		$allCourses=$this->service->saveCourseForm($req);
      		return redirect('ftocourseslist');
      }
      
     /// All Below Code For Pilot Search
   public function getAllCourseForSearchPage()
   {
        $allCourses=$this->service->getAllCoursesList();
        $stateList =$this->serviceNew->getAllAdminState('');
        $allFTO=$this->serviceNew->getFTOList('');
        //dd("hello");
        return view('admin.course.coursesearch', compact('allCourses','stateList','allFTO'));
   }
   
   
   public function getAllCourseForSearchPageAfterSomeStateCityChange(Request $req)
   {
        $stateId=$req->stateId;
        $cityId=$req->cityId;
        $ftoId=$req->ftoId;
        $allCourses=$this->service->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId);
        $stateList =$this->serviceNew->getAllAdminState('');
        $cityList=$this->serviceNew->getAllAdminCityByStateId($stateId);
        //dd($cityList);
        $allFTO=$this->serviceNew->getFTOList('');
        return view('admin.course.coursesearchajax', compact('allCourses','stateList','stateId','cityList','cityId','allFTO','ftoId'));
   }

}