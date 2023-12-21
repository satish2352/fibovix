<?php
namespace App\Http\Repository\Admin\Advertise;
use App\Model\Admin\Advertise;
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
    		$dateCondition=" ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `title`, `content`, `advertiseBy`, `image`, `fromDate`, `toDate`, `adminStatus`, `status`, `createdAt`, `updatedAt` FROM `advertise` ".$dateCondition." ");
    }
    
    
    public function saveadvertiseForm($advertisedata)
    {
    	return Advertise::insert($advertisedata);
    }
    
    
    
    
    public function approveAdvertise($id,$data)
    {
        $result =DB::table('advertise')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveAdvertisebyadmin($id,$data)
    {
        $result =DB::table('advertise')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}