<?php
namespace App\Http\Service\Website\Footer;
use Illuminate\Http\Request;
use App\Http\Repository\Website\Footer\ReportanerrorRepository;
use session;
class ReportanerrorService
{
    public function __construct()
    {
    	$this->repository=new ReportanerrorRepository();
    }
    
    
    
    
    public function saveReportanErrorForm($req)
    {
        $reportanerrordata=array(
            'name'=>$req->fullname,
            'email'=>$req->email,
            'mobileNumber'=>$req->mobile,
            'description'=>$req->details
            );
           $dataOfreportanerrordata=$this->repository->reportanerrorsave($reportanerrordata);
           return $dataOfreportanerrordata;
           
    }
    
    
    
    
   
    public function generateOTP($mobile)
    {
        $otp = rand(100000,999999);
        $otpData=array('sentOtp' => $otp);
        //$res=$this->service->storeUserOTP($mobile,$otpData);
        $msg=$otp." is the OTP for your verification for Request A Callback on RPA Pilot. Regards RPA Pilot Rays Aviation";
        $ch = "RPAPLT";
        // $apiurl ="http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$mobile&message=$msg&sender=$ch&route=4&country=91";
        $apiurl='0';
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
    
    
    public function requestacallBackotpverified($otp)
    {
        $data=array(
                'isVerified'=>1
            );
        $allrequestacallBackotpverified=$this->repository->requestacallBackotpverified($otp,$data);
        return $allrequestacallBackotpverified;
    }
    
    
    
   
}