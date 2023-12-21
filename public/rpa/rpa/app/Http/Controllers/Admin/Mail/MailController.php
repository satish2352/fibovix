<?php
namespace App\Http\Controllers\Admin\Mail;
use App\Http\Service\Admin\Mail\MailService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Common\CommonController;
use DB;
use App\Rules\Captcha;

class MailController extends Controller
{
   public  function __construct()
   {
       $this->service = new MailService();
       $this->serviceNew = new CommonController();
   }

   public function mailContent()
   {
      
   }
   
   public function index(Request $req)
   {
        $sendTo=$req->sendTo;
        $state=$req->state;
        $whome=$req->whome;
        $subject=$req->subject;
        $emailText=$req->emailText;
        if($req->sendTo)
        {
            // if(count($sendTo)>0)
            // {
           
            //     foreach($sendTo as $sendTo)
            //     {
                    switch($sendTo)
                    {
                        case "1":
                            $tableName='ftoregistration';
                            break;
                            
                        case "2":
                            $tableName='pilotregistration';
                            break;
                    }
                    $this->mailTo($tableName,$state,$whome,$subject,$emailText);
            //     }
            // }
        }
        $stateList = $this->serviceNew->getAllstate('');
        $mailSentList = $this->service->getMailSentList();
        return view('admin.mail.mail',compact('stateList','mailSentList'));
   }
   
   
   public function mailTo($tableName,$state,$whomeFinal,$subject,$emailText)
   {
        $result=$this->service->getEmailId($tableName,$state,$whomeFinal,$subject,$emailText);
        
        foreach($result as $result)
        {
            $data=array();
         	$data['emailText']=$emailText;
         	$year=date("Y");
         	$data['currentYear']=$year;
         	$email=$result->email;
            $nameOfSender="RPA Admin";
            $senderSubject=$subject;
    		$sendMail = $this->service->mailTicketToEnqPerson(env('MAIL_USERNAME'),$email,$data,$senderSubject);     
            
        }
         
   }
}