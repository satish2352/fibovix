<?php
namespace App\Http\Controllers\Pilot\Advertise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Pilot\Advertise\AdvertiseService;
class AdvertiseController extends Controller
{
   public function __construct()
	{
		$this->service=new AdvertiseService();
	}
	
   public function index()
   {
       $allAdvertise=$this->service->getAllAdvertiseList('');
   		return view('pilot.advertise.advertise',compact('allAdvertise'));
   }
   
   
    public function saveAdvertise(Request $req)
      {
      		$allAdvertise=$this->service->saveAdvertiseForm($req);
      		return redirect('advertiselist');
      }
      
      
      
      
      public function approveAdvertise($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveAdvertise($id,$setApproval);
            return redirect('advertiselist');
        }
   
}