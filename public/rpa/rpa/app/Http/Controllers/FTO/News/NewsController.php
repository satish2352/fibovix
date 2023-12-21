<?php
namespace App\Http\Controllers\FTO\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\News\NewsService;
class NewsController extends Controller
{
   public function __construct()
	{
		$this->service=new NewsService();
	}
	
   public function index()
   {
       $allNews=$this->service->getAllNewsList('');
   		return view('fto.news.news',compact('allNews'));
   }
   
   
    public function saveNews(Request $req)
      {
      		$allNews=$this->service->saveNewsForm($req);
      		return redirect('ftonewslist');
      }
      
      
      
      
      public function approveNews($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveNews($id,$setApproval);
            return redirect('ftonewslist');
        }
   
}