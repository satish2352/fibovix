<?php
namespace App\Http\Controllers\Website\FTO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Website\FTO\FTORegistrationService;
use App\Http\Controllers\Common\CommonController;
class FTORegistrationController extends Controller
{
   public function __construct()
	{
		$this->service=new FTORegistrationService();
		$this->serviceNew=new CommonController();
	}
	
	
   public function index()
   {
        $stateList = $this->serviceNew->getAllstate('');
   		return view('website.fto.ftoregistration',compact('stateList'));
   }
   
   
   // FTO Registration Form Save
  public function saveRegForm(Request $req)
  {
  	$sentOtp=$this->service->saveRegForm($req);
  	return redirect('ftoregform')->with('success', 'You Are Registered As A FTO Successfully.');
      //return view('website.fto.ftoverifyotp',compact('sentOtp'));
  }
  
  
  
  
  public function ftootpverified(Request $req)
      {
          $otp=$req->otp;
          $sentOtp=$this->service->ftootpverified($otp);
      	  return redirect('ftoregform')->with('success', 'You Are Registered As FTO Successfully Please Login As FTO ,For Further Information Fillup');
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