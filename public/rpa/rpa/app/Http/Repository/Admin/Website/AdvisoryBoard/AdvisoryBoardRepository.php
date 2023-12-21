<?php
namespace App\Http\Repository\Admin\Website\AdvisoryBoard;
use App\Model\Admin\AdvisoryBoard;
use DB;
class AdvisoryBoardRepository
{
    public function getAllAdvisoryBoardList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition=" ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `name`, `designation`, `title`, `content`, `image`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `websiteadvisoryboard` ".$dateCondition." ");
    }
    
    
    public function saveadvisoryboardForm($AdvisoryBoarddata)
    {
    	return AdvisoryBoard::insert($AdvisoryBoarddata);
    }
    
    
    
    
    public function approveAdvisoryBoard($id,$data)
    {
        $result =DB::table('websiteadvisoryboard')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveAdvisoryBoardbyadmin($id,$data)
    {
        $result =DB::table('websiteadvisoryboard')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}