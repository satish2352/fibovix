<?php
namespace App\Http\Controllers\FTO\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Service\FTO\PhotoGallery\PhotoGalleryService;
class PhotoGalleryController extends Controller
{
   public function __construct()
	{
		$this->service=new PhotoGalleryService();
	}
	
   public function index()
   {
       $allPhotoGallery=$this->service->getAllPhotoGalleryList('');
   		return view('fto.photogallery.photogallery',compact('allPhotoGallery'));
   }
   
   
    public function savePhotoGallery(Request $req)
      {
      		$allPhotoGallery=$this->service->savePhotoGalleryForm($req);
      		return redirect('ftophotolist');
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
            return redirect('ftophotolist');
        }
   
}