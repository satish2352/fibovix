<?php
namespace App\Http\Service\Pilot\Blog;
use Illuminate\Http\Request;
use App\Http\Repository\Pilot\Blog\BlogRepository;
use session;
class BlogService
{
    public function __construct()
    {
    	$this->repository=new BlogRepository();
    }
    
    public function getAllBlogList($id)
    {
        $allBlog=$this->repository->getAllBlogList($id);
        return $allBlog;
    }
    
    
    
    
    
    
    public function saveBlogForm($req)
    {
        // Course Image Code
        $BlogImage=public_path()."/asset/Blog/Image";
          if ( !is_dir( $BlogImage) ) 
          {
            mkdir( $BlogImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($BlogImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            $cDate = date('d F Y');
            $blogdata=array(
            'whoseblog'=>session()->get('pilotId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'blogBy'=>0,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'status'=>1,
            'createdOn'=>$cDate,
            'adminStatus'=>0
            );
            
           $dataOfblog=$this->repository->saveblogForm($blogdata);
    }
    
    
    
    
    
    
    
    
    
    public function approveBlog($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allBlog=$this->repository->approveBlog($id,$data);
        return $allBlog;
    }
    
    
    
    
    
}