<?php
namespace App\Http\Controllers\Pilot\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Pilot\Profile\changepasswordService;
use App\Http\Controllers\Common\CommonController;
use Session;

class changepasswordController extends Controller
{
    public function __construct()
    {
        $this->service    = new changepasswordService();
        $this->serviceNew = new CommonController();
    }
    
    public function index()
    {
        $particularProfile = $this->service->getAllProfileList('');
        return view('pilot.profile.changepassword', compact('particularProfile'));
    }
    
    
    public function updatepilotchangepasswordverify(Request $req)
    {
        $changeingPassword=$req->newPassword;
        $mobile=$req->mobile;
        $sentOtpforpassword=$this->generateOTPforpassword($mobile);
        if($changeingPassword=='' or $changeingPassword==null)
        {
            return redirect('dashpilot')->with('success', 'Your Password Not Changed. Please Try Again');
        }
        return view('pilot.profile.verifyotpforchangepassword', compact('mobile','sentOtpforpassword','changeingPassword'));
    }
    
    
    public function updatepilotchangepassword(Request $req)
    {
        $allProfile = $this->service->updateProfilePassword($req);
        return redirect('dashpilot')->with('success', 'Your Password Has Been Changed Successfully');
    }
    
    
    
    // Mobile Number Change
    
    public function getpilotchangemobile()
    {
        $particularProfile = $this->service->getAllProfileList('');
        return view('pilot.profile.changemobile', compact('particularProfile'));
    }
    
    
    public function updatepilotchangemobile(Request $req)
    {
        $newMob=$req->newMobile;
        $sentOtp=$this->generateOTP($newMob);
        if($newMob=='' or $newMob==null)
        {
            return redirect('dashpilot')->with('success', 'Your Mobile Number Not Changed. Please Try Again');
        }
        return view('pilot.profile.verifyotpforchangemobnum', compact('newMob','sentOtp'));
    }
    
    
    public function updatepilotverifiedmobile(Request $req)
    {
        if(empty($req->newMobile))
        {
            return redirect('dashpilot')->with('success', 'Your Mobile Number Not Changed. Please Try Again');
        }
        $allProfile = $this->service->updateProfileMobile($req);
        return redirect('dashpilot')->with('success', 'Your Mobile Number Has Been Changed Successfully');
    }
    
    
    
    // OTP will generate    16 Jan 2020   Nandkishor
    public function generateOTP($otpMob)
    {
        $otp = rand(100000,999999);
        $otpData=array('sentOtp' => $otp);
        //$res=$this->service->storeUserOTP($mobile,$otpData);
        $msg=$otp." is the OTP for your Mobile Update Verification on RPA Pilot. Regards RPA Pilot Rays Aviation";
        $ch = "RPAPLT";
        $apiurl ="http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$otpMob&message=$msg&sender=$ch&route=4&country=91";
        
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
        
        return $otp;
    }
    
    
    // OTP will generate    16 Jan 2020   Nandkishor
    public function generateOTPforpassword($mobile)
    {
        $otp = rand(100000,999999);
        $otpData=array('sentOtpforpassword' => $otp);
        //$res=$this->service->storeUserOTP($mobile,$otpData);
        $msg=$otp." is the OTP for your Password Change Verification on RPA Pilot. Regards RPA Pilot Rays Aviation";
        $ch = "RPAPLT";
        $apiurl ="http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$mobile&message=$msg&sender=$ch&route=4&country=91";
        
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
        
        return $otp;
    }
    
    
}