<?php
namespace App\Http\Controllers\Pilot\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Pilot\Profile\ProfileService;
use App\Http\Controllers\Common\CommonController;
use Session;

class ProfileController extends Controller
{
   public function __construct()
	{
		$this->service=new ProfileService();
		$this->serviceNew=new CommonController();
	}
	
   public function index()
   {
       
       $stateList = $this->serviceNew->getAllstate('');
       $cityList = $this->serviceNew->getAllcity('');
       
       $professionList = $this->serviceNew->getAllprofession('');
    //   $CategoryList = $this->serviceNew->getCategoryList('');
       $approvedOrDis='1';
       $FTOList = $this->serviceNew->getFTOList($approvedOrDis);
       //dd($FTOList);
       $particularProfile=$this->service->getAllProfileList('');
       //dd($particularProfile);
   	   return view('pilot.profile.profile',compact('particularProfile','stateList','professionList','cityList','FTOList'));
   }
   
   
    public function updatepilotprofile(Request $req)
      {
  		$allProfile=$this->service->updateProfileForm($req);
  		return redirect('dashpilot')->with('success', 'Your Profile Has Been Updated Successfully');
      }
      

   
}