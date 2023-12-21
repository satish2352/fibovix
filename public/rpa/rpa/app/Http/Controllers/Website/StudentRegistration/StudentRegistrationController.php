<?php
namespace App\Http\Controllers\Website\StudentRegistration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\StudentRegistration\StudentRegistrationService;
use App\Http\Controllers\Common\CommonController;
use DB;
class StudentRegistrationController extends Controller
{
   public function __construct()
	{
		$this->service=new StudentRegistrationService();
		$this->serviceNew=new CommonController();
	}
	
	public function index(Request $req)
	{
	    $courseId=$req->courseId;
	    $getFTONameResult=DB::select("SELECT * FROM `courses` WHERE `id`='".$courseId."' and `createdBy`='0'");
	    if(count($getFTONameResult))
	    {
	        $ftoId=$getFTONameResult[0]->courseownerid;
	        $ftoDetails=DB::select("SELECT * FROM `ftoregistration` WHERE `id`='".$ftoId."' ");
	        $FTOName=$ftoDetails[0]->FTOName;
	    }
	    
	    if($courseId=='null' OR $courseId=='')
        {
            return redirect('webcoursessearch');
        }
        $stateList = $this->serviceNew->getAllstate('');
        $allContent = $this->serviceNew->getAllContent('');
        $professionList = $this->serviceNew->getAllprofession('');
        $FTOList = $this->serviceNew->getFTOList('');
        return view('website.studentregistration.studentregistration',compact('stateList', 'allContent','FTOList','professionList','courseId','FTOName'));
    }
	
  
   
  public function saveRegForms(Request $req)
      {
      	$sentOtp=$this->service->saveRegForms($req);
        return view('website.studentregistration.studentverifyotp',compact('sentOtp'));
      }
  
  public function studentotpverified(Request $req)
      {
          $otp=$req->otp;
          $sentOtp=$this->service->studentotpverified($otp);
      	  return redirect('webcoursessearch')->with('success', 'You Are Registered As A Student Successfully.');
      }
      
   
}