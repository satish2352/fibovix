<?php
namespace App\Http\Repository\Admin\Rating;
use App\Model\Pilot\PilotReg;
use DB;
class PilotsRepository
{
    public function getAllPilotsList()
    {
        $underFTO=session()->get('ftoId');
        $result = DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.adharNumber,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.rating,p.createdAt,p.updatedAt
        , s.*,c.* from pilotregistration as p, states as s, cities as c where p.stateID=s.id and p.cityId=c.id ");
        return $result;
        
    }
    
    
    public function FTOPilotRating($id,$data)
    {
       
        $result =DB::table('pilotregistration')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data); 
        return 0;
        
    }
    
   
    
}