<?php
namespace App\Http\Service\Admin\Blog;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\Blog\BlogRepository;
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
            'whoseblog'=>session()->get('adminId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'blogBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'createdOn'=>$cDate,
            'status'=>1,
            'adminStatus'=>1
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
    
    
    public function approveBlogbyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allBlog=$this->repository->approveBlogbyadmin($id,$data);
        return $allBlog;
    }
    
    
    
    
    
}