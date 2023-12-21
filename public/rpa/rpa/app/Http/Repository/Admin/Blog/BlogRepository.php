<?php
namespace App\Http\Repository\Admin\Blog;
use App\Model\Admin\Blog;
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
    		$dateCondition=" ";
    		
    	}
    	
    		return DB::Select("SELECT `id`, `whoseblog`, `blogBy`, `title`, `content`, `createdOn`, `image`, `status`, `adminStatus`, `createdAt`, `updatedAt` FROM `blog` ".$dateCondition." ");
    }
    
    
    public function saveblogForm($blogdata)
    {
    	return Blog::insert($blogdata);
    }
    
    
    
    
    public function approveBlog($id,$data)
    {
        $result =DB::table('blog')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    public function approveBlogbyadmin($id,$data)
    {
        $result =DB::table('blog')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($data);
    }
    
    
    
    
    
}