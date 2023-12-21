<?php
namespace App\Http\Service\Website\FTO;
use Illuminate\Http\Request;
use App\Http\Repository\Website\FTO\FTORegistrationRepository;
use session;
class FTORegistrationService
{
    public function __construct()
    {
    	$this->repository=new FTORegistrationRepository();
    }
    
    public function getStateList()
    {
        $stateresult = $this->repository->getStateList();
        return $stateresult;
    }
    
    
    public function saveRegForm($req)
    {
        //dd($req->uaopnumber);
        $sentOtp=$this->generateOTP($req->mobile);
        $data=array(
            'firstName'=>$req->firstname,
            'middleName'=>$req->middlename,
            'lastName'=>$req->lastname,
            'email'=>$req->email,
            'mobile'=>$req->mobile,
            'stateID'=>$req->state,
            'cityId'=>$req->city,
            'address'=>$req->address,
            'password'=>$req->password,
            'description'=>$req->description,
            'zipCode'=>$req->zipCode,
            'sentOtp'=>$sentOtp,
            'entryBy'=>1
            );
    	$dataOfLogin=$this->repository->saveRegForm($data);
    }
    
    
    
    
    // OTP will generate    16 Jan 2020   Nandkishor
    public function generateOTP($mobile)
    {
        $otp = rand(100000,999999);
        $otpData=array('sentOtp' => $otp);
        //$res=$this->service->storeUserOTP($mobile,$otpData);
        $msg=$otp." is the OTP for your verification for course registration on RPA Pilot. Regards RPA Pilot Rays Aviation";
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