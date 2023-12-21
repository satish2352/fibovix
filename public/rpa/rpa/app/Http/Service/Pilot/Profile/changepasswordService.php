<?php
namespace App\Http\Service\Pilot\Profile;
use Illuminate\Http\Request;
use App\Http\Repository\Pilot\Profile\changepasswordRepository;
use session;
class changepasswordService
{
    public function __construct()
    {
    	$this->repository=new changepasswordRepository();
    }
    
    public function getAllProfileList($id)
    {
        $allProfile=$this->repository->getAllProfileList($id);
        return $allProfile;
    }
    
    
    public function updateProfilePassword($req)
    {
            $changepassworddata=array(
            'password'=>$req->newPassword
            );
            
           $dataOfpassword=$this->repository->updateprofilePasswordForm($changepassworddata);
    }
    
    
    
    
    
    // Change Mobile Number
    
    public function getpilotchangemobile($id)
    {
        $allProfile=$this->repository->getAllProfileList($id);
        return $allProfile;
    }
    
    
    public function updateProfileMobile($req)
    {
            $changemobiledata=array(
            'mobile'=>$req->newMobile
            );
            
           $dataOfpassword=$this->repository->updateProfileMobile($changemobiledata);
    }
    
    
    
    // OTP will generate    16 Jan 2020   Nandkishor
    // public function generateOTP($mobile)
    // {
    //     $otp = rand(100000,999999);
    //     $otpData=array('sentOtp' => $otp);
    //     //$res=$this->service->storeUserOTP($mobile,$otpData);
    //     $msg=$otp." is the OTP for your Profile Update Verification on RPA Pilot. Regards RPA Pilot Rays Aviation";
    //     $ch = "RPAPLT";
    //     $apiurl ="http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$mobile&message=$msg&sender=$ch&route=4&country=91";
        
    //     $ch = curl_init($apiurl);
        
    //     $get_url = $apiurl;
    //     curl_setopt($ch, CURLOPT_POST,0);
    //     curl_setopt($ch, CURLOPT_URL, $get_url);
        
    //     curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    //     curl_setopt($ch, CURLOPT_HEADER,0);
    //     // DO NOT RETURN HTTP HEADERS
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    //     // RETURN THE CONTENTS OF THE CALL
    //     $return_val = curl_exec($ch);
        
    //     return $otp;
    // }
    
    
    
}