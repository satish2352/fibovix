<?php
namespace App\Http\Repository\Pilot\Achievement;
use App\Model\Pilot\Achievement;
use DB;
class AchievementRepository
{
    public function getAllAchievementList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="WHERE `whoseachievement`='".session()->get('pilotId')."' and `achievementBy`='0' ";
    	}
    	
    		return DB::Select("SELECT `id`, `whoseachievement`, `achievementBy`, `title`, `content`, `image`, `achievedDate`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `achievement` ".$dateCondition." ");
    }
    
    
    public function saveachievementForm($data)
    {
    	return Achievement::insert($data);
    }
    
    
    
    
    public function approveAchievement($id,$data)
    {
        $result =DB::table('achievement')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}