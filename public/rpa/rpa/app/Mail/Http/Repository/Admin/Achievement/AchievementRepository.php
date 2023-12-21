<?php
namespace App\Http\Repository\Admin\Achievement;
use App\Model\Admin\Achievement;
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
    		$dateCondition=" ";
    		
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
    
    
    public function approveAchievementbyadmin($id,$data)
    {
        $result =DB::table('achievement')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}