<?php
namespace App\Http\Repository\FTO\Pilots;
use App\Model\Pilot\PilotReg;
use DB;
class PilotsRepository
{
    public function getAllPilotsList()
    {
        $underFTO=session()->get('ftoId');
        $result = DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.adharNumber,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        , s.*,c.* from pilotregistration as p, states as s, cities as c where p.stateID=s.id and p.cityId=c.id and ftoId='".$underFTO."'");
        return $result;
        
    }
    
    
    public function approvePilot($id,$data,$setApproval,$dataAdmin)
    {
       
        // $result = PilotReg::update($data)->where('id','=',$id);
        // return $result;
        
        $result =DB::table('pilotregistration')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data); 
        
        if($setApproval===0)
        {
            $result =DB::table('pilotregistration')
            ->where('id', $id)  // find your user by their email
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update($dataAdmin); 
        }
        
        return 0;
        
    }
    
    /// Pilot Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId)
    {
        $underFTO=session()->get('ftoId');
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
        , s.*,c.*,ct.* from pilotregistration as p, states as s, cities as c, category ct where p.stateID=s.id and p.cityId=c.id and p.category=ct.id and ftoId='".$underFTO."'  ".$stateCond." ".$cityCond."  ");
        return $result;
    }
    
    
}