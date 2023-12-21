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
  		//$this->validateLogin($req);
  		$result=$this->service->saveRegForm($req);
         if($result)
         {
            return redirect('dashadmin');
         }
         else
         {
            return redirect('admin');
         }
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