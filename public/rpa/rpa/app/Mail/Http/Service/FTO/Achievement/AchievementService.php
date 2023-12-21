<?php
namespace App\Http\Service\FTO\Achievement;
use Illuminate\Http\Request;
use App\Http\Repository\FTO\Achievement\AchievementRepository;
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
            'whoseachievement'=>session()->get('ftoId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'achievementBy'=>1,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'achievedDate'=>$req->achievedDate,
            'status'=>1,
            'adminStatus'=>0
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
    
    
    
    
    
}