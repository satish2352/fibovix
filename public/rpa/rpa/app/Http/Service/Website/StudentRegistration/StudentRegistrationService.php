<?php
namespace App\Http\Service\Website\StudentRegistration;
use Illuminate\Http\Request;
use App\Http\Repository\Website\StudentRegistration\StudentRegistrationRepository;
use session;
use DB;
class StudentRegistrationService
{
    public function __construct()
    {
        $this->repository = new StudentRegistrationRepository();
    }
    public function getStateList()
    {
        $stateresult = $this->repository->getStateList();
        return $stateresult;
    }
    
    public function saveRegForms($req)
    {
        $sentOtp = $this->generateOTP($req->mobile);
         $data    = array(
            'firstName' => $req->firstName,
            'middleName' => $req->middleName,
            'lastName' => $req->lastName,
            'email' => $req->email,
            'password' => $req->password,
            'mobile' => $req->mobile,
            'stateId' => $req->stateId,
            'cityId' => $req->city,
            'courseId' => $req->courseId,
            'profession' => $req->profession,
            'aadharNumber' => $req->aadharNumber,
            'addressProof' => $req->addressProof,
            'idNumber' => $req->idNumber,
            'sentOtp' => $sentOtp
        );
        // 'sentOtp' => $sentOtp
        // 'certificate' => $imageName,
        //     'passportPhoto' => $imagepassport,
        //     'addressProofFront' => $imageaadharfront,
        //     'addressProofBack' => $imageaadharback,
            
        //dd($data);
        $dataOfLogin = $this->repository->saveRegForm($data);
        $idOfrecord  = DB::getPdo()->lastInsertId();
        
        
        $certificate = public_path() . "/asset/Student/certificate";
        if (!is_dir($certificate)) {
            mkdir($certificate);
        }
        if (!empty($req->certificate)) {
            
            $imageName = $sentOtp.'certificate'.'.'.request()->certificate->getClientOriginalExtension();
            request()->certificate->move($certificate, $imageName);
        } else {
            $imageName = '';
        }
        
        
        
        
        $passportPhoto = public_path() . "/asset/Student/passportPhoto";
        if (!is_dir($passportPhoto)) {
            mkdir($passportPhoto);
        }
        if (!empty($req->passportPhoto)) {
            
            $imagepassport = $sentOtp.'passportPhoto'.'.'.request()->passportPhoto->getClientOriginalExtension();
            
            request()->passportPhoto->move($passportPhoto, $imagepassport);
        } else {
            $imagepassport = '';
        }
        
        
        
        $addressProofFront = public_path() . "/asset/Student/addressProofFront";
        if (!is_dir($addressProofFront)) {
            mkdir($addressProofFront);
        }
        if (!empty($req->addressProofFront)) {
            $imageaadharfront = $sentOtp.'addressProofFront'.'.'.request()->addressProofFront->getClientOriginalExtension();
            request()->addressProofFront->move($addressProofFront, $imageaadharfront);
        } else {
            $imageaadharfront = '';
        }
        
        
        
        $addressProofBack = public_path() . "/asset/Student/addressProofBack";
        if (!is_dir($addressProofBack)) {
            mkdir($addressProofBack);
        }
        if (!empty($req->addressProofBack)) {
            
            $imageaadharback = $sentOtp.'addressProofBack'.'.'.request()->addressProofBack->getClientOriginalExtension();
            
            request()->addressProofBack->move($addressProofBack, $imageaadharback);
        } else {
            $imageaadharback = '';
        }
        
        
        $update=DB::update("UPDATE studentregistration SET certificate='$imageName',passportPhoto='$imagepassport',addressProofFront='$imageaadharfront',addressProofBack='$imageaadharback' where id='$idOfrecord' ");
        
       
        return $sentOtp;
        
    }
    
    public function studentotpverified($otp)
    {
        $data = array(
            'otpVerified' => 1
        );
        
        $allstudentotpverified = $this->repository->studentotpverified($otp, $data);
        
        return $allstudentotpverified;
    }
    
    
    
    // OTP will generate    16 Jan 2020   Nandkishor
    public function generateOTP($mobile)
    {
        $otp     = rand(100000, 999999);
        $otpData = array(
            'sentOtp' => $otp
        );
        //$res=$this->service->storeUserOTP($mobile,$otpData);
        $msg     = $otp . " is the OTP for your verification for course registration on RPA Pilot. Regards RPA Pilot Rays Aviation";
        $ch      = "RPAPLT";
        $apiurl ="http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$mobile&message=$msg&sender=$ch&route=4&country=91";
        
        $ch = curl_init($apiurl);
        
        $get_url = $apiurl;
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_URL, $get_url);
        
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // DO NOT RETURN HTTP HEADERS
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // RETURN THE CONTENTS OF THE CALL
        $return_val = curl_exec($ch);
        
        return $otp;
    }
    
    
}