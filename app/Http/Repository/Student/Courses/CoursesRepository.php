<?php
namespace App\Http\Repository\Student\Courses;
use App\Model\Course;
use DB;
class CoursesRepository
{
    public function getAllCoursesList($id)
    {
        $StudentId=session()->get('studentId');
        
    	if($id !='')
    	{
    		$dateCondition="and `id`='".$id."'  ";
    	}
    	else
    	{
    		$dateCondition="";
    	}
    	//$result = DB::select("SELECT f.id as ftoIdFInal,f.firstName,f.middleName,f.lastName,f.email,f.mobile,f.stateID,f.cityId,f.status,f.adminApproved,f.entryBy,f.createdAt,f.updatedAt
        //, s.*,c.* from ftoregistration as f, states as s, cities as c where f.stateID=s.id and f.cityId=c.id");
        
    	return DB::Select("SELECT c.id, c.category, c.courseName, c.description, c.duration, c.price, c.commission, c.state, c.city, c.image, c.pdf, c.createdBy, c.courseownerid, c.status, c.createdAt, c.updatedAt, s.id, s.courseId FROM courses c, studentregistration s where c.id = s.courseId and s.id = '$StudentId' ".$dateCondition." ");
    }
    
}