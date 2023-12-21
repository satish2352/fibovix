<?php
namespace App\Http\Repository\Admin\Event;
use App\Model\Admin\Event;
use DB;
class EventRepository
{
    public function getAllEventList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition=" ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whoeventing`, `eventBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `fromTime`, `toTime`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `events` ".$dateCondition." ");
    }
    
    
    public function saveeventForm($eventdata)
    {
    	return Event::insert($eventdata);
    }
    
    
    
    
    public function approveEvent($id,$data)
    {
        $result =DB::table('events')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveEventbyadmin($id,$data)
    {
        $result =DB::table('events')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}