<?php
namespace App\Http\Repository\Website\StudentRegistration;
use App\Model\Website\StudentRegs;
use DB;
class StudentRegistrationRepository
{
    public function saveRegForm($data)
    {
    	return StudentRegs::insert($data);
    }
    
    public function studentotpverified($otp,$data)
    {
        
        $result =DB::table('studentregistration')
        ->where('sentOtp', $otp)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
        
    }
}