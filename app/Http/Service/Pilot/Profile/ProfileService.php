<?php
namespace App\Http\Service\Pilot\Profile;
use Illuminate\Http\Request;
use App\Http\Repository\Pilot\Profile\ProfileRepository;
use session;
class ProfileService
{
    public function __construct()
    {
    	$this->repository=new ProfileRepository();
    }
    
    public function getAllProfileList($id)
    {
        $allProfile=$this->repository->getAllProfileList($id);
        
        return $allProfile;
    }
    
    
    
    
    
    
    public function updateProfileForm($req)
    {
        
        //$sentOtp=$this->generateOTP($req->mobile);
           
            $PilotProfileImage=public_path()."/asset/Pilot/Image";
          if ( !is_dir( $PilotProfileImage) ) 
          {
            mkdir( $PilotProfileImage );       
          }
          
          
      
              if (!empty($req->profilePhoto))
              {     
                     if (!empty($req->unlinkprofilePhoto))
                        {
                            $imgnm=$req->unlinkprofilePhoto;
                            $delpath=public_path()."/asset/Pilot/Image/".$imgnm;
                            unlink($delpath);
                        }
                    
                    $imageName = time().'.'.request()->profilePhoto->getClientOriginalExtension();
                    request()->profilePhoto->move($PilotProfileImage, $imageName);
                   
                   
                    $covidCheckBox=$req->chbox;
                    if($covidCheckBox=='on')
                    {
                        $covid19= '0';
                    }
                    else
                    {
                        $covid19= '1';
                    }
                    
                    $profession=implode(",",$req->profession);
                    $profiledata=array(
                    'firstName'=>$req->firstname,
                    'middleName'=>$req->middlename,
                    'lastName'=>$req->lastname,
                    'email'=>$req->email,
                    'mobile'=>$req->mobile,
                    'proofidof'=>$req->proofidof,
                    'proffId'=>$req->proffId,
                    'ftoId'=>$req->ftoId,
                    'proffession'=>$profession,
                    'stateID'=>$req->state,
                    'cityId'=>$req->city,
                    'experience'=>$req->profession_desc,
                    'oannumber'=>$req->oannumber,
                    'pincode'=>$req->pincode,
                    'gender'=>$req->gender,
                    'profilePhoto'=>$imageName,
                    'covid19'=>$covid19,
                    );
                    
                    $dataOfProfile=$this->repository->updateprofileForm($profiledata);
                       
              }
              else
              {
                    $covidCheckBox=$req->chbox;
                    if($covidCheckBox=='on')
                    {
                        $covid19= '0';
                    }
                    else
                    {
                        $covid19= '1';
                    }
                    
                    $profession=implode(",",$req->profession);
                    $profiledata=array(
                    'firstName'=>$req->firstname,
                    'middleName'=>$req->middlename,
                    'lastName'=>$req->lastname,
                    'email'=>$req->email,
                    'mobile'=>$req->mobile,
                    'proofidof'=>$req->proofidof,
                    'proffId'=>$req->proffId,
                    'ftoId'=>$req->ftoId,
                    'proffession'=>$profession,
                    'stateID'=>$req->state,
                    'cityId'=>$req->city,
                    'experience'=>$req->profession_desc,
                    'oannumber'=>$req->oannumber,
                    'pincode'=>$req->pincode,
                    'gender'=>$req->gender,
                    'covid19'=>$covid19,
                    );
                 
                    $dataOfProfile=$this->repository->updateprofileForm($profiledata);
              }
    }
    
    
    
    
    
    
    
    
    
    public function approveProfile($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allProfile=$this->repository->approveProfile($id,$data);
        return $allProfile;
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