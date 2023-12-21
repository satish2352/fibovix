<?php
namespace App\Http\Repository\Pilot\Event;
use App\Model\Pilot\Event;
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
    		$dateCondition="WHERE `whoeventing`='".session()->get('pilotId')."' and `eventBy`='0' ";
    	}
    	
    		return DB::Select("SELECT `id`, `whoeventing`, `eventBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `fromTime`, `toTime`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `events` ".$dateCondition." ");
    }
    
    
    public function saveeventForm($eventdata)
    {
        //dd($eventdata);
    	return Event::insert($eventdata);
    }
    
    
    
    
    public function approveEvent($id,$data)
    {
        $result =DB::table('events')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}