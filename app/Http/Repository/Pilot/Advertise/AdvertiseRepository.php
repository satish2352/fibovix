<?php
namespace App\Http\Repository\Pilot\Advertise;
use App\Model\Pilot\Advertise;
use DB;
class AdvertiseRepository
{
    public function getAllAdvertiseList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="WHERE `whoadvertising`='".session()->get('pilotId')."' and `advertiseBy`='0' ";
    	}
    	
    		return DB::Select("SELECT `id`, `title`, `content`, `advertiseBy`, `image`, `fromDate`, `toDate`, `adminStatus`, `status`, `createdAt`, `updatedAt` FROM `advertise` ".$dateCondition." ");
    }
    
    
    public function saveadvertiseForm($data)
    {
    	return Advertise::insert($data);
    }
    
    
    
    
    public function approveAdvertise($id,$data)
    {
        $result =DB::table('advertise')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}