<?php
namespace App\Http\Repository\Admin\DGCAPressRelease;
use App\Model\Admin\DGCAPressRelease;
use DB;
class DGCAPressReleaseRepository
{
    public function getAllDGCAPressReleaseList($id)
    {
        
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition=" ";
    		$dateCondition="WHERE `whoseDGCAPressRelease`='".session()->get('adminId')."' and `DGCAPressReleaseBy`='2' ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whoseDGCAPressRelease`, `DGCAPressReleaseBy`, `title`, `content`, `createdOn`, `pdf`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `DGCAPressRelease` ".$dateCondition." ");
    }
    
    
    public function saveDGCAPressReleaseForm($DGCAPressReleasedata)
    {
    	return DGCAPressRelease::insert($DGCAPressReleasedata);
    }
    
    
    
    
    public function approveDGCAPressRelease($id,$data)
    {
        $result =DB::table('DGCAPressRelease')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveDGCAPressReleasebyadmin($id,$data)
    {
        $result =DB::table('DGCAPressRelease')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}