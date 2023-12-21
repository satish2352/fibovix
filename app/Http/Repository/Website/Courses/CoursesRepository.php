<?php
namespace App\Http\Repository\Website\Courses;
use App\Model\Course;
use DB;
class CoursesRepository
{
    public function getAllCoursesList()
    {
        // $result = DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.adharNumber,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        // , s.*,c.*,ct.* from pilotregistration as p, states as s, cities as c, category ct where p.stateID=s.id and p.cityId=c.id and p.category=ct.id and p.ftoApproved='1' and p.adminApproved='1' ");
        
        $result = DB::select("SELECT c.id,c.category,c.courseName,c.description,c.duration,c.price,c.commission,c.state,c.city,c.image,c.pdf,c.createdBy,c.courseownerid,c. status,c.createdAt,c.updatedAt, ct.id as catid,ct.category,ct.status, d.id as did,d.duration,d.status from courses c, category ct, duration d where c.category=ct.id and c.duration=d.id and c.status='1' ");
        return $result;
        
    }
    
    
    public function webcourseDetails($id)
    {
        return DB::Select("SELECT c.id,c.category,c.courseName,c.description,c.duration,c.price,c.commission,c.state,c.city,c.image,c.pdf,c.createdBy,c. status,c.createdAt,c.updatedAt,ct.*,d.* from courses c, category ct, duration d where c.id=ct.id and c.duration=d.id and c.status='1' and c.id=$id ");
    }
    
    

    /// Pilot Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId)
    {
       
        
        if($stateId=='')
        {
            $stateIdFinal="";
            $stateCond="";
        }
        else
        {
            $stateIdFinal=$stateId;
            $stateCond="and p.stateID='".$stateIdFinal."'";
        }
        
        
        if($cityId=='')
        {
            $cityIdFinal="";
            $cityCond="";
        }
        else
        {
            $cityIdFinal=$cityId;
            $cityCond="and p.cityId='".$cityIdFinal."'";
            
        }
        $result=DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.adharNumber,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        , s.*,c.*,ct.* from pilotregistration as p, states as s, cities as c, category ct where p.stateID=s.id and p.cityId=c.id and p.category=ct.id and p.ftoApproved='1' and p.adminApproved='1'  ".$stateCond." ".$cityCond."   ");
        return $result;
    }
    
    
    public function getAllPilotsAdvertise()
    {
        $result = DB::select("SELECT `id`, `whoadvertising`, `advertiseBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `advertise`  ");
//where advertiseBy='0' and status='1' and adminStatus='1'
        return $result;
        
    }
    
    public function hirePilotSave($pilotId,$fullname,$email,$mobile,$reason,$details)
    {
        $result=DB::insert("INSERT INTO `hirepilot`(`pilotId`, `fullname`, `email`, `mobile`, `reason`, `details`) VALUES ('".$pilotId."','".$fullname."','".$email."','".$mobile."','".$reason."','".$details."')");
    }
    
    public function getPilotName($pilotId)
    {
        $result=DB::select("SELECT `email` FROM `pilotregistration` WHERE `id`='".$pilotId."' ");
        return $result[0]->email;
    }
    
    
}