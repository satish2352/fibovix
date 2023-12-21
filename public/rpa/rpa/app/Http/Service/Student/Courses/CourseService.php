<?php
namespace App\Http\Service\Student\Courses;
use Illuminate\Http\Request;
use App\Http\Repository\Student\Courses\CoursesRepository;
use session;
class CourseService
{
    public function __construct()
    {
    	$this->repository=new CoursesRepository();
    }
    
    public function getAllCoursesList($id)
    {
        $allCourses=$this->repository->getAllCoursesList($id);
        return $allCourses;
       
    }
    
    
}