<?php
namespace App\Http\Repository\Admin\News;
use App\Model\Admin\News;
use DB;
class NewsRepository
{
    public function getAllNewsList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition=" ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whosenews`, `newsBy`, `title`, `content`, `image`, `fromDate`, `toDate`, `fromTime`, `toTime`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `news` ".$dateCondition." ");
    }
    
    
    public function savenewsForm($newsdata)
    {
    	return News::insert($newsdata);
    }
    
    
    
    
    public function approveNews($id,$data)
    {
        $result =DB::table('news')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveNewsbyadmin($id,$data)
    {
        $result =DB::table('news')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}