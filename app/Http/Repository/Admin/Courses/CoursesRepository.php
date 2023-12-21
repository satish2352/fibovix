<?php
namespace App\Http\Repository\Admin\Courses;
use App\Model\Course;
use DB;
class CoursesRepository
{
    public function getAllCoursesList()
    {
        // $result = DB::select("SELECT p.id as pilotIdFInal,p.pilotId,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.adharNumber,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        // , s.*,c.* from pilotregistration as p, states as s, cities as c where p.stateID=s.id and p.cityId=c.id");
        
        
        $result = DB::select("SELECT * from courses");
        return $result;
        
    }
    
    
    // public function approvePilot($id,$data)
    // {
    //     $result =DB::table('pilotregistration')
    //     ->where('id', $id)  // find your user by their email
    //     ->limit(1)  // optional - to ensure only one record is updated.
    //     ->update($data); 
    // }
    
    
    
    public function saveCourseForm($data)
    {
    	return Course::insert($data);
    }
    
    /// Pilot Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId)
    {
        //FTO
        if($ftoId=='')
        {
            $ftoIdFinal="";
            $ftoCond="";
        }
        else
        {
            $ftoIdFinal=$ftoId;
            $ftoCond="and createdBy='".$ftoIdFinal."'";
        }
        // State
        if($stateId=='')
        {
            $stateIdFinal="";
            $stateCond="";
        }
        else
        {
            $stateIdFinal=$stateId;
            $stateCond="and state='".$stateIdFinal."'";
        }
        
        //City
        if($cityId=='')
        {
            $cityIdFinal="";
            $cityCond="";
        }
        else
        {
            $cityIdFinal=$cityId;
            $cityCond="and city='".$cityIdFinal."'";
            
        }
        $result=DB::select("SELECT `id`, `category`, `courseName`, `description`, `duration`, `price`, `commission`, `state`, `city`, `image`, `pdf`, `createdBy`, `status`, `createdAt`, `updatedAt` FROM `courses` WHERE 1  ".$stateCond." ".$cityCond." ".$ftoCond."  ");
        return $result;
    }
    
    
}