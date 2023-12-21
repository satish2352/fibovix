<?php
namespace App\Http\Controllers\FTO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\FTOLoginService;
class FTOLoginController extends Controller
{
   public function __construct()
	{
		$this->service=new FTOLoginService();
	}
   public function loginFTO()
   {
   		return view('fto.login');
   }
   public function validateFTOLogin(Request $req)
   {
      
   		$this->validateLogin($req);
   		$uname=$req->input('email');
   		$pass=$req->input('password');
   		$result=$this->service->validateFTOLogin($req,$uname,$pass);
         if($result)
         {
            return redirect('dashfto');
            
         }
         else
         {
            return redirect('fto');
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
      $req->session()->forget('ftoId');
      return redirect('fto');
   }
   
}