<?php
namespace App\Http\Service\Website\Pilot;
use Illuminate\Http\Request;
use App\Http\Repository\Website\Pilot\PilotRegistrationRepository;
use session;
class PilotRegistrationService
{
    public function __construct()
    {
    	$this->repository=new PilotRegistrationRepository();
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
        // if($req->category==1 || $req->category==2)
        // {
            
        //     //$category=explode(" ",$req->category);
            
            
        //     $uaopnumber='';
        //     $uaopvalidity='';
        //     $uinnumber='';
        //     $uinvalidity='';
        //     $npnt='';
        //     $ftoId='';
            
        //     $data=array(
        //     'firstName'=>$req->firstname,
        //     'middleName'=>$req->middlename,
        //     'lastName'=>$req->lastname,
        //     'email'=>$req->email,
        //     'password'=>$req->password,
        //     'mobile'=>$req->mobile,
        //     'adharNumber'=>$req->aadharNo,
        //     'category'=>$req->category,
        //     'uaopnumber'=>$uaopnumber,
        //     'uaopvalidity'=>$uaopvalidity,
        //     'uinnumber'=>$uinnumber,
        //     'uinvalidity'=>$uinvalidity,
        //     'npnt'=>$npnt,
        //     'ftoId'=>$ftoId,
        //     'droneSerialNumber'=>$req->d_serial_no,
        //     'proffession'=>$req->profession,
        //     'stateID'=>$req->state,
        //     'cityId'=>$req->city,
        //     'ftoApproved'=>1,
        //     'experience'=>$req->profession_desc,
        //     //'sentOtp'=>$sentOtp,
        //     'entryBy'=>1
        //     );
        // }
        // else
        // {
        $category = explode('*', $req->category);
        
        if($category[1]==1)
        {
            $ftoApproved=0;
        }
        else
        {
            $ftoApproved=1;
        }
        
            $data=array(
            'firstName'=>$req->firstname,
            'middleName'=>$req->middlename,
            'lastName'=>$req->lastname,
            'email'=>$req->email,
            'password'=>$req->password,
            'mobile'=>$req->mobile,
            'adharNumber'=>$req->aadharNo,
            'category'=>$category[0],
            'uaopnumber'=>$req->uaopnumber,
            'uaopvalidity'=>$req->uaopvalidity,
            'uinnumber'=>$req->uin,
            'uinvalidity'=>$req->uinvalidity,
            'npnt'=>$req->npnt,
            'ftoId'=>$req->ftoId,
            'droneSerialNumber'=>$req->d_serial_no,
            'danNumber'=>$req->dan_no,
            'drnModelNum'=>$req->drnModelNumber,
            'drnManufacturarName'=>$req->drnManufacturar,
            'insurance'=>$req->insurance,
            'insVal'=>$req->insVal,
            'proffession'=>$req->profession,
            'stateID'=>$req->state,
            'cityId'=>$req->city,
            'experience'=>$req->profession_desc,
            'ftoApproved'=>$ftoApproved,
            'sentOtp'=>$sentOtp,
            'entryBy'=>0
            );
        //}
       
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