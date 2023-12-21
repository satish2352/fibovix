<?php
namespace App\Http\Repository\FTO\Courses;
use App\Model\Course;
use DB;
class CoursesRepository
{
    public function getAllCoursesList($id)
    {
        $FTOId=session()->get('ftoId');
    	if($id !='')
    	{
    		$dateCondition="and `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="";
    	}
    	
    	return DB::Select("SELECT `id`, `category`, `courseName`, `description`, `duration`, `price`, `commission`, `state`, `city`, `image`, `pdf`, `createdBy`, `status`, `createdAt`, `updatedAt` FROM `courses`  WHERE  `createdBy`= ".$FTOId." ".$dateCondition." ");
    }
    
    
    public function saveCourseForm($data)
    {
    	return Course::insert($data);
    }
    
    
    // Funation For Course Date
    public function getAllDateList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="";
    	}
    	
    	return DB::Select("SELECT `id`, `entryBy`,courseId, `underFTO`, `fromDate`, `toDate`, `status`, `createdAt`, `updatedAt` FROM `coursedate` ".$dateCondition." ");
    }
    
    
    public function getAllInstructorListUderFTO($id)
    {
    	return DB::Select("SELECT `id`, `entryBy`,courseId, `underFTO`, `fromDate`, `toDate`, `status`, `createdAt`, `updatedAt` FROM `coursedate` WHERE `underFTO`='".$id."' ");
    }
    
    

    public function deleteDate($courseDateId)
    {
    	return DB::delete("DELETE FROM `coursedate` WHERE `id`=".$courseDateId." ");
    }

    public function addNewDate($fromDate,$toDate,$underFTO,$courseId)
    {
        $entryBy=session()->get('ftoId');
        $underFTO=session()->get('ftoId');
    	return DB::insert("INSERT INTO `coursedate`(courseId,`fromDate`,toDate,entryBy,underFTO) VALUES ('".$courseId."','".$fromDate."','".$toDate."','".$entryBy."','".$underFTO."') ");
    }

    public function updateDate($fromDate,$toDate,$courseDateId,$underFTO,$courseId)
    {
        $underFTO=session()->get('ftoId');
        // echo "UPDATE `coursedate` SET courseId='".$courseId."',`fromDate`='".$fromDate."',`toDate`='".$toDate."'  , underFTO ='".$underFTO."' WHERE `id`='".$courseDateId."'";
        // die();
        
        // dd($fromDate);
    	return DB::update("UPDATE `coursedate` SET courseId='".$courseId."',`fromDate`='".$fromDate."',`toDate`='".$toDate."'  , underFTO ='".$underFTO."' WHERE `id`='".$courseDateId."'");
    }
    
    
    
    
    
}