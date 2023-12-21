<?php
namespace App\Http\Service\Admin\Mail;
use Session;
use App\Http\Repository\Support\SupportRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use DB;

class MailService
{
	// public function __construct()
	// {
	// 	$this->reposit = new SupportRepository();
	// }

  public function getEmailId($tableName,$state,$whome,$subject,$emailText)
  {
      $stateFinal='';
      foreach($state as $state)
      {
          $stateFinal=$stateFinal.$state.",";
      }
      
      $stateFinal=rtrim($stateFinal,",");
      // Data Insert into Database
        switch($tableName)
        {
            case "ftoregistration":
                $tableNameNew='FTO';
                break;
                
            case "pilotregistration":
                $tableNameNew='PILOT';
                break;
        }
      
        switch($whome)
        {
            case "1":
                $whomeFinalNew="All";
                break;
                
            case "2":
                $whomeFinalNew="Approved";
                break;
                
            case "3":
                $whomeFinalNew='Not Approved';
                break;
        }
        
      
      $result=DB::insert("INSERT INTO `mailsentbyadmin`(`sentTo`, `toWhome`, `stateId`, `subject`, `emailText`) 
      VALUES ('".$tableNameNew."','".$whomeFinalNew."','".$stateFinal."','".$subject."','".$emailText."')");
      
      /// Actual Mail Sending Code
        
        switch($whome)
        {
            case "1":
                $whomeFinal="";
                break;
                
            case "2":
                $whomeFinal="and adminApproved=1";
                break;
                
            case "3":
                $whomeFinal='and adminApproved=0';
                break;
        }
        
      $result=DB::select("SELECT email,stateID FROM ".$tableName."   WHERE stateID IN ($stateFinal) $whomeFinal ");
      return $result;
  }
  
  public function getMailSentList()
  {
      return DB::select("SELECT `id`, `sentTo`, `toWhome`, `stateId`, `subject`, `emailText`, `createdAt`, `updatedAt` FROM `mailsentbyadmin`");
  }
  public function mailTicketToEnqPerson($fromEmail,$toEmail,$data,$senderSubject)
  {
        //  echo $fromEmail." ".$toEmail." ".$senderSubject;
        //  print_r($data);
        //  die();
         
         
  	      return Mail::send('admin.mailpages.adminmailtoall',['emailText' => $data['emailText'],'currentYear' => $data['currentYear']], function($message) use ($toEmail,$fromEmail,$data,$senderSubject) {
               $message->to($toEmail)->subject
                   ($senderSubject);
                $message->from($fromEmail,'RPA PILOT');
            });
            
        if (Mail::failures()) {
          print_r(Mail::failures());
        }

  }

  
	

}