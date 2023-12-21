<?php
namespace App\Http\Controllers\Admin\Achievement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Achievement\AchievementService;
class AchievementController extends Controller
{
   public function __construct()
	{
		$this->service=new AchievementService();
	}
	
   public function index()
   {
       $allAchievement=$this->service->getAllAchievementList('');
   		return view('admin.achievement.achievement',compact('allAchievement'));
   }
   
   
    public function saveAchievement(Request $req)
      {
      		$allAchievement=$this->service->saveAchievementForm($req);
      		return redirect('adminachievementlist');
      }
      
      
      
      
      public function approveAchievement($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveAchievement($id,$setApproval);
            return redirect('adminachievementlist');
        }
        
        
        
        public function approveAchievementbyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveAchievementbyadmin($id,$setApproval);
            return redirect('adminachievementlist');
        }
   
}