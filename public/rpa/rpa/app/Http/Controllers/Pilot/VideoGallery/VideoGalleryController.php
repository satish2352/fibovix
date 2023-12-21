<?php
namespace App\Http\Controllers\Pilot\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Pilot\VideoGallery\VideoGalleryService;
class VideoGalleryController extends Controller
{
   public function __construct()
	{
		$this->service=new VideoGalleryService();
	}
	
   public function index()
   {
       $allVideoGallery=$this->service->getAllVideoGalleryList('');
   		return view('pilot.uploadvideo.uploadvideo',compact('allVideoGallery'));
   }
   
   
    public function saveVideoGallery(Request $req)
      {
      		$allVideoGallery=$this->service->saveVideoGalleryForm($req);
      		return redirect('pilotvideolist');
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
            return redirect('pilotvideolist');
        }
   
}