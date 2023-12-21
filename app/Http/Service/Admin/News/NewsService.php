<?php
namespace App\Http\Service\Admin\News;
use Illuminate\Http\Request;
use App\Http\Repository\Admin\News\NewsRepository;
use session;
class NewsService
{
    public function __construct()
    {
    	$this->repository=new NewsRepository();
    }
    
    public function getAllNewsList($id)
    {
        $allNews=$this->repository->getAllNewsList($id);
        return $allNews;
    }
    
    
    
    
    
    
    public function saveNewsForm($req)
    {
        // Course Image Code
        $NewsImage=public_path()."/asset/News/Image";
          if ( !is_dir( $NewsImage) ) 
          {
            mkdir( $NewsImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($NewsImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            
            $newsdata=array(
            'whosenews'=>session()->get('adminId'),
            'title'=>$req->adsTitle,
            'content'=>$req->adsContent,
            'newsBy'=>2,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'fromDate'=>$req->fromDate,
            'toDate'=>$req->toDate,
            'status'=>1,
            'adminStatus'=>1
            );
            
            
           $dataOfnews=$this->repository->savenewsForm($newsdata);
    }
    
    
    
    
    
    
    
    
    
    public function approveNews($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allNews=$this->repository->approveNews($id,$data);
        return $allNews;
    }
    
    
    public function approveNewsbyadmin($id,$setApproval)
    {
        $data=array(
                'adminStatus'=>$setApproval
            );
        $allNews=$this->repository->approveNewsbyadmin($id,$data);
        return $allNews;
    }
    
    
    
    
    
}