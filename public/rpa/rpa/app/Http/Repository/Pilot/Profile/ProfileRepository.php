<?php
namespace App\Http\Repository\Pilot\Profile;
use App\Model\Pilot\Profile;
use DB;
class ProfileRepository
{
    public function getAllProfileList($id)
    {
            $pilotId=session()->get('pilotId');
    		$dateCondition="WHERE id='$pilotId' ";
    		return DB::Select("SELECT `id`, `firstName`, `middleName`, `lastName`, `email`, `password`, `mobile`, `proofidof`, `proffId`, `category`, `courseId`, `courseDate`, `uaopnumber`, `uaopvalidity`, `uinnumber`, `uinvalidity`, `npnt`, `ftoId`, `droneSerialNumber`, `danNumber`, `drnModelNum`, `drnManufacturarName`, `insurance`, `insVal`, `proffession`, `gender`, `stateID`, `cityId`, `pincode`, `oannumber`, `experience`, `passport`, `drivingLicence`, `eduQualification`, `passportPhoto`, `sentOtp`, `otpVerified`, `rating`, `status`, `ftoApproved`, `adminApproved`, `entryBy`, `covid19`, `createdAt`, `updatedAt` FROM `pilotregistration` ".$dateCondition." ");
    		
    }
    
    
    // public function updateprofileForm($data)
    // {
    // 	return Profile::update($data);
    // }
    
    
    
    
    public function updateprofileForm($data)
    {
        $pilotId=session()->get('pilotId');
        $result =DB::table('pilotregistration')
        ->where('id', $pilotId)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}