<?php
namespace App\Http\Controllers\Student\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Student\Courses\CourseService;
use App\Http\Controllers\Common\CommonController;

use Session;
class CourseController extends Controller
{
   public function __construct()
	{
		$this->service=new CourseService();
		$this->serviceNew=new CommonController();
	}
   public function index()
   {
        $allCourses=$this->service->getAllCoursesList('');
        $CategoryList=$this->serviceNew->getCategoryList('');
        $DurationList=$this->serviceNew->getDurationList('');
        $statesofAdminList=$this->serviceNew->getAllAdminState('');
        return view('student.course.courses', compact('allCourses','CategoryList','DurationList','statesofAdminList'));
   }
   
}