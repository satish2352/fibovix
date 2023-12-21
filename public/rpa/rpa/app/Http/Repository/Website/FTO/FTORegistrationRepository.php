<?php
namespace App\Http\Repository\Website\FTO;
use App\Model\FTO\FTOReg;
use DB;
class FTORegistrationRepository
{
    public function saveRegForm($data)
    {
    	return FTOReg::insert($data);
    }
    
    
    public function ftootpverified($otp,$data)
    {
        
        $result =DB::table('ftoregistration')
        ->where('sentOtp', $otp)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
        
    }
}