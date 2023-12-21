<?php
namespace App\Http\Controllers\Admin\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\VideoGallery\VideoGalleryService;
class VideoGalleryController extends Controller
{
   public function __construct()
	{
		$this->service=new VideoGalleryService();
	}
	
   public function index()
   {
       $allVideoGallery=$this->service->getAllVideoGalleryList('');
   		return view('admin.videogallery.videogallery',compact('allVideoGallery'));
   }
   
   
    public function saveVideoGallery(Request $req)
      {
      		$allVideoGallery=$this->service->saveVideoGalleryForm($req);
      		return redirect('adminvideolist');
      }
      
      
      
      
      public function approveVideoGallery($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveVideoGallery($id,$setApproval);
            return redirect('adminvideolist');
        }
        
        
        
        public function approveVideoGallerybyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approveVideoGallerybyadmin($id,$setApproval);
            return redirect('adminvideolist');
        }
   
}