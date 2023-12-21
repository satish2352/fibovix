<?php
namespace App\Http\Controllers\Admin\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\Admin\PhotoGallery\PhotoGalleryService;
class PhotoGalleryController extends Controller
{
   public function __construct()
	{
		$this->service=new PhotoGalleryService();
	}
	
   public function index()
   {
       $allPhotoGallery=$this->service->getAllPhotoGalleryList('');
   		return view('admin.photogallery.photogallery',compact('allPhotoGallery'));
   }
   
   
    public function savePhotoGallery(Request $req)
      {
          
      		$allPhotoGallery=$this->service->savePhotoGalleryForm($req);
      		return redirect('adminphotolist');
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
            return redirect('adminphotolist');
        }
        
        
        
        public function approvePhotoGallerybyadmin($id,$approvalVal)
        {
            if($approvalVal==0)
            {
                $setApproval=1;
            }
            else
            {
                $setApproval=0;
            }
            $result=$this->service->approvePhotoGallerybyadmin($id,$setApproval);
            return redirect('adminphotolist');
        }
   
}