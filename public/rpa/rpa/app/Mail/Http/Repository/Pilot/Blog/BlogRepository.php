<?php
namespace App\Http\Repository\Pilot\Blog;
use App\Model\Pilot\Blog;
use DB;
class BlogRepository
{
    public function getAllBlogList($id)
    {
    	if($id !='')
    	{
    		$dateCondition="WHERE `id`='".$id."'";
    	}
    	else
    	{
    		$dateCondition="WHERE `whoseblog`='".session()->get('pilotId')."' and `blogBy`='0' ";
    	}
    	
    		return DB::Select("SELECT `id`, `whoseblog`, `blogBy`, `title`, `createdOn`, `content`, `image`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `blog` ".$dateCondition." ");
    }
    
    
    public function saveblogForm($data)
    {
    	return Blog::insert($data);
    }
    
    
    
    
    public function approveBlog($id,$data)
    {
        $result =DB::table('blog')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}