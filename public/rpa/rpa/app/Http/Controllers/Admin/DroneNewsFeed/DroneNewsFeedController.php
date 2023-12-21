<?php
namespace App\Http\Controllers\Admin\DroneNewsFeed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\DroneNewsFeed\DroneNewsFeedService;
class DroneNewsFeedController extends Controller
{
   public function __construct()
	{
		$this->service=new DroneNewsFeedService();
	}
	
   public function index()
   {
       $allDroneNewsFeed=$this->service->getAllDroneNewsFeedList('');
   		return view('admin.DroneNewsFeed.DroneNewsFeed',compact('allDroneNewsFeed'));
   }
   
   
    public function saveDroneNewsFeed(Request $req)
      {
      		$allDroneNewsFeed=$this->service->saveDroneNewsFeedForm($req);
      		return redirect('adminDroneNewsFeedlist');
      }
      
      
      
      
      public function approveDroneNewsFeed($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveDroneNewsFeed($id,$setApproval);
            return redirect('adminDroneNewsFeedlist');
        }
        
        
        
        public function approveDroneNewsFeedbyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveDroneNewsFeedbyadmin($id,$setApproval);
            return redirect('adminDroneNewsFeedlist');
        }
   
}