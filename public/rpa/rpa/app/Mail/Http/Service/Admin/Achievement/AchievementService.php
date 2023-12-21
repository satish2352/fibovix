<?php
namespace App\Http\Service\Admin\Achievement;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Achievement\AchievementRepository;
use session;
class AchievementService
{
    public function __construct()
    {
    	$this->repository=new AchievementRepository();
    }
    
    public function getAllAchievementList($id)
    {
        $allAchievement=$this->repository->getAllAchievementList($id);
        return $allAchievement;
    }
    
    
    
    
    
    
    public function saveAchievementForm($req)
    {
        // Course Image Code
        $AchievementImage=public_path()."/asset/Achievement/Image";
          if ( !is_dir( $AchievementImage) ) 
          {
            mkdir( $AchievementImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($AchievementImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            
            $achievementdata=array(
            'whoseachievement'=>session()->get('adminId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'achievementBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'achievedDate'=>$req->achievedDate,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOfachievement=$this->repository->saveachievementForm($achievementdata);
    }
    
    
    
    
    
    
    
    
    
    public function approveAchievement($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allAchievement=$this->repository->approveAchievement($id,$data);
        return $allAchievement;
    }
    
    
    public function approveAchievementbyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allAchievement=$this->repository->approveAchievementbyadmin($id,$data);
        return $allAchievement;
    }
    
    
    
    
    
}