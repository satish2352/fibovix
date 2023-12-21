<?php
namespace App\Http\Controllers\Pilot\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Pilot\PhotoGallery\PhotoGalleryService;
class PhotoGalleryController extends Controller
{
   public function __construct()
	{
		$this->service=new PhotoGalleryService();
	}
	
   public function index()
   {
       $allPhotoGallery=$this->service->getAllPhotoGalleryList('');
   		return view('pilot.uploadphoto.uploadphoto',compact('allPhotoGallery'));
   }
   
   
    public function savePhotoGallery(Request $req)
      {
      		$allPhotoGallery=$this->service->savePhotoGalleryForm($req);
      		return redirect('pilotphotolist');
      }
      
      
      
      
      public function approvePhotoGallery($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approvePhotoGallery($id,$setApproval);
            return redirect('pilotphotolist');
        }
   
}