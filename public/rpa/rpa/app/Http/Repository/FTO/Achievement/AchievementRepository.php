<?php
namespace App\Http\Repository\FTO\Achievement;
use App\Model\FTO\Achievement;
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
    		$dateCondition="WHERE `whoseachievement`='".session()->get('ftoId')."' and `achievementBy`='1' ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whoseachievement`, `achievementBy`, `title`, `content`, `image`, `achievedDate`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `achievement` ".$dateCondition." ");
    }
    
    
    public function saveachievementForm($achievementdata)
    {
    	return Achievement::insert($achievementdata);
    }
    
    
    
    
    public function approveAchievement($id,$data)
    {
        $result =DB::table('achievement')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}