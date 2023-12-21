<?php
namespace App\Http\Controllers\Pilot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Pilot\PilotLoginService;
class PilotLoginController extends Controller
{
   public function __construct()
	{
		$this->service=new PilotLoginService();
	}
   public function loginPilot()
   {
   		return view('pilot.login');
   }
   public function validatePilotLogin(Request $req)
   {
      
   		$this->validateLogin($req);
   		$uname=$req->input('email');
   		$pass=$req->input('password');
   		$result=$this->service->validatePilotLogin($req,$uname,$pass);
         if($result)
         {
            return redirect('dashpilot');
            
         }
         else
         {
            return redirect('pilot')->with('success', 'You Have Entered Wrong Username Or Password. Please Try Again');
         }
   }
   public function validateLogin($req)						
   {
   		$this->validate($req,[
   			'email.required|email',
   			'password.required'
   		],
         [
            'email.email'=>'Enter proper email adddress',
            'email.required'=>'Enter email adddress',
            'password.required'=>'Enter password'
         ]
         );
   }
   public function logOut(Request $req)
   {
      $req->session()->forget('pilotId');
      return redirect('pilot');
   }
   
}