<?php
namespace App\Http\Repository\Website\Pilot;
use App\Model\Pilot\PilotReg;
use DB;
class PilotRegistrationRepository
{
    public function saveRegForm($data)
    {
    	return PilotReg::insert($data);
    }
    
    
    
    public function pilototpverified($otp,$data)
    {
        
        $result =DB::table('pilotregistration')
        ->where('sentOtp', $otp)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
        
    }
    
    
    
}