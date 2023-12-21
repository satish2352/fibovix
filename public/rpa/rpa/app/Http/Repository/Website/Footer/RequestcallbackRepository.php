<?php
namespace App\Http\Repository\Website\Footer;
use App\Model\Website\Requestacallback;
use DB;
class RequestcallbackRepository
{
    
    
    public function requestacallbacksave($requestacallbackdata)
    {
        
    	return Requestacallback::insert($requestacallbackdata);
    }
    
    public function requestacallBackotpverified($otp,$data)
    {
        $result =DB::table('requestacallback')
        ->where('otp', $otp)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
}