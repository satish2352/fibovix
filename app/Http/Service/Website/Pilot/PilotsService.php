<?php
namespace App\Http\Service\Website\Pilot;
use Illuminate\Http\Request;
use App\Http\Repository\Website\Pilot\PilotsRepository;
use session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
class PilotsService
{
    public function __construct()
    {
    	$this->repository=new PilotsRepository();
    }
    
    public function getAllPilotsList()
    {
        $allPilots=$this->repository->getAllPilotsList();
        return $allPilots;
    }
    
    
    /// Pilots Search Functions
    public function getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId)
    {
        $result=$this->repository->getAllPilotForSearchPageAfterSomeStateCityChange($stateId,$cityId);
        return $result;
    }
    
    public function getAllPilotsAdvertise()
    {
        $allPilotsAdvertise=$this->repository->getAllPilotsAdvertise();
        return $allPilotsAdvertise;
    }
    
    public function hirePilotSave($req)
    {
        $pilotId=$req->pilotId;
        $fullname=$req->fullname;
        $email=$req->email;
        $mobile=$req->mobile;
        $reason=$req->reason;
        $details=$req->details;
        $result=$this->repository->hirePilotSave($pilotId,$fullname,$email,$mobile,$reason,$details);
        return true;
        
//         $pilotEmail=$this->repository->getPilotName($pilotId);
        
//         $data=array();
//      	$data['fullname']=$fullname;
//      	$data['email']=$email;
//      	$data['mobile']=$mobile;
//      	$data['reason']=$reason;
//      	$data['details']=$details;
     	
//      	$year=date("Y");
//      	$data['currentYear']=$year;
//      	$email=$pilotEmail;
//         $nameOfSender="RPA Admin";
//         $senderSubject=$reason;
        
// 		$fromEmail=env('MAIL_USERNAME');
  	     // return Mail::send('website.mailpages.hirepilotmail',['data' => $data], function($message) use ($email,$fromEmail,$data,$senderSubject) {
        //       $message->to($email)->subject
        //           ($senderSubject);
        //         $message->from($fromEmail,'RPA PILOT');
        //     });
        // if (Mail::failures()) {
        //   print_r(Mail::failures());
        // }  
        
    }

   
}