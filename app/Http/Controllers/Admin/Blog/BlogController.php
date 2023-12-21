<?php
namespace App\Http\Controllers\Admin\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\Blog\BlogService;
class BlogController extends Controller
{
   public function __construct()
	{
		$this->service=new BlogService();
	}
	
   public function index()
   {
       $allBlog=$this->service->getAllBlogList('');
   		return view('admin.blog.blog',compact('allBlog'));
   }
   
   
    public function saveBlog(Request $req)
      {
      		$allBlog=$this->service->saveBlogForm($req);
      		return redirect('adminbloglist');
      }
      
      
      
      
      public function approveBlog($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveBlog($id,$setApproval);
            return redirect('adminbloglist');
        }
        
        
        
        public function approveBlogbyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveBlogbyadmin($id,$setApproval);
            return redirect('adminbloglist');
        }
   
}