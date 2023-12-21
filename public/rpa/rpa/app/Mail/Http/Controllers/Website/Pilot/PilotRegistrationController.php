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
  		//$this->validateLogin($req);
  		$result=$this->service->saveRegForm($req);
         if($result)
         {
            return redirect('pilotregform');
         }
         else
         {
            return redirect('pilotregform');
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