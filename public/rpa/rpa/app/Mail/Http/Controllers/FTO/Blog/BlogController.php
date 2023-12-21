<?php
namespace App\Http\Controllers\FTO\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\Blog\BlogService;
class BlogController extends Controller
{
   public function __construct()
	{
		$this->service=new BlogService();
	}
	
   public function index()
   {
       $allBlog=$this->service->getAllBlogList('');
   		return view('fto.blog.blog',compact('allBlog'));
   }
   
   
    public function saveBlog(Request $req)
      {
      		$allBlog=$this->service->saveBlogForm($req);
      		return redirect('ftobloglist');
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
            return redirect('ftobloglist');
        }
   
}