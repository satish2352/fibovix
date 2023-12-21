<?php
namespace App\Http\Repository\Admin\Pilots;
use App\Model\Pilot\PilotReg;
use DB;
class PilotsRepository
{
    public function getAllPilotsList()
    {
        $result = DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.gender,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.oannumber,p.pincode,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        , s.*,c.* from pilotregistration as p, states as s, cities as c where p.stateID=s.id and p.cityId=c.id ");
       
        return $result;
    }
    
    public function getAllPilotscovidList()
    {
        $result = DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.gender,p.category,p.courseId,p.covid19,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.oannumber,p.pincode,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        , s.*,c.* from pilotregistration as p, states as s, cities as c where p.stateID=s.id and p.cityId=c.id and p.covid19='0' ");
       
        return $result;
    }
    
    
    public function approvePilot($id,$data)
    {
       $pilotmob = DB::select("SELECT mobile from pilotregistration where id='$id' ");
         $pilmob = $pilotmob[0]->mobile;
         if($data['adminApproved'] == 1)
         {
            $this->apprvNifification($pilmob);
         }
         
        $result =DB::table('pilotregistration')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data); 
    }
    
    
    /// Pilot Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId,$ftoId)
    {
        if($ftoId=='')
        {
            $ftoIdFinal="";
            $ftoCond="";
        }
        else
        {
            $ftoIdFinal=$ftoId;
            $ftoCond="and p.ftoId='".$ftoIdFinal."'";
        }
        
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
        $result=DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.oannumber,p.pincode,p.gender,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        , s.*,c.*,ct.* from pilotregistration as p, states as s, cities as c, category ct where p.stateID=s.id and p.cityId=c.id and p.category=ct.id  ".$stateCond." ".$cityCond." ".$ftoCond."  ");
        return $result;
    }
    
    
    
    public function apprvNifification($pilmob)
    {
       
        $msg="Your Account has been Approved by Admin. Regards RPA Pilot Rays Aviation";
        $ch = "RPAPLT";
        $apiurl ="http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$pilmob&message=$msg&sender=$ch&route=4&country=91";
        
        $ch = curl_init($apiurl);
        
        $get_url = $apiurl;
        curl_setopt($ch, CURLOPT_POST,0);
        curl_setopt($ch, CURLOPT_URL, $get_url);
        
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_HEADER,0);
        // DO NOT RETURN HTTP HEADERS
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        // RETURN THE CONTENTS OF THE CALL
        $return_val = curl_exec($ch);
        
    }
    
    
}