<?php
namespace App\Http\Controllers\Website\Pilot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\Pilot\PilotRegistrationService;
use App\Http\Controllers\Common\CommonController;
class PilotRegistrationController extends Controller
{
   public function __construct()
	{
		$this->service=new PilotRegistrationService();
		$this->serviceNew=new CommonController();
	}
	
	
   public function index()
   {
        $stateList = $this->serviceNew->getAllstate('');
        $professionList = $this->serviceNew->getAllprofession('');
        //$cityList = $this->serviceNew->getCityList();
        $CategoryList = $this->serviceNew->getCategoryList('');
        $approvedOrDis='1';
        $FTOList = $this->serviceNew->getFTOList($approvedOrDis);
   		return view('website.pilot.pilotregistration',compact('stateList','FTOList','CategoryList','professionList'));
   }
   
   
   // Pilot Registration Form Save
  public function saveRegForm(Request $req)
  {
      $sentOtp=$this->service->saveRegForm($req);
      return view('website.pilot.pilotverifyotp',compact('sentOtp'));
  }
  
  
  public function pilototpverified(Request $req)
      {
          $otp=$req->otp;
          $sentOtp=$this->service->pilototpverified($otp);
      	  return redirect('pilotregform')->with('success', 'Thank you for registering in RPA PILOT . Please log in to your account to fill details of experience for others to view. Your Profile Visible Within 24 Hours');
      }
  
  
    
    
  
  
  
  
  
//   public function validateLogin($req)						
//   {
//   		$this->validate($req,[
//   			'email.required|email',
//   			'password.required'
//   		],
//          [
//             'email.email'=>'Enter proper email adddress',
//             'email.required'=>'Enter email adddress',
//             'password.required'=>'Enter password'
//          ]
//          );
//   }

   
}