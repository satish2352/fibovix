<?php
namespace App\Http\Service\Pilot\PhotoGallery;
use Illuminate\Http\Request;
use App\Http\Repository\Pilot\PhotoGallery\PhotoGalleryRepository;
use session;
class PhotoGalleryService
{
    public function __construct()
    {
    	$this->repository=new PhotoGalleryRepository();
    }
    
    public function getAllPhotoGalleryList($id)
    {
        $allPhotoGallery=$this->repository->getAllPhotoGalleryList($id);
        return $allPhotoGallery;
    }
    
    
    
    
    
    
    public function savePhotoGalleryForm($req)
    {
        // Course Image Code
        $PhotoGalleryImage=public_path()."/asset/PhotoGallery/Image";
          if ( !is_dir( $PhotoGalleryImage) ) 
          {
            mkdir( $PhotoGalleryImage );       
          }
          
          if (!empty($req->image))
          {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($PhotoGalleryImage, $imageName);
          }
          else
          {
              $imageName='';
          }
        
            $cDate = date('d F Y');
            $PhotoGallerydata=array(
            'whosePhotoGallery'=>session()->get('pilotId'),
            'PhotoGalleryBy'=>0,   // 0 Means Pilot, 1 FTO and 2 Means Admin
            'image'=>$imageName,
            'status'=>1,
            'uploadedOn'=>$cDate,
            'adminStatus'=>0
            );
            
           $dataOfPhotoGallery=$this->repository->savephotogalleryForm($PhotoGallerydata);
    }
    
    
    
    
    
    
    
    
    
    public function approvePhotoGallery($id,$setApproval)
    {
        $data=array(
                'status'=>$setApproval
            );
        $allPhotoGallery=$this->repository->approvePhotoGallery($id,$data);
        return $allPhotoGallery;
    }
    
    
    
    
    
}