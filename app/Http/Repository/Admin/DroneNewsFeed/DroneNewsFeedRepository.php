<?php
namespace App\Http\Repository\Admin\DroneNewsFeed;
use App\Model\Admin\DroneNewsFeed;
use DB;
class DroneNewsFeedRepository
{
    public function getAllDroneNewsFeedList($id)
    {
        
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition=" ";
    		$dateCondition="WHERE `whoseDroneNewsFeed`='".session()->get('adminId')."' and `DroneNewsFeedBy`='2' ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `title`, `whoseDroneNewsFeed`, `DroneNewsFeedBy`, `url`, `description`, `status`, `uploadedOn`, `adminStatus`, `createdAt`, `updatedAt` FROM `DroneNewsFeed` ".$dateCondition." ");
    }
    
    
    public function saveDroneNewsFeedForm($DroneNewsFeeddata)
    {
    	return DroneNewsFeed::insert($DroneNewsFeeddata);
    }
    
    
    
    
    public function approveDroneNewsFeed($id,$data)
    {
        $result =DB::table('DroneNewsFeed')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveDroneNewsFeedbyadmin($id,$data)
    {
        $result =DB::table('DroneNewsFeed')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}